@extends('layouts.app')

@section('title', ' - About Us')

@section('content')

    <!-- Breadcrumb Area Start -->
    @include('partials.breadcrumb', ['title' => "About Us", 'page' => "About Us"])
    <!-- Breadcrumb Area End -->

    <div class="about-us-area section-padding-80-0 clearfix">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6">
                    <div class="about-us-content mb-80">
                        <h3 class="wow fadeInUp" data-wow-delay="100ms">Our Strength</h3>
                        <div class="line wow fadeInUp" data-wow-delay="200ms"></div>
                        <p class="wow fadeInUp" data-wow-delay="300ms">
                            Mediaalent photographs a wide variety of events, meetings, wedding, conventions, tradeshows and corporate outings throughout the Sri Lanka. Our professional photographers have experience in a variety of different types of event photography. We offer some of the most experienced event photographers and reliable event photography at the best prices.
                        </p>
                        <a class="btn alime-btn btn-2 mt-30 wow fadeInUp" data-wow-delay="500ms" href="{{ route('page.contact') }}">Contact Us</a>
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
                @include('partials.team')
            </div>
        </div>
    </section>

    @include('partials.vision')

    @include('partials.mission')

@endsection
