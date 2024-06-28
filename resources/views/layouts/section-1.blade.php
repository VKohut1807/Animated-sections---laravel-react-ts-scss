@extends('app')

@section('styles')
    @vite('resources/scss/layouts/section-1.scss')
@endsection

@section('content')
    @php
        $jsonFilePath = public_path('dataJson/sections/section-1.json');
        $jsonContent = file_exists($jsonFilePath) ? file_get_contents($jsonFilePath) : '{}';
        $dataJson = json_decode($jsonContent, true);
    @endphp

    <div class="section_1">
        <div class="wrapper">
            <div class="section_up">
                <h3>How to Apply</h3>
                <a href="#" class="right">
                    <span class="text">View All Requirements</span>
                    @svg('/images/section-1/arrow-right-icon.svg')
                </a>
            </div>
            <div class="section_down">
                @foreach ($dataJson as $elem)
                    <a href="#" class="block">
                        @if ($elem['number'] == 1)
                            @svg('/images/section-1/bulb-icon.svg')
                        @elseif ($elem['number'] == 2)
                            @svg('/images/section-1/hat-icon.svg')
                        @elseif ($elem['number'] == 3)
                            @svg('/images/section-1/id-card-icon.svg')
                        @else
                            @svg('/images/section-1/medal-icon.svg')
                        @endif
                        <h4>{{ $elem['name'] }}</h4>
                        <p>{{ $elem['descr'] }}</p>
                        <h2>{{ $elem['number'] }}</h2>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection
