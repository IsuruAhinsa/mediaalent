@extends('layouts.app')

@section('title', ' - ' . 'News')

@section('content')
    <!-- Breadcrumb Area Start -->
    <section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/38.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <h2 class="page-title">Latest News</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="{{ URL::to('/') }}"><i class="icon_house_alt"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">News</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Area End -->

    <!-- Blog Area Start -->
    <div class="alime-blog-area section-padding-80-0 mb-70">

        <div class="container">

            <div class="row">

                @foreach($posts as $post)

                    @include('partials.post', ['post' => $post])

                @endforeach

            </div>

            <br><br>

            <div class="d-flex justify-content-center">
                {{ $posts->links() }}
            </div>

        </div>

    </div>
    <!-- Blog Area End -->

@endsection
