@extends('layouts.app')

@section('title', ' - Contact Us')

@section('content')

    <!-- Breadcrumb Area Start -->
    @include('partials.breadcrumb', ['title' => "Contact Us", 'page' => "Contact Us"])
    <!-- Breadcrumb Area End -->

    <div class="contact-area section-padding-80-50">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <h2 class="contact-title mb-30">Let’s Work <br>Together</h2>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <!-- Contact Info -->
                    <div class="contact-info mb-30">
                        <p>Email</p>
                        <a href="mailto:{{ setting('site.email') }}">{{ setting('site.email') }}</a>
                    </div>
                    <!-- Contact Info -->
                    <div class="contact-info mb-30">
                        <p>Call Us</p>
                        <a href="#">{{ setting('site.phone') }}</a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <!-- Contact Info -->
                    <div class="contact-info mb-30">
                        <p>Visit Us</p>
                        <a href="#">{{ setting('site.address') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="map-area section-padding-0-80">
        <div class="container">
            <div id="map">
                {!! setting('site.map') !!}
            </div>
        </div>
    </div>

@endsection
