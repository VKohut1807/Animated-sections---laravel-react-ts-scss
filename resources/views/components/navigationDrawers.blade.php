<div id="nav_drawers_views" class="sections">
    <div class="hook_open">
        @svg('/images/section-2/open.svg')
    </div>
    <div data-section2-names class="quick_view">
        @foreach ($routesConfig as $key => $value)
            <a data-section2-view-name="{{ $value['view-name'] }}" href="{{ route($value['route-name']) }}"
                class="page_view">
                <h5>{{ $value['view-name'] }}</h5>
            </a>
        @endforeach
    </div>
</div>

<img id="nav_drawers_img" data-section2-view id="view_section" class="view_section" src="" alt="">
