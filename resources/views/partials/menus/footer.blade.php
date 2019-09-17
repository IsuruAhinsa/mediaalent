<div class="social-info">
    @foreach($items as $menu_item)
        <a href="{{ $menu_item->url }}" target="_blank">
            <i class="ti-{{ $menu_item->title }}" aria-hidden="true"></i>
        </a>
    @endforeach
</div>
