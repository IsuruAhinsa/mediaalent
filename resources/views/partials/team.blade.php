@foreach($members as $member)
    <div class="col-md-6 col-xl-3">
        <div class="team-content-area text-center mb-30 wow fadeInUp" data-wow-delay="100ms">
            <div class="member-thumb">
                <img src="{{ Voyager::image($member->avatar) }}" alt="">
            </div>
            <h5>{{ $member->name }}</h5>
            <span>{{ $member->job }}</span>
        </div>
    </div>
@endforeach
