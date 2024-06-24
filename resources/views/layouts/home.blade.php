@extends('app')

@section('styles')
    @vite('resources/scss/app.scss')
@endsection

@section('script')
    @vite('resources/tsx/home.tsx')
@endsection

@section('content')
    <section class="content-wrapper section-link-to-best-page">
        <h1>Link to page:</h1>
        <ul class="list-link-to-best-page">
           44444444444444444444444
        </ul>

    </section>

    <div id="home_page"></div>
@endsection
