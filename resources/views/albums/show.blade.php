@extends('layouts.app')

@section('title', ' - ' . ' Albums')

@section('content')

    <!-- Breadcrumb Area Start -->
    @include('partials.breadcrumb', ['title' => $photos->album['name'], 'page' => $photos->album['name'], 'bg_img' => $photos->album['cover']])
    <!-- Breadcrumb Area End -->

    <div class="alime-portfolio-area section-padding-80 clearfix">

        <div class="container-fluid">

            <div class="row d-flex justify-content-center mb-4 text-dark">
                <a href="{{ route('album.download', [$photos->id]) }}" class="btn btn-primary mb-3 mb-sm-0 mr-4">Download {{ strtolower($photos->album['name']) }} Full Album</a>
            </div>

            <div class="row alime-portfolio">

            @php $images = json_decode($photos->image); @endphp

                <!-- Single Gallery Item -->
                @foreach($images as $image)
                    <div class="col-12 col-sm-6 col-lg-3 single_gallery_item nature mb-30 wow fadeInUp" data-wow-delay="100ms">
                        <div class="single-portfolio-content">
                            <img src="{{ Voyager::image($image) }}" alt="">
                            <div class="hover-content">
                                <a href="{{ Voyager::image($image) }}" class="portfolio-img">+</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

            <div class="row">
                <div class="col-12 text-center wow fadeInUp" data-wow-delay="800ms">
                    <a href="#" class="btn alime-btn btn-2 mt-15">View More</a>
                </div>
            </div>
        </div>
    </div>

@endsection
