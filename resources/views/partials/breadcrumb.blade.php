<section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url({{ asset('img/bg-img/38.jpg') }});">

    <div class="container h-100">

        <div class="row h-100 align-items-center">

            <div class="col-12">

                <div class="breadcrumb-content text-center">

                    <h2 class="page-title">{{ $title }}</h2>

                    <nav aria-label="breadcrumb">

                        <ol class="breadcrumb justify-content-center">

                            <li class="breadcrumb-item"><a href="{{ URL::to('/') }}"><i class="icon_house_alt"></i> Home</a></li>

                            <li class="breadcrumb-item active" aria-current="page">{{ $page }}</li>

                        </ol>

                    </nav>

                </div>

            </div>

        </div>

    </div>

</section>
