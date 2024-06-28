@extends('app')

@section('styles')
    @vite('resources/scss/layouts/section-2.scss')
@endsection

@section('script')
    @vite('resources/ts/layouts/section-2.ts')
@endsection

@section('content')
    @php
        $routesConfig = config('routes-config');
    @endphp
    <div id="section_2" class="section_2">
        <div class="sections">
            <div class="hook_open">
                @svg('/images/section-2/open.svg')
            </div>
            <div data-section2-names class="quick_view">
                @foreach ($routesConfig as $key => $value)
                    <a data-section2-view-name="{{ $value['view-name'] }}" href="{{ route($value['route-name']) }}" class="page_view">
                        <h5>{{ $value['view-name'] }}</h5>
                    </a>
                @endforeach
            </div>
        </div>

        <img data-section2-view id="view_section" class="view_section" src="" alt="">
    </div>
@endsection
