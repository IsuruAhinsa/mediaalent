@extends('layouts.app')

@section('title', ' - ' . 'News')

@section('content')
    <!-- Breadcrumb Area Start -->
    @include('partials.breadcrumb', ['title' => 'Latest News', 'page' => 'News'])
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
