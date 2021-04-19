@extends('layouts.base')
@section('content')
<div class="wrap__intro d-flex align-items-md-center ">
    <div class="container  ">
        <div class="row align-items-center justify-content-start flex-wrap">
            <div class="col-md-10 mx-auto">
                <div class="wrap__intro-heading text-center" data-aos="fade-up">
                    <!-- <h4>the walls property</h4> -->
                    <h1>
                        Find Your Dream House </h1>
                    <p>Your Property, Our Priority and We Avail you the best openings on quality and affordable house</p>

                    <!-- SEARCH BAR -->
                    <div class="wrapper__section">
                        <div class="wrapper__section__components">
                            <div class="row">
                                <div class="col-lg-12">
                                    <!-- <h3 class="section_heading mt-4">Form Search with Categories</h3> -->
                                    <div class=" search__container">
                                        <div class="row input-group no-gutters">
                                            <div class="col-sm-12 col-md-5">
                                                <input type="text" class="form-control" aria-label="Text input"
                                                    placeholder="Search for Homes by Address, City . . . .">
                                            </div>


                                            <div class="col-sm-12 col-md-4 input-group">

                                                <select class="select_option form-control" name="select"
                                                    id="categories">
                                                    <option selected>All Categories</option>
                                                    <option>House</option>
                                                    <option>Apartement </option>
                                                    <option>Hotel</option>
                                                    <option>Residential</option>
                                                    <option>Land</option>
                                                    <option>Luxury</option>

                                                </select>

                                            </div>
                                            <div class="col-sm-12 col-md-3 input-group-append">
                                                <button class="btn btn-primary btn-block" type="submit">
                                                    <i class="fa fa-search"></i> <span
                                                        class="ml-1 text-uppercase">Search</span>
                                                </button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END HERO -->
</header>
<!-- END HEADER -->


<!-- FEATURED PROPERTIES -->
<section class="featured__property ">
<div class="container">
    <div class="row">
        <div class="col-md-8 col-lg-6 mx-auto">
            <div class="title__head">
                <h2 class="text-center text-capitalize">
                    featured properties
                </h2>
                <p class="text-center text-capitalize">handpicked exclusive properties by Vee Estates.</p>

            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="featured__property-carousel owl-carousel owl-theme">
            @foreach ($properties as $item)


                <div class="item">
                    <!-- ONE -->
                    <div class="card__image card__box">
                        <div class="card__image-header h-250">
                            <div class="ribbon text-capitalize">featured</div>
                            <img src="{{ $item->image }}" alt="" class="img-fluid w100 img-transition">
                            <div class="info"> for {{ $item->purpose }}</div>
                        </div>
                        <div class="card__image-body">
                            <span class="badge badge-primary text-capitalize mb-2">house</span>
                            <h6 class="text-capitalize">
                                <a href="{{ url('property') }}/{{ $item->id }}">{{ $item->title }}</a>
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
                                <img src="{{ $item->image }}" alt="" class="img-fluid rounded-circle">
                            </figure>
                            <ul class="list-inline my-auto">
                                <li class="list-inline-item">
                                    <a href="#">
                                        Vee Estates <br>
                                    </a>

                                </li>

                            </ul>
                            <ul class="list-inline my-auto ml-auto">
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

</div>
</section>
<!-- END FEATURED PROPERTIES -->
<!-- ABOUT -->
<section class="home__about bg-theme-v4">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="title__leading">
                    <!-- <h6 class="text-uppercase">trusted By thousands</h6> -->
                    <h2 class="text-capitalize"> why choose use?</h2>
                    <p>
                        The first step in selling your property is to get a valuation from local experts. They will
                        inspect your home and take into account its unique features, the area and market conditions
                        before providing you with the most accurate valuation.
                    </p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod libero amet, laborum qui nulla
                        quae alias tempora. Placeat voluptatem eum numquam quas distinctio obcaecati quaerat,
                        repudiandae qui! Quia, omnis, doloribus! Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Quod libero amet, laborum qui nullas tempora.</p>

                    <a href="#" class="btn btn-primary mt-3 text-capitalize"> Contact
                        <i class="fa fa-angle-right ml-3 "></i></a>
                </div>
            </div>
        </div>
    </div>
    </section>
<!-- RECENT PROPERTY -->
<section class="featured__property bg-light">
<div class="container">
    <div class="row">
        <div class="col-md-8 col-lg-6 mx-auto">
            <div class="title__head">
                <h2 class="text-center text-capitalize">
                    Recent Property
                </h2>
                <p class="text-center text-capitalize">See Listing of some properties in Vee Estates.</p>

            </div>
        </div>
    </div>
    <div class="featured__property-carousel owl-carousel owl-theme">

        @foreach ($recent_properties as $item)


                <div class="item">
                    <!-- ONE -->
                    <div class="card__image card__box">
                        <div class="card__image-header h-250">
                            <div class="ribbon text-capitalize">featured</div>
                            <img src="{{ $item->image }}" alt="" class="img-fluid w100 img-transition">
                            <div class="info"> for {{ $item->purpose }}</div>
                        </div>
                        <div class="card__image-body">
                            <span class="badge badge-primary text-capitalize mb-2">house</span>
                            <h6 class="text-capitalize">
                                <a href="{{ url('property') }}/{{ $item->id }}">{{ $item->title }}</a>
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
                                <img src="{{ $item->image }}" alt="" class="img-fluid rounded-circle">
                            </figure>
                            <ul class="list-inline my-auto">
                                <li class="list-inline-item">
                                    <a href="#">
                                        Vee Estates <br>
                                    </a>

                                </li>

                            </ul>
                            <ul class="list-inline my-auto ml-auto">
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
</section>
<!-- END RECENT PROPERTY -->





<!-- OUR PARTNERS -->
<section class="projects__partner bg-light">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="title__head">
                <h2 class="text-center text-capitalize">our partners</h2>
                <p class="text-center text-capitalize">brand partners successful projects trusted many clients
                    real estate </p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="projects__partner-logo">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                        <img src="{{ asset('assets') }}/images/partner-logo6.png" alt="" class="img-fluid">
                    </li>
                    <li class="list-inline-item">
                        <img src="{{ asset('assets') }}/images/partner-logo7.png" alt="" class="img-fluid">
                    </li>
                    <li class="list-inline-item">
                        <img src="{{ asset('assets') }}/images/partner-logo8.png" alt="" class="img-fluid">
                    </li>
                    <li class="list-inline-item">
                        <img src="{{ asset('assets') }}/images/partner-logo1.png" alt="" class="img-fluid">
                    </li>
                    <li class="list-inline-item">
                        <img src="{{ asset('assets') }}/images/partner-logo5.png" alt="" class="img-fluid">
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
</section>
<!-- END OUR PARTNERS -->

<!-- TESTIMONIAL -->
<section>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-lg-6 mx-auto">
            <div class="title__head">
                <h2 class="text-center text-capitalize">
                    what people says
                </h2>
                <p class="text-center text-capitalize">people says about walls property.</p>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="testimonial owl-carousel owl-theme">
        <!-- TESTIMONIAL -->
        <div class="item testimonial__block">
            <div class="testimonial__block-card bg-reviews">
                <p>
                    Thank you walls property help me, choice dream home We were impressed with the build
                    quality, Plus they are competitively priced.
                </p>
            </div>
            <div class="testimonial__block-users">

                <div class="testimonial__block-users-name">
                    jhon doe <br>
                    <span>owner, digital agency</span>
                </div>
            </div>
        </div>
        <!-- END TESTIMONIAL -->
        <!-- TESTIMONIAL -->
        <div class="item testimonial__block">
            <div class="testimonial__block-card bg-reviews">
                <p>
                    Thank you walls property help me, choice dream home We were impressed with the build
                    quality, Plus they are competitively priced.
                </p>
            </div>
            <div class="testimonial__block-users">

                <div class="testimonial__block-users-name">
                    jhon doe <br>
                    <span>owner, digital agency</span>
                </div>
            </div>
        </div>
        <!-- END TESTIMONIAL -->
        <!-- TESTIMONIAL -->
        <div class="item testimonial__block">
            <div class="testimonial__block-card bg-reviews">
                <p>
                    Thank you walls property help me, choice dream home We were impressed with the build
                    quality, Plus they are competitively priced.
                </p>
            </div>
            <div class="testimonial__block-users">

                <div class="testimonial__block-users-name">
                    jhon doe <br>
                    <span>owner, digital agency</span>
                </div>
            </div>
        </div>
        <!-- END TESTIMONIAL -->
        <!-- TESTIMONIAL -->
        <div class="item testimonial__block">
            <div class="testimonial__block-card bg-reviews">
                <p>
                    Thank you walls property help me, choice dream home We were impressed with the build
                    quality, Plus they are competitively priced.
                </p>
            </div>
            <div class="testimonial__block-users">

                <div class="testimonial__block-users-name">
                    jhon doe <br>
                    <span>owner, digital agency</span>
                </div>
            </div>
        </div>
        <!-- END TESTIMONIAL -->
        <!-- TESTIMONIAL -->
        <div class="item testimonial__block">
            <div class="testimonial__block-card bg-reviews">
                <p>
                    Thank you walls property help me, choice dream home We were impressed with the build
                    quality, Plus they are competitively priced.
                </p>
            </div>
            <div class="testimonial__block-users">

                <div class="testimonial__block-users-name">
                    jhon doe <br>
                    <span>owner, digital agency</span>
                </div>
            </div>
        </div>
        <!-- END TESTIMONIAL -->

    </div>
</div>
</section>
<!-- END TESTIMONIAL -->

<!-- CALL TO ACTION -->
<section class="bg-theme-v1">
<div class="cta">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-12 col-lg-12 text-center">
                <h2 class="text-uppercase text-white">signup & build your dream house</h2>
                <p class="text-capitalize text-white">We'll help you to grow your career and growth, please
                    contact
                    team
                    walls real estate and get this offer promo</p>
                <a href="#" class="btn btn-primary text-uppercase ">Contact Us
                    <i class="fa fa-angle-right ml-3 arrow-btn "></i></a>
            </div>
        </div>
    </div>
</div>
</section>


<!-- BLOG -->
<section class="blog__home">
<div class="container">
    <div class="row">
        <div class="col-md-8 col-lg-6 mx-auto">
            <div class="title__head">
                <h2 class="text-center text-capitalize">
                    lastest news
                </h2>
                <p class="text-center text-capitalize">Find some of the most popular real estate information from around
                    Nigeria. </p>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="row">
        @foreach ($posts as $item)
        <div class="col-md-6">
            <!-- BLOG  -->
            <div class="card__image">
                <div class="card__image-header h-250">
                    <img src="{{ $item->image }}" alt="" class="img-fluid w100 img-transition">
                    <div class="info"> Blog</div>
                </div>
                <div class="card__image-body">
                    <!-- <span class="badge badge-secondary p-1 text-capitalize mb-3">May 08, 2019 </span> -->
                    <h6 class="text-capitalize">
                        <a href="{{ url('blog') }}/{{ $item->id }}">{{ $item->title }} </a>
                    </h6>
                    <p class=" mb-0">

                        {{ substr(strip_tags($item->body), 0, 120) }}

                    </p>


                </div>
                <div class="card__image-footer">
                    <figure>
                        <img src="{{ $item->image }}" alt="" class="img-fluid rounded-circle">
                    </figure>
                    <ul class="list-inline my-auto">
                        <li class="list-inline-item ">
                            <a href="#">
                                Vee Estates
                            </a>

                        </li>

                    </ul>
                    <ul class="list-inline my-auto ml-auto">
                        <li class="list-inline-item ">
                            <a href="{{ url('blog') }}/{{ $item->id }}" class="btn btn-sm btn-primary "><small
                                    class="text-white ">read more <i
                                        class="fa fa-angle-right ml-1"></i></small></a>
                        </li>

                    </ul>
                </div>
            </div>
            <!-- END BLOG -->
        </div>
        @endforeach



    </div>
</div>
</section>
<!-- END BLOG -->

@endsection
