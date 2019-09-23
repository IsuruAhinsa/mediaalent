<ul id="nav">

    @foreach($items as $menu_item)

        @if(count($menu_item->children) >= 1)

            <li>
                <a href="@if(Route::has($menu_item->route)) {{ route($menu_item->route) }} @endif">
                    {{ $menu_item->title }}
                </a>

                <ul class="dropdown">
                    @foreach($menu_item->children as $item)
                        <li>
                            <a href="@if(Route::has($item->route)) {{ route($item->route) }} @endif">
                                {{$item->title}}
                            </a>
                        </li>
                    @endforeach
                </ul>

            </li>

        @else

            <li>
                <a href="@if(Route::has($menu_item->route)) {{ route($menu_item->route) }} @endif">
                    {{ $menu_item->title }}
                </a>

            </li>

        @endif

    @endforeach

</ul>
