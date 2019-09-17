<section class="welcome-area">

    <div class="welcome-slides owl-carousel">

        @foreach($slides as $slide)

            <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url({{ Voyager::image($slide->image) }});">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <!-- Welcome Text -->
                        <div class="col-12 col-lg-8 col-xl-6">
                            <div class="welcome-text">
                                <h2 data-animation="bounceInDown" data-delay="900ms" style="font-size: 73px">{{ $slide->title }}</h2>
                                <p data-animation="bounceInDown" data-delay="500ms">{{ $slide->subtitle }}</p>
                                <div class="hero-btn-group" data-animation="bounceInDown" data-delay="100ms">
                                    <a href="#" class="btn alime-btn mb-3 mb-sm-0 mr-4">{{ $slide->button }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        @endforeach

    </div>

</section>

