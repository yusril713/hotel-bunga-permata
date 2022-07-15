@extends('layouts.global')
@section('title')
About Us
@endsection
@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-1.jpg);">
    <div class="container-fluid page-header-inner py-5">
        <div class="container text-center pb-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">About Us</h1>

        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <h6 class="section-title text-start text-primary text-uppercase">About Us</h6>
                <h1 class="mb-4">{{ $data['about_us']->title }}</span></h1>
                <p class="mb-4">{{ $data['about_us']->description }}</p>
                <div class="row g-3 pb-4">
                    <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                        <div class="border rounded p-1">
                            <div class="border rounded text-center p-4">
                                <i class="fa fa-hotel fa-2x text-primary mb-2"></i>
                                <h2 class="mb-1" data-toggle="counter-up">
                                    {{ $data['about_us']->number_of_room }}
                                </h2>
                                <p class="mb-0">Rooms</p>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="btn btn-primary py-3 px-5 mt-2" href="">Explore More</a>
            </div>
            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-6 text-end">
                        <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s" src="{{ asset('img/ANDI7099-min.JPG') }}" style="margin-top: 25%;">
                    </div>
                    <div class="col-6 text-start">
                        <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s" src="{{ asset('img/ANDI7111-min.JPG') }}">
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid rounded w-50 wow zoomIn" data-wow-delay="0.5s" src="{{ asset('img/images (1)-min.jpeg') }}">
                    </div>
                    <div class="col-6 text-start">
                        <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.7s" src="{{ asset('img/ANDI7506-min.JPG') }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

{{-- <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title text-center text-primary text-uppercase">Our Team</h6>
                <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">Staffs</span></h1>
            </div>
            <div class="row g-4">
                @foreach ($data['staffs'] as $staff)
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="rounded shadow overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="{{ asset('storage/' . $staff->photo) }}" alt="">
<div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
    <a class="btn btn-square btn-primary mx-1" href="{{ $staff->facebook_account }}" target="_blank"><i class="fab fa-facebook-f"></i></a>
    <a class="btn btn-square btn-primary mx-1" href="{{ $staff->twitter_account }}" target="_blank"><i class="fab fa-twitter"></i></a>
    <a class="btn btn-square btn-primary mx-1" href="{{ $staff->instagram_account }}" target="_blank"><i class="fab fa-instagram"></i></a>
</div>
</div>
<div class="text-center p-4 mt-3">
    <h5 class="fw-bold mb-0">{{ $staff->name }}</h5>
    <small>{{ $staff->job }}</small>
</div>
</div>
</div>
@endforeach

</div>
</div>
</div>
<!-- Team End --> --}}
@endsection
