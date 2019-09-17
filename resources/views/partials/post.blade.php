<div class="col-12 col-lg-4">

    <div class="single-post-area wow fadeInUpBig" data-wow-delay="100ms">

        <a href="#" class="post-thumbnail">
            <img src="{{ Voyager::image($post->image) }}" alt="">
        </a>

        @if(isset($post->category))
            <a href="#" class="btn post-catagory">{{ $post->category['name'] }}</a>
        @endif

        <div class="post-content">
            <div class="post-meta">
                <a href="#">{{ $post->created_at->format('F d, Y') }}</a>
                <a href="#">3 Comment</a>
            </div>
            <a href="{{ route('post.show', [$post->slug]) }}" class="post-title">{{ $post->title }}</a>
        </div>

    </div>

</div>
