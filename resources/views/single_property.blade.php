@extends('layouts.base')
@section('content')
<section class="section__breadcrumb ">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8 text-center">
                <h2 class="text-capitalize text-white ">{{ $property->title }}</h2>
                <ul class="list-inline ">
                    <li class="list-inline-item">
                        <a href="#" class="text-white">
                            home
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="text-white">
                            {{ $property->title }}
                        </a>
                    </li>


                </ul>
            </div>
        </div>
    </div>
</section>
<!-- END BREADCRUMB -->
<!-- END BREADCRUMB -->
</header>
<div class="clearfix"></div>

<!-- SINGLE DETAIL -->
<section class="single__Detail">
<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <!-- SLIDER IMAGE DETAIL -->
            <div class="slider__image__detail-large owl-carousel owl-theme">
                <div class="item">
                    <div class="slider__image__detail-large-one">
                        <img src="{{ $property->image }}" alt="" class="img-fluid w-100 img-transition">
                        <div class="description">
                            <figure>
                                <img src="{{ $property->image }}" alt="" class="img-fluid">
                            </figure>
                            <span class="badge badge-primary text-capitalize mb-2">house</span>
                            <div class="price">
                                <h5 class="text-capitalize">&#8358;{{ $property->price }}</h5>
                            </div>
                            <h4 class="text-capitalize">{{ $property->title }}</h4>

                        </div>

                    </div>
                </div>

            </div>

            <div class="slider__image__detail-thumb owl-carousel owl-theme">
                <div class="item">
                    <div class="slider__image__detail-thumb-one">
                        <img src="{{ $property->image }}" alt="" class="img-fluid w-100 img-transition">
                    </div>
                </div>
                <div class="item">
                    <div class="slider__image__detail-thumb-one">
                        <img src="{{ $property->image }}" alt="" class="img-fluid w-100 img-transition">
                    </div>
                </div>
                <div class="item">
                    <div class="slider__image__detail-thumb-one">
                        <img src="{{ $property->image }}" alt="" class="img-fluid w-100 img-transition">
                    </div>
                </div>

            </div>
            <!-- END SLIDER IMAGE DETAIL -->
            <div class="row">
                <div class="col-md-9 col-lg-9">
                    <div class="single__detail-title mt-4">
                        <h3 class="text-capitalize">{{ $property->title }}</h3>
                        <p> {{ $property->address }}</p>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="single__detail-price mt-4">
                        <h3 class="text-capitalize text-gray">&#8358;{{ $property->price }}</h3>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="#" class="badge badge-primary p-2 rounded"><i
                                        class="fa fa-print"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="badge badge-primary p-2 rounded"><i
                                        class="fa fa-exchange"></i></a>
                            </li>

                            <li class="list-inline-item">
                                <a href="#" class="badge badge-primary p-2 rounded"><i
                                        class="fa fa-heart"></i></a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
            <!-- DESCRIPTION -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="single__detail-desc">
                        <h6 class="text-capitalize detail-heading">description</h6>
                        <div class="show__more">
                            {!! $property->description !!}

                            <a href="javascript:void(0)" class="show__more-button ">read more</a>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <!-- PROPERTY DETAILS SPEC -->
                    <div class="single__detail-features">
                        <h6 class="text-capitalize detail-heading">property details</h6>
                        <!-- INFO PROPERTY DETAIL -->
                        <div class="property__detail-info">
                            <div class="row">
                                <div class="col-md-6 col-lg-6">
                                    <ul class="property__detail-info-list list-unstyled">
                                        <li><b>Property ID:</b> RV151</li>
                                        <li><b>Price:</b> $484,400</li>
                                        <li><b>Property Size:</b> 1466 Sq Ft</li>
                                        <li><b>Bedrooms:</b> 4</li>
                                        <li><b>Bathrooms:</b> 2</li>
                                    </ul>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <ul class="property__detail-info-list list-unstyled">
                                        <li><b>Garage:</b> 1</li>
                                        <li><b>Garage Size:</b> 458 SqFt</li>
                                        <li><b>Year Built:</b> 2019-01-09</li>
                                        <li><b>Property Type:</b> Full Family Home</li>
                                        <li><b>Property Status:</b> For rent</li>
                                    </ul>
                                </div>
                            </div>
                            <h6 class="text-primary">Additional details</h6>
                            <div class="row">
                                <div class="col-md-6 col-lg-6">
                                    <ul class="property__detail-info-list list-unstyled">
                                        <li><b>Property ID:</b> RV151</li>
                                        <li><b>Price:</b> $484,400</li>
                                        <li><b>Property Size:</b> 1466 Sq Ft</li>
                                        <li><b>Bedrooms:</b> 4</li>
                                        <li><b>Bathrooms:</b> 2</li>
                                    </ul>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <ul class="property__detail-info-list list-unstyled">
                                        <li><b>Garage:</b> 1</li>
                                        <li><b>Garage Size:</b> 458 SqFt</li>
                                        <li><b>Year Built:</b> 2019-01-09</li>
                                        <li><b>Property Type:</b> Full Family Home</li>
                                        <li><b>Property Status:</b> For rent</li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <!-- END INFO PROPERTY DETAIL -->
                    </div>
                    <!-- END PROPERTY DETAILS SPEC -->
                    <div class="clearfix"></div>

                    <!-- FEATURES -->
                    <div class="single__detail-features">
                        <h6 class="text-capitalize detail-heading">features</h6>
                        <ul class="list-unstyled icon-checkbox">
                            <li>air conditioning</li>
                            <li>swiming pool</li>
                            <li>Central Heating</li>
                            <li>spa & massage</li>
                            <li>pets allow</li>

                            <li>air conditioning</li>
                            <li>gym</li>
                            <li>alarm</li>

                            <li>window Covering</li>
                            <li>free wiFi</li>
                            <li>car parking </li>
                        </ul>
                    </div>
                    <!-- END FEATURES -->






                    <!-- PROPERTY VIEWS -->
                    <div class="single__detail-features">
                        <h6 class="text-capitalize detail-heading">property views</h6>
                        <!-- CANVAS -->
                        <div class="wrapper">
                            <canvas id="myChart" class="chart"></canvas>
                        </div>
                    </div>
                    <!-- END PROPERTY VIEWS -->

                    <!-- NEARBY -->
                    <div class="single__detail-features">
                        <h6 class="text-capitalize detail-heading">what's nearby</h6>
                        <div class="single__detail-features-nearby">
                            <h6 class="text-capitalize"><span>
                                    <i class="fa fa-building "></i></span>education</h6>
                            <ul class="list-unstyled">
                                <li>
                                    <span>Eladia's Kids</span>
                                    <p>2.5 km</p>
                                </li>
                                <li>
                                    <span>Brooklyn Brainery</span>
                                    <p>3.5 km</p>

                                </li>
                                <li>
                                    <span>Wikdom Senior High Scool</span>
                                    <p>2.5 km</p>
                                </li>

                            </ul>

                            <h6 class="text-capitalize"><span><i class="fa fa-ambulance"></i></span>health &
                                medical
                            </h6>
                            <ul class="list-unstyled">
                                <li>
                                    <span>Eladia's Kids</span>
                                    <p>2.5 km</p>
                                </li>
                                <li>
                                    <span>Brooklyn Brainery</span>
                                    <p>3.5 km</p>

                                </li>
                                <li>
                                    <span>Wikdom Senior High Scool</span>
                                    <p>2.5 km</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- END NEARBY -->


                </div>
            </div>
            <!-- END DESCRIPTION -->
        </div>
        <div class="col-lg-4">

            <div class="products__filter mb-30">
                <div class="products__filter__group">

                    <div class="products__filter__footer">
                        <div class="form-group mb-0">
                            <button class="btn btn-primary text-capitalize btn-block"> Contact Details & Payments
                                <i class="fa fa-calculator ml-1"></i>
                            </button>

                        </div>
                    </div>
                </div>
            </div>

            <!-- END FORM FILTER -->
            <div class="sticky-top">
                <!-- PROFILE AGENT -->
                <div class="profile__agent mb-30">
                    <div class="profile__agent__group">

                        <div class="profile__agent__header">
                            <div class="profile__agent__header-avatar">
                                <figure>
                                    <img src="images/80x80.jpg" alt="" class="img-fluid">
                                </figure>

                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <h5 class="text-capitalize">Vee Estates</h5>
                                    </li>
                                    <li><a href="tel:123456"><i
                                                class="fa fa-phone-square mr-1"></i>(+234)90 2600 0040</a></li>
                                    <li><a href="javascript:void(0)"><i class=" fa fa-building mr-1"></i>
                                            contact@veeestates.com</a>
                                    </li>

                                </ul>


                            </div>

                        </div>

                        <div class="profile__agent__footer">
                            @if(Auth::user())
                            <div class="form-group mb-0">
                                <a href="{{ url('pay_with_escrow') }}/{{ $property->id }}" class="btn btn-primary text-capitalize btn-block"> Pay with Vesicash <i
                                        class="fa fa-paper-plane ml-1"></i></a>

                            </div>
                            @else
                            <div class="form-group mb-0">
                                <a href="{{ url('register') }}" class="btn btn-primary text-capitalize btn-block"> Sign Up to pay with Escrow <i
                                        class="fa fa-paper-plane ml-1"></i></a>

                            </div>


                            @endif
                        </div>
                    </div>

                </div>
                <!-- END PROFILE AGENT -->
                <div class="download mb-0">
                    <h5 class="text-center text-capitalize">Property Attachments</h5>
                    <div class="download__item">
                        <a href="#" target="_blank"><i class="fa fa-file-pdf-o mr-3"
                                aria-hidden="true"></i>Download Document.Pdf</a>
                    </div>
                    <div class="download__item">
                        <a href="#" target="_blank"><i class="fa fa-file-word-o mr-3"
                                aria-hidden="true"></i>Presentation
                            2016-17.Doc</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
</section>
<!-- END SINGLE DETAIL -->

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
            <a href="{{ url('contact') }}" class="btn btn-light text-uppercase ">Contact
                <i class="fa fa-angle-right ml-3 arrow-btn "></i></a>
        </div>
    </div>
</div>
</section>
<!-- END CALL TO ACTION -->
@endsection
