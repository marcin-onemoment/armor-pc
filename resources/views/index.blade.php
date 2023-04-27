@extends('layouts.app')

@section('content')
    @include('includes.section.preloader')

    <div class="page">
        <!-- Page Header-->
        <header class="section page-header">
            <!-- RD Navbar-->
            @include('includes.section.nav')
        </header>

        <main>
            <!-- Swiper-->
            @include('includes.section.header')
            <!-- Services-->
            @include('includes.section.services')
            <!-- What Problems Can We Fix?-->
            @include('includes.section.damages')
            <!-- CTA-->
            @include('includes.section.cta')
            <!-- Our Pricing-->
            @include('includes.section.webshop-offers')
            <!-- Testimonials-->
            @include('includes.section.reviews')
            <!-- Maps-->
            @include('includes.section.maps')
            <!-- Contact us-->
            @include('includes.section.contact-us')
        </main>

        <footer>
            <!-- Page Footer-->
            @include('includes.section.footer')
        </footer>
    </div>
@endsection
