@extends('layouts.global')
@section('title')
About Us
@endsection
@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/ANDI7099-min.JPG);">
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
            </div>
            <div class="col-lg-6">
                <div class="row g-3">
                    @php
                        $counter = 1;
                    @endphp

                    @foreach ($data['image_about'] as $item)
                        @if ($counter == 1)
                        <div class="col-6 text-end">
                            <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s" src="{{ asset('storage/' . $item->image) }}" style="margin-top: 25%;">
                        </div>
                        @endif

                        @if ($counter == 2)
                        <div class="col-6 text-start">
                            <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s" src="{{ asset('storage/' . $item->image) }}">
                        </div>
                        @endif

                        @if ($counter == 3)
                        <div class="col-6 text-end">
                            <img class="img-fluid rounded w-50 wow zoomIn" data-wow-delay="0.5s" src="{{ asset('storage/' . $item->image) }}">
                        </div>
                        @endif

                        @if ($counter == 4)
                        <div class="col-6 text-start">
                            <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.7s" src="{{ asset('storage/' . $item->image) }}">
                        </div>
                        @endif

                        @php
                            $counter++;
                        @endphp
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
