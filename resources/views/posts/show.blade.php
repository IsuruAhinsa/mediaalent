@extends('layouts.app')

@section('title', ' - ' . $post->title)

@section('content')

    <!-- Breadcrumb Area Start -->
    <section class="breadcrumb-area blog bg-img bg-overlay jarallax" style="background-image: url({{ Voyager::image($post->image) }});">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <a href="#" class="btn post-catagory">{{ $post->category['name'] }}</a>
                        <h2 class="page-title">{{ $post->title }}</h2>
                        <div class="post-meta">
                            <a href="#" class="post-author">By {{ $post->author['name'] }}</a>
                            <a href="#" class="post-date">{{ $post->created_at->format('F d, Y') }}</a>
                            <a href="#" class="post-comments">No Comments</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Area End -->

    <!-- Blog Details Area Start -->
    <div class="alime--blog-area section-padding-80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <!-- Blog Details Text -->
                    <div class="blog-details-text">

                        {!! $post->body !!}

                    </div>

                    <!-- Post Author Area -->
                    <div class="post-author-area mt-50 d-flex align-items-center justify-content-between">
                        <ul class="popular-tags">
                            <li><a class="btn badges-btn" href="#">CAMERA</a></li>
                            <li><a class="btn badges-btn" href="#">PHOTOGRAHY</a></li>
                            <li><a class="btn badges-btn" href="#">TIPS</a></li>
                        </ul>

                        <!-- Share Info -->
                        <div class="post-social-info d-flex align-items-center">
                            <p>Share:</p>
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Details Area End -->

    <!-- Related News Area Start -->
    <div class="related-news-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h2>Recommended For You</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Blog Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-post-area">
                        <!-- Post Thumbnail -->
                        <a href="#" class="post-thumbnail"><img src="{{ asset('img/bg-img/52.jpg') }}" alt=""></a>
                        <!-- Post Catagory -->
                        <a href="#" class="btn post-catagory">Camera</a>
                        <!-- Post Conetent -->
                        <div class="post-content">
                            <div class="post-meta">
                                <a href="#">May 19, 2019</a>
                                <a href="#">3 Comment</a>
                            </div>
                            <a href="#" class="post-title">The Female Body Shape Men Find</a>
                        </div>
                    </div>
                </div>

                <!-- Single Blog Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-post-area">
                        <!-- Post Thumbnail -->
                        <a href="#" class="post-thumbnail"><img src="{{ asset('img/bg-img/53.jpg') }}" alt=""></a>
                        <!-- Post Catagory -->
                        <a href="#" class="btn post-catagory">Country</a>
                        <!-- Post Conetent -->
                        <div class="post-content">
                            <div class="post-meta">
                                <a href="#">May 19, 2019</a>
                                <a href="#">3 Comment</a>
                            </div>
                            <a href="#" class="post-title">Vietnam's largest art community</a>
                        </div>
                    </div>
                </div>

                <!-- Single Blog Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-post-area">
                        <!-- Post Thumbnail -->
                        <a href="#" class="post-thumbnail"><img src="{{ asset('img/bg-img/54.jpg') }}" alt=""></a>
                        <!-- Post Catagory -->
                        <a href="#" class="btn post-catagory">Camera</a>
                        <!-- Post Conetent -->
                        <div class="post-content">
                            <div class="post-meta">
                                <a href="#">May 19, 2019</a>
                                <a href="#">3 Comment</a>
                            </div>
                            <a href="#" class="post-title">Photo awards of the year</a>
                        </div>
                    </div>
                </div>

                <!-- Single Blog Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-post-area">
                        <!-- Post Thumbnail -->
                        <a href="#" class="post-thumbnail"><img src="{{ asset('img/bg-img/55.jpg') }}" alt=""></a>
                        <!-- Post Catagory -->
                        <a href="#" class="btn post-catagory">Tips</a>
                        <!-- Post Conetent -->
                        <div class="post-content">
                            <div class="post-meta">
                                <a href="#">May 19, 2019</a>
                                <a href="#">3 Comment</a>
                            </div>
                            <a href="#" class="post-title">The Female Body Shape Men Find</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="border-top mt-5"></div>
        </div>
    </div>
    <!-- Related News Area End -->

    <!-- Comment Area Start -->
    <div class="comment-area section-padding-80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <!-- Comments Area -->
                    <div class="comment_area clearfix">
                        <h4 class="mb-30">02 Comments</h4>

                        <ol>
                            <!-- Single Comment Area -->
                            <li class="single_comment_area">
                                <!-- Comment Content -->
                                <div class="comment-content d-flex">
                                    <!-- Comment Author -->
                                    <div class="comment-author">
                                        <img src="{{ asset('img/bg-img/32.jpg') }}" alt="author">
                                    </div>
                                    <!-- Comment Meta -->
                                    <div class="comment-meta">
                                        <a href="#" class="post-date">27 Aug 2019</a>
                                        <h5>Brandon Kelley</h5>
                                        <p>Neque porro qui squam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora.</p>
                                        <a href="#" class="like">Like</a>
                                        <a href="#" class="reply">Reply</a>
                                    </div>
                                </div>

                                <ol class="children">
                                    <li class="single_comment_area">
                                        <!-- Comment Content -->
                                        <div class="comment-content d-flex">
                                            <!-- Comment Author -->
                                            <div class="comment-author">
                                                <img src="{{ asset('img/bg-img/33.jpg') }}" alt="author">
                                            </div>
                                            <!-- Comment Meta -->
                                            <div class="comment-meta">
                                                <a href="#" class="post-date">27 Aug 2018</a>
                                                <h5>Mia Maya</h5>
                                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetu adipisci velit, sed quia non numquam eius modi</p>
                                                <a href="#" class="like">Like</a>
                                                <a href="#" class="reply">Reply</a>
                                            </div>
                                        </div>
                                    </li>
                                </ol>
                            </li>

                            <!-- Single Comment Area -->
                            <li class="single_comment_area">
                                <!-- Comment Content -->
                                <div class="comment-content d-flex">
                                    <!-- Comment Author -->
                                    <div class="comment-author">
                                        <img src="{{ asset('img/bg-img/34.jpg') }}" alt="author">
                                    </div>
                                    <!-- Comment Meta -->
                                    <div class="comment-meta">
                                        <a href="#" class="post-date">27 Aug 2018</a>
                                        <h5>Mike Phillips</h5>
                                        <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetu adipisci velit, sed quia non numquam eius modi</p>
                                        <a href="#" class="like">Like</a>
                                        <a href="#" class="reply">Reply</a>
                                    </div>
                                </div>

                                <ol class="children">
                                    <li class="single_comment_area">
                                        <!-- Comment Content -->
                                        <div class="comment-content d-flex">
                                            <!-- Comment Author -->
                                            <div class="comment-author">
                                                <img src="{{ asset('img/bg-img/33.jpg') }}" alt="author">
                                            </div>
                                            <!-- Comment Meta -->
                                            <div class="comment-meta">
                                                <a href="#" class="post-date">27 Aug 2018</a>
                                                <h5>Mia Maya</h5>
                                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetu adipisci velit, sed quia non numquam eius modi</p>
                                                <a href="#" class="like">Like</a>
                                                <a href="#" class="reply">Reply</a>
                                            </div>
                                        </div>
                                    </li>
                                </ol>
                            </li>
                        </ol>
                    </div>

                    <!-- Leave A Reply -->
                    <div class="alime-contact-form mt-50">
                        <h4 class="mb-30">Leave A Comment</h4>

                        <!-- Form -->
                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <input type="text" name="message-name" class="form-control mb-30" placeholder="Your Name">
                                </div>
                                <div class="col-12 col-md-6">
                                    <input type="email" name="message-email" class="form-control mb-30" placeholder="Email">
                                </div>
                                <div class="col-12">
                                    <input type="text" name="website" class="form-control mb-30" placeholder="Websites">
                                </div>
                                <div class="col-12">
                                    <textarea name="message" class="form-control mb-30" placeholder="Messages"></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn alime-btn btn-2 mt-15">Send Messages</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Comment Area End -->

@endsection
