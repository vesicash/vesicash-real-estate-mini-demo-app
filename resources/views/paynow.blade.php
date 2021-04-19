@extends('layouts.base')
@section('content')
<div class="wrap-notfound bg-theme-v8 full-height">
    <div class="container h-100 ">
        <div class="row align-items-center h-100">
            <div class="col mx-auto">
                <div class="notfound-page ">
                    <h1>
                        Escrow
                    </h1>
                    <p>
                        Transaction Created for you property
                        <br />
                        <span>
                            Proceed to pay, using Vesicash Escrow System
                        </span>
                        <br />
                    </p>
                    <div class="mt20">
                        <a class="btn btn-primary" href="{{ url('fund-transaction') }}">
                            <i class="fa fa-reply">
                            </i>
                            Pay Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
