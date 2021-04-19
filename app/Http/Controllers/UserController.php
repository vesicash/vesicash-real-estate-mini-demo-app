<?php

namespace App\Http\Controllers;
use App\Models\Property;
use App\Models\Post;
use Vesicash;
use Illuminate\Http\Request;
use VesicashServices;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $properties = Property::where('featured',1)->get();
        $recent_properties  = Property::latest()->where('featured',1)->take(6)->get();
        $posts          = Post::latest()->where('status',1)->take(6)->get();
        return view('welcome', compact('properties','posts', 'recent_properties'));
    }
    public function properties() {

        $properties = Property::latest()->paginate(12);

        return view('properties', compact('properties'));
    }
    public function singleProperty($id) {
        $property = Property::where('id', $id)->first();
        return view('single_property', compact('property'));
    }
    public function payWithVesicash(Request $request, $id) {
        $vesicash = new VesicashServices(env('VESICASH_PRIVATE_KEY'), 'sandbox');
        try {
            $signup = $vesicash->service('auth')->signup([
                'account_type' => 'business',
                'business_type' => 'social_commerce',
                'email_address' => Auth::user()->email,
                'password'      => 'password',
                'country'       => 'Nigeria'
            ]);
            $s_response = json_decode($signup);

            if($s_response->status == 'ok') {
                $user = Auth::user();
                $user->vesicash_account_id = $s_response->data->user->account_id;
                $user->save();
                try {
                    $property = Property::where('id', $id)->first();
                    // Product Transaction(Real Estate)
                    $createProductTransaction = $vesicash->service('transactions')->create([
                        'title'         => $property->title,
                        'type'          => 'product',
                        'products'      => [
                                [
                                    'title'     => $property->title,
                                    'quantity'  => 1,
                                    'amount'    => $property->price,
                                ],

                        ],
                        'description' => $property->title,
                        'parties'     => [
                            'sender'            => Auth::user()->vesicash_account_id,
                            'recipient'         => 7910510414,
                            'buyer'             => Auth::user()->vesicash_account_id,
                            'seller'            => 7910510414,
                            'charge_bearer'     => 7910510414,
                            'shipping_charge_bearer' => 7910510414,
                            'shipping_charge_recipient' => 7910510414
                        ],
                        'inspection_period'     => 1,
                        'due_date'              => '2/12/2021',
                        'currency'              => 'NGN'
                    ]);

                } catch (\Exception $e) {
                    // Catch any error
                    throw new \Exception($e->getMessage());
                }
                $response = json_decode($createProductTransaction);

                // dd($response);
                if ($response->code == 200) {
                    session(['transaction_id' => $response->data->transaction->transaction_id]);
                } else {
                    die("Failed to create transaction");
                }
                return redirect('paynow')->with('success_messge', 'Transactio created successfuly, pay now');
            }


        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }
    public function fundTransaction() {
        $vesicash = new VesicashServices(env('VESICASH_PRIVATE_KEY'), 'sandbox');

        try {
            $pay = $vesicash->service('payment')->pay([
                'transaction_id' => session('transaction_id')
            ]);

        } catch (\Exception $e) {

            throw new \Exception($e->getMessage());
        }
        $response = json_decode($pay);
        // dd($response);
        if($response->code == 200) {
            $paymentPage = $response->data->link;
            return redirect()->away($paymentPage);
        }
    }
}
