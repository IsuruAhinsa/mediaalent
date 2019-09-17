@extends('layouts.app')

@section('title', ' - Not Found')

@section('content')

    <section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url({{ asset('img/bg-img/12.jpg') }});">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <h2 class="page-title">
                            <i class="icon_close_alt"></i> <br>
                            404 - Could not find what you are looking for
                        </h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="{{ URL::to('/') }}"><i class="icon_house_alt"></i> Home</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <br><br><br>

@endsection
