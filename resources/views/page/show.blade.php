@extends('layouts.app')

@section('title', ' - ' . $page->title)

@section('content')

    <!-- Breadcrumb Area Start -->
    <section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url({{ asset('img/bg-img/38.jpg') }});">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <h2 class="page-title">{{ $page->title }}</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="{{ URL::to('/') }}"><i class="icon_house_alt"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $page->title }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Area End -->

    <!-- About Us Area Start -->
    <div class="about-us-area section-padding-80-0 clearfix">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6">
                    <div class="about-us-content mb-80">
                        <h3 class="wow fadeInUp" data-wow-delay="100ms">We Live For Passion</h3>
                        <div class="line wow fadeInUp" data-wow-delay="200ms"></div>
                        <p class="wow fadeInUp" data-wow-delay="300ms">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et do sunt explicabo. Nemo enim ipsam et dolore magnam aliquam quaerat voluptatem.</p>
                        <p class="wow fadeInUp" data-wow-delay="400ms">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et do sunt explicabo. Nemo enim ipsam et dolore magnam aliquam quaerat voluptatem.</p>
                        <a class="btn alime-btn btn-2 mt-30 wow fadeInUp" data-wow-delay="500ms" href="#">Contact Us</a>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="about-video-area mb-80 wow fadeInUp" data-wow-delay="100ms">
                        <img src="img/bg-img/17.jpg" alt="">
                        <div class="video-icon">
                            <a href="https://www.youtube.com/watch?v=sSakBz_eYzQ" class="video-play-btn"><i class="arrow_triangle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Us Area End -->

    <!-- Why Choose Us Area Start -->
    <section class="why-choose-us-area bg-gray section-padding-80-0 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms">
                        <h2>Why Choose Us</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Why Choose Area -->
                <div class="col-md-6 col-lg-4">
                    <div class="why-choose-us-content text-center mb-80 wow fadeInUp" data-wow-delay="100ms">
                        <div class="chosse-us-icon">
                            <i class="fa fa-film" aria-hidden="true"></i>
                        </div>
                        <h4>High Quality Images</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur isicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut elit, sed do eiusmod te</p>
                    </div>
                </div>

                <!-- Single Why Choose Area -->
                <div class="col-md-6 col-lg-4">
                    <div class="why-choose-us-content text-center mb-80 wow fadeInUp" data-wow-delay="300ms">
                        <div class="chosse-us-icon">
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                        </div>
                        <h4>Abundant Experience</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur isicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut elit, sed do eiusmod te</p>
                    </div>
                </div>

                <!-- Single Why Choose Area -->
                <div class="col-md-6 col-lg-4">
                    <div class="why-choose-us-content text-center mb-80 wow fadeInUp" data-wow-delay="500ms">
                        <div class="chosse-us-icon">
                            <i class="fa fa-camera" aria-hidden="true"></i>
                        </div>
                        <h4>Modern Equipments</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur isicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut elit, sed do eiusmod te</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Why Choose  us Area End -->

    <!-- Our Team Area Start -->
    <section class="our-team-area section-padding-80-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms">
                        <h2>Our Team</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Team Member Area -->
                <div class="col-md-6 col-xl-3">
                    <div class="team-content-area text-center mb-30 wow fadeInUp" data-wow-delay="100ms">
                        <div class="member-thumb">
                            <img src="img/bg-img/19.jpg" alt="">
                        </div>
                        <h5>Andrew Dean</h5>
                        <span>Photographer</span>
                        <div class="member-social-info">
                            <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"><i class="ti-twitter-alt"></i></a>
                            <a href="#"><i class="ti-linkedin"></i></a>
                            <a href="#"><i class="ti-pinterest"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Team Member Area -->
                <div class="col-md-6 col-xl-3">
                    <div class="team-content-area text-center mb-30 wow fadeInUp" data-wow-delay="300ms">
                        <div class="member-thumb">
                            <img src="img/bg-img/20.jpg" alt="">
                        </div>
                        <h5>Tommy Kim</h5>
                        <span>Photographer</span>
                        <div class="member-social-info">
                            <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"><i class="ti-twitter-alt"></i></a>
                            <a href="#"><i class="ti-linkedin"></i></a>
                            <a href="#"><i class="ti-pinterest"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Team Member Area -->
                <div class="col-md-6 col-xl-3">
                    <div class="team-content-area text-center mb-30 wow fadeInUp" data-wow-delay="500ms">
                        <div class="member-thumb">
                            <img src="img/bg-img/21.jpg" alt="">
                        </div>
                        <h5>Max McCormick</h5>
                        <span>Photographer</span>
                        <div class="member-social-info">
                            <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"><i class="ti-twitter-alt"></i></a>
                            <a href="#"><i class="ti-linkedin"></i></a>
                            <a href="#"><i class="ti-pinterest"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Team Member Area -->
                <div class="col-md-6 col-xl-3">
                    <div class="team-content-area text-center mb-30 wow fadeInUp" data-wow-delay="700ms">
                        <div class="member-thumb">
                            <img src="img/bg-img/22.jpg" alt="">
                        </div>
                        <h5>Robert Ward</h5>
                        <span>Photographer</span>
                        <div class="member-social-info">
                            <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"><i class="ti-twitter-alt"></i></a>
                            <a href="#"><i class="ti-linkedin"></i></a>
                            <a href="#"><i class="ti-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Team Area End -->

@endsection
