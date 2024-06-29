@extends('app')

@section('styles')
    @vite('resources/scss/layouts/section-4.scss')
@endsection

@section('content')
    <div id="section_4" class="section_4">
        <div class="canvas">
            <div class="image">
                <img loading="lazy" load src="/images/section-4/1.jpg" alt="image">
                <a href="#" class="link">Read More</a>
            </div>
            <div class="wrapper">
                <div class="text">
                    <h5>Lorem, ipsum.</h5>
                    <h2>Lorem, ipsum.</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Itaque nam dicta est cumque inventore quo
                        adipisci ut. Alias, exercitationem mollitia?
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
