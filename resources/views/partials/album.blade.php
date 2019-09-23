@switch(Route::currentRouteName())

    @case('wedding.album')
    @php
        $route = "wedding.image";
    @endphp
    @break
    @case('fashion.album')
    @php
        $route = "fashion.image";
    @endphp
    @break
    @case('photobooth.album')
    @php
        $route = "photobooth.image";
    @endphp
    @break
    @case('event.album')
    @php
        $route = "event.image";
    @endphp
    @break
    @case('birthday.album')
    @php
        $route = "birthday.image";
    @endphp
    @break

@endswitch

@foreach($albums as $album)

    <div class="col col-lg-4">

        <div class="single-post-area wow fadeInUpBig" data-wow-delay="100ms" style="width: 65%;">

            <a href="#" class="post-thumbnail">
                <img src="{{ Voyager::image($album->cover) }}" alt="">
            </a>

            @if(isset($album->date))
                <a href="#" class="btn post-catagory bg-success">{{ $album->date }}</a>
            @endif

            <div class="post-content">
                <div class="post-meta">
                    <a href="#">{{ $album->venue }}</a>
                    <a href="#">{{ $album->user['name'] }}</a>
                </div>
                <a href="{{ route($route, [$album->id]) }}" class="post-title">{{ $album->name }}</a>
            </div>

        </div>

    </div>

@endforeach
