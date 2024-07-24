@extends('app')

@section('styles')
    @vite('resources/scss/layouts/section-5.scss')
@endsection

@section('content')
    <section style="height: 10rem;"></section>
    <section class="section_5">
        <div class="group">
            @foreach (range(1, 5) as $item)
                <a href="#" class="link">
                    <span class="word">Right Product</span>
                </a>
                @svg('/images/section-5/chain.svg', class="chain")
                <a href="#" class="link">
                    <span class="word no_color">Right Customer</span>
                </a>
                @svg('/images/section-5/chain.svg', class="chain")
                <a href="#" class="link">
                    <span class="word">Right Price</span>
                </a>
                @svg('/images/section-5/chain.svg', class="chain")
                <a href="#" class="link">
                    <span class="word no_color">Right Quantity</span>
                </a>
                @svg('/images/section-5/chain.svg', class="chain")
                <a href="#" class="link">
                    <span class="word">Right Condition</span>
                </a>
                @svg('/images/section-5/chain.svg', class="chain")
                <a href="#" class="link">
                    <span class="word no_color">Right Time</span>
                </a>
                @svg('/images/section-5/chain.svg', class="chain")
                <a href="#" class="link">
                    <span class="word no_color">Right Place</span>
                </a>
                @svg('/images/section-5/chain.svg', class="chain")
            @endforeach
        </div>
    </section>
@endsection
