@extends('layouts.base')

@section('content')
<section class="section__breadcrumb ">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8 text-center">
                <h2 class="text-capitalize text-white ">Vee Estates Properties</h2>
                <ul class="list-inline ">
                    <li class="list-inline-item">
                        <a href="/" class="text-white">
                            Home
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="text-white">
                            Vee Estates Properties
                        </a>
                    </li>


                </ul>
            </div>
        </div>
    </div>
</section>
</header>
<div class="clearfix"></div>
<!-- END BREADCRUMB -->
<div class="search__area bg__shadow">
    <div class="container">
        <div class="search__area-inner">
            <div class="row">
                <div class="col-6 col-lg-3 col-md-3">
                    <div class="form-group">
                        <select class="wide select_option">
                            <option data-display="Property Status">Property Status</option>
                            <option>For Sale</option>
                            <option>For Rent</option>

                        </select>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-3">
                    <div class="form-group">
                        <select class="wide select_option">
                            <option data-display="Property Type">Property Type</option>
                            <option>Residential</option>
                            <option>Commercial</option>
                            <option>Land</option>
                            <option>Luxury</option>
                        </select>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-3">
                    <div class="form-group">
                        <select class="wide select_option">
                            <option data-display="Area From">Area From </option>
                            <option>1500</option>
                            <option>1200</option>
                            <option>900</option>
                            <option>600</option>
                            <option>300</option>
                            <option>100</option>
                        </select>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-3">
                    <div class="form-group">
                        <select class="wide select_option">
                            <option data-display="Locations">Locations</option>
                            <option>United Kingdom</option>
                            <option>American Samoa</option>
                            <option>Belgium</option>
                            <option>Canada</option>
                            <option>Delaware</option>
                            <option>Indonesia</option>
                            <option>Malaysia</option>
                            <option>Japan</option>
                        </select>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-3">
                    <div class="form-group">
                        <select class="wide select_option">
                            <option data-display="Bedrooms">Bedrooms</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                        </select>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-3">
                    <div class="form-group">
                        <select class="wide select_option">
                            <option data-display="Bathrooms">Bathrooms</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>


                        </select>
                    </div>
                </div>
                <div class="col-12 col-lg-3 col-md-3">
                    <div class="form-group">
                        <div class="filter__price">
                            <input class="price-range" type="text" name="my_range" value="" />
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3 col-md-3">
                    <div class="form-group">
                        <button class="btn btn-primary text-uppercase btn-block"> search <i
                                class="fa fa-search ml-1"></i></button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- LISTING LIST -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tabs__custom-v2 ">
                            <!-- FILTER VERTICAL -->
                            <ul class="nav nav-pills myTab" role="tablist">
                                <li class="list-inline-item mr-auto">
                                    <span class="title-text">Sort by</span>
                                    <div class="btn-group">
                                        <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            Based Properties
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="javascript:void(0)">Low to High Price</a>
                                            <a class="dropdown-item" href="javascript:void(0)">High to Low Price
                                            </a>
                                            <a class="dropdown-item" href="javascript:void(0)">Sell Properties</a>

                                            <a class="dropdown-item" href="javascript:void(0)">Rent Properties</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#pills-tab-one" role="tab"
                                        aria-controls="pills-tab-one" aria-selected="true">
                                        <span class="fa fa-th-list"></span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="pill" href="#pills-tab-two" role="tab"
                                        aria-controls="pills-tab-two" aria-selected="false">
                                        <span class="fa fa-th-large"></span></a>
                                </li>
                            </ul>



                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade" id="pills-tab-one" role="tabpanel"
                                    aria-labelledby="pills-tab-one">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card__image card__box-v1">
                                                @foreach ($properties as $item)
                                                <div class="row no-gutters">
                                                    <div class="col-md-4 col-lg-3 col-xl-4">
                                                        <div class="card__image__header h-250">
                                                            <a href="#">
                                                                <div class="ribbon text-capitalize">sold out</div>
                                                                <img src="{{ $item->image }}" alt=""
                                                                    class="img-fluid w100 img-transition">
                                                                <div class="info"> for sale</div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-lg-6 col-xl-5 my-auto">
                                                        <div class="card__image__body">

                                                            <span
                                                                class="badge badge-primary text-capitalize mb-2">house</span>
                                                            <h6>
                                                                <a href="{{ url('property') }}/{{ $item->id }}">{{ $item->title }}</a>
                                                            </h6>
                                                            <div class="card__image__body-desc">

                                                                <p class="text-capitalize">
                                                                    <i class="fa fa-map-marker"></i>
                                                                    {{ $item->address }}
                                                                </p>
                                                            </div>

                                                            <ul class="list-inline card__content">
                                                                <li class="list-inline-item">

                                                                    <span>
                                                                        baths <br>
                                                                        <i class="fa fa-bath"></i> {{ $item->bathroom }}
                                                                    </span>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <span>
                                                                        beds <br>
                                                                        <i class="fa fa-bed"></i> {{ $item->bedroom }}
                                                                    </span>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <span>
                                                                        rooms <br>
                                                                        <i class="fa fa-inbox"></i> {{ $item->bedroom }}
                                                                    </span>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <span>
                                                                        area <br>
                                                                        <i class="fa fa-map"></i> {{ $item->area }} sq ft
                                                                    </span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-md-4 col-lg-3 col-xl-3 my-auto card__image__footer-first">
                                                        <div class="card__image__footer">
                                                            <figure>
                                                                <img src="{{ $item->image }}" alt=""
                                                                    class="img-fluid rounded-circle">
                                                            </figure>
                                                            <ul class="list-inline my-auto">
                                                                <li class="list-inline-item name">
                                                                    <a href="#">
                                                                        Vee Estates
                                                                    </a>

                                                                </li>


                                                            </ul>
                                                            <ul class="list-inline my-auto ml-auto price">
                                                                <li class="list-inline-item ">

                                                                    <h6>&#8358;{{ $item->price }}</h6>
                                                                </li>

                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>

                                    </div>

                                    <div class="clearfix"></div>
                                </div>
                                <div class="tab-pane fade show active" id="pills-tab-two" role="tabpanel"
                                    aria-labelledby="pills-tab-two">
                                    <div class="row">
                                        @foreach ($properties as $item)
                                        <div class="col-md-4 col-lg-4">
                                            <div class="card__image card__box-v1">
                                                <div class="card__image-header h-250">
                                                    <div class="ribbon text-capitalize">featured</div>
                                                    <img src="{{ $item->image }}" alt=""
                                                        class="img-fluid w100 img-transition">
                                                    <div class="info"> for sale</div>
                                                </div>
                                                <div class="card__image-body">
                                                    <span
                                                        class="badge badge-primary text-capitalize mb-2">house</span>
                                                    <h6 class="text-capitalize">
                                                        <a href="{{ url('property') }}/{{ $item->id }}"> {{ $item->title }} </a>
                                                    </h6>

                                                    <p class="text-capitalize">
                                                        <i class="fa fa-map-marker"></i>
                                                        {{ $item->address }}
                                                    </p>
                                                    <ul class="list-inline card__content">
                                                        <li class="list-inline-item">

                                                            <span>
                                                                baths <br>
                                                                <i class="fa fa-bath"></i> {{ $item->bathroom }}
                                                            </span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <span>
                                                                beds <br>
                                                                <i class="fa fa-bed"></i> {{ $item->bedroom }}
                                                            </span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <span>
                                                                rooms <br>
                                                                <i class="fa fa-inbox"></i> {{ $item->bedroom }}
                                                            </span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <span>
                                                                area <br>
                                                                <i class="fa fa-map"></i> {{ $item->area }} sq ft
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="card__image-footer">
                                                    <figure>
                                                        <img src="{{ $item->image }}" alt=""
                                                            class="img-fluid rounded-circle">
                                                    </figure>
                                                    <ul class="list-inline my-auto">
                                                        <li class="list-inline-item ">
                                                            <a href="#">
                                                                Vee Estates
                                                            </a>

                                                        </li>

                                                    </ul>
                                                    <ul class="list-inline my-auto ml-auto">
                                                        <li class="list-inline-item">

                                                            <h6>&#8358;{{ $item->price }}</h6>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach


                                    </div>

                                    <div class="cleafix"></div>
                                </div>



                            </div>
                            <!-- END FILTER VERTICAL -->
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- END LISTING LIST -->

<!-- CALL TO ACTION -->
<section class="cta-v1 py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-9">
                <h2 class="text-uppercase text-white">Looking To Sell Or Rent Your Property?</h2>
                <p class="text-capitalize text-white">We Will Assist You In The Best And Comfortable Property
                    Services
                    For You
                </p>

            </div>
            <div class="col-lg-3">
                <a href="#" class="btn btn-light text-uppercase ">Contact Us
                    <i class="fa fa-angle-right ml-3 arrow-btn "></i></a>
            </div>
        </div>
    </div>
</section>

@endsection
