@extends('layouts.global')
@section('title')
What's New
@endsection
@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-1.jpg);">
    <div class="container-fluid page-header-inner py-5">
        <div class="container text-center pb-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">What's New</h1>

        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Room Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title text-center text-primary text-uppercase">Whats New</h6>
        </div>
        <div class="row g-4">
            @foreach ($data['whatsNew'] as $room)
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="room-item shadow rounded overflow-hidden">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('storage/' . $room->image) }}" alt="">
                        <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">$100/Night</small>
                    </div>
                    <div class="p-4 mt-2">
                        <div class="d-flex justify-content-between mb-3">
                            <h5 class="mb-0">{{ $room->title }}</h5>
                        </div>
                        <p class="text-body mb-3">{!! Str::limit(strip_tags($room->description), 100) !!}</p>
                        <div class="d-flex justify-content-between">
                            <a class="btn btn-sm btn-primary rounded py-2 px-4" href="{{ route('whatsnew.detail', [$room->id]) }}">View Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            <div class="d-flex justify-content-center">
                {{ $data['whatsNew']->links() }}
            </div>
        </div>
    </div>
</div>
<!-- Room End -->
@endsection