<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Rethouse - Real Estate HTML Template">
    <meta name="keywords" content="Real Estate, Property, Directory Listing, Marketing, Agency" />
    <meta name="author" content="mardianto - retenvi.com">
    <title>Vee Estates - Vesicash Real Estate Project</title>

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <link rel="manifest" href="site.webmanifest">
    <!-- favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="icon.png">
    <meta name="theme-color" content="#3454d1">
    <link href="{{ asset('assets') }}/css/styles.css?fd365619e86ad9137a29" rel="stylesheet">
</head>

<body>
    <!-- HEADER -->
    <header class="jumbotron bg-theme">
        <div class="bg-overlay"></div>
        <!-- NAVBAR -->
        <nav class="navbar navbar-hover navbar-expand-lg navbar-soft navbar-transparent">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <h2>Vee Estates</h2>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav99">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="main_nav99">
                    <ul class="navbar-nav mx-auto ">
                        <li class="nav-item dropdown">
                            <a class="nav-link active" href="/"> Home </a>

                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link " href="{{ url('properties') }}"> Properties </a>

                        </li>



                        <li class="nav-item dropdown">
                            <a class="nav-link active " href="#"> Blog </a>

                        </li>

                        <li class="nav-item"><a class="nav-link" href="{{ url('contact') }}"> contact </a></li>
                    </ul>


                    <!-- Search bar.// -->
                    <ul class="navbar-nav ">
                        <li>
                            <a href="#" class="btn btn-primary text-capitalize">
                                <i class="fa fa-plus-circle mr-1"></i> @if(Auth::user())
                                                            {{ Auth::user()->name }} @else
                                                            Login
                                                            @endif
                                                                </a>
                        </li>
                    </ul>
                    <!-- Search content bar.// -->
                    <div class="top-search navigation-shadow">
                        <div class="container">
                            <div class="input-group ">
                                <form action="#">

                                    <div class="row no-gutters mt-3">
                                        <div class="col">
                                            <input class="form-control border-secondary border-right-0 rounded-0"
                                                type="search" value="" placeholder="Search " id="example-search-input4">
                                        </div>
                                        <div class="col-auto">
                                            <a class="btn btn-outline-secondary border-left-0 rounded-0 rounded-right"
                                                href="/">
                                                <i class="fa fa-search"></i>
                                            </a>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Search content bar.// -->
                </div> <!-- navbar-collapse.// -->
            </div>
        </nav>

        @yield('content')


        <footer>


            <!-- Footer Bottom -->
            <div class="bg__footer-bottom-v1">
                <div class="container">
                    <div class="row flex-column-reverse flex-md-row">
                        <div class="col-md-6">
                            <span>
                                © 2021 Vee Estates - A Project by Vesicash; theme by
                                <a href="#">retenvi.com</a>
                            </span>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-inline ">
                                <li class="list-inline-item">
                                    <a href="#">
                                        privacy
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        contact
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        about
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        faq
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Footer  -->
        </footer>


        <!-- SCROLL TO TOP -->
        <a href="javascript:" id="return-to-top"><i class="fa fa-chevron-up"></i></a>
        <!-- END SCROLL TO TOP -->
        <script src="{{ asset('assets') }}/js/index.bundle.js?fd365619e86ad9137a29"></script>
    </body>

    </html>
