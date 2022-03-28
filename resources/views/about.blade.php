@extends('layout')

@section('content')

    <!-- About Section-->
    <section class="page-section bg-primary text-white mb-xxl mt-xxl-5 " id="about">
        <div class="container">
            <!-- About Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-white">About</h2>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- About Section Content-->
            <div class="row">
                <div class="col-lg-4 ms-auto"><p class="lead">I'm Abdullah Mahmoud ... I a Backend laravel developer my skill is so good for my age.<br> i hope you like this.. :) </p></div>
                <div class="col-lg-4 me-auto"><p class="lead">I still learn more and more skill to be in Top <br> you can call me <br> you can encourage me <br> and you can send to me your opinion </p></div>
            </div>
            <a class="btn btn-primary btn-xl text-center d-flex justify-content-center" href="{{ route('message') }}" >Contact me</a>
        </div>
    </section>

@endsection
