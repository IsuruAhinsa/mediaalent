@switch(Route::currentRouteName())

    @case('wedding.album')
    @php
        $var = "Wedding";
    @endphp
    @break
    @case('fashion.album')
    @php
        $var = "Fashion";
    @endphp
    @break
    @case('photobooth.album')
    @php
        $var = "Photobooth";
    @endphp
    @break
    @case('event.album')
    @php
        $var = "Events";
    @endphp
    @break
    @case('birthday.album')
    @php
        $var = "Birthday";
    @endphp
    @break

@endswitch

@extends('layouts.app')

@section('title', ' - ' . $var .' Albums')

@section('content')

    <!-- Breadcrumb Area Start -->
    @include('partials.breadcrumb', ['title' => $var, 'page' => $var])
    <!-- Breadcrumb Area End -->

    <!-- Blog Area Start -->
    <div class="alime-blog-area section-padding-80-0 mb-70">

        <div class="container-fluid">

            <div class="row">

                @include('partials.album')

            </div>

            <br><br>

            <div class="d-flex justify-content-center">

            </div>

        </div>

    </div>
    <!-- Blog Area End -->

@endsection
