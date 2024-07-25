@extends('app')

@section('styles')
    @vite('resources/scss/layouts/section-6.scss')
@endsection

@section('content')
    <section style="height: 10rem;"></section>

    <section class="section_6">
        <div class="wrapper">
            <div class="group">
                <div class="images">
                    <img src="/images/section-6/1.jpg" alt="person">
                    <img src="/images/section-6/2.jpg" alt="person">
                    <img src="/images/section-6/3.jpg" alt="person">
                </div>
                <p>Save your valuable time and energy by finding a solution quickly.</p>
                <a href="#" class="link">
                    Contact us now
                    @svg('/images/section-6/mouse-click.svg', class="icon")
                </a>
            </div>
        </div>
    </section>
@endsection
