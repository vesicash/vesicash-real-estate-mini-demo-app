@extends('layouts.base')
@section('content')
<div class="bg-theme-overlay">
    <section class="section__breadcrumb ">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8 text-center">
                    <h2 class="text-capitalize text-white">contact us</h2>
                    <ul class="list-inline ">
                        <li class="list-inline-item">
                            <a href="#" class="text-white">
                                home
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="text-white">
                                page
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="text-white">
                                contact us
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- END BREADCRUMB -->
</header>
<div class="clearfix"></div>

<!-- Form contact -->
<section class="wrap__contact-form">
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h5>contact us</h5>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group form-group-name">
                        <label>Your name <span class="required"></span></label>
                        <input type="text" class="form-control" name="name" required="">

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-group-name">
                        <label>Your email <span class="required"></span></label>
                        <input type="email" class="form-control" name="email" required="">

                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group form-group-name">
                        <label>website <span class="required"></span></label>
                        <input type="text" class="form-control" name="website" required="">

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-group-name">
                        <label>Subject <span class="required"></span></label>
                        <input type="text" class="form-control" name="subject" required="">

                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Your message </label>
                        <textarea class="form-control" rows="9" name="message"></textarea>
                    </div>
                    <div class="form-group float-right mb-0">
                        <button type="submit" class="btn btn-primary btn-contact">Submit</button>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-md-4">
            <div class="wrap__contact-open-hours">
                <h5 class="text-capitalize">open hours</h5>
                <ul class="list-unstyled">
                    <li class="d-flex align-items-center justify-content-between"><span>Monday - Friday</span>
                        <span>09 AM - 19 PM</span></li>
                    <li class="d-flex align-items-center justify-content-between"><span>Saturday</span> <span>09
                            AM - 14 PM</span></li>
                    <li class="d-flex align-items-center justify-content-between"><span>Sunday</span>
                        <span>Closed</span></li>
                </ul>
            </div>
            <h5>Info location</h5>
            <div class="wrap__contact-form-office">
                <ul class="list-unstyled">
                    <li>
                        <span>
                            <i class="fa fa-home"></i>
                        </span>

                        Earth, But relocating to Mars Pretty soon


                    </li>
                    <li>
                        <span>
                            <i class="fa fa-phone"></i>
                            <a href="tel:">(+234) 90 9600 0040</a>
                        </span>

                    </li>
                    <li>
                        <span>
                            <i class="fa fa-envelope"></i>
                            <a href="mailto:">contact@veeestates.com</a>
                        </span>

                    </li>
                    <li>
                        <span>
                            <i class="fa fa-globe"></i>
                            <a href="#" target="_blank"> www.veeestates.com</a>
                        </span>
                    </li>
                </ul>

                <div class="social__media">
                    <h5>find us</h5>
                    <ul class="list-inline">

                        <li class="list-inline-item">
                            <a href="#" class="btn btn-social rounded text-white facebook">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="btn btn-social rounded text-white twitter">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="btn btn-social rounded text-white whatsapp">
                                <i class="fa fa-whatsapp"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="btn btn-social rounded text-white telegram">
                                <i class="fa fa-telegram"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="btn btn-social rounded text-white linkedin">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!-- End Form contact  -->


<!-- CALL TO ACTION -->
<section class="cta-v1 py-5">
<div class="container">
<div class="row align-items-center">
    <div class="col-lg-9">
        <h2 class="text-uppercase text-white">Looking To Sell Or Rent Your Property?</h2>
        <p class="text-capitalize text-white">We Will Assist You In The Best And Comfortable Property Services
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
