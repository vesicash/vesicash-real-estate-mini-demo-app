<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [UserController::class, 'index'])->name('welcome');
Route::get('/properties', [UserController::class, 'properties'])->name('properties');
Route::get('/property/{id}', [UserController::class, 'singleProperty'])->name('single_property');
Route::get('/fund-transaction', [UserController::class, 'fundTransaction'])->name('fund_transaction');
Route::view('contact', 'contact')->name('contact');
Route::view('paynow', 'paynow')->name('paynow');
Route::get('/home', function () {
    return redirect('/');
});


Route::get('/pay_with_escrow/{id}', [UserController::class, 'payWithVesicash'])->name('payWithVesicash');

require __DIR__ . '/admin.php';
