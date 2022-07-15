@extends('layouts.global')
@section('title')
Home
@endsection
@section('content')
<!-- Carousel Start -->
<div class="container-fluid p-0 mb-5">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @php
            $counter = 0;
            @endphp
            @foreach ($data['carousel'] as $item)
                @if ($counter == 0)
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('storage/' . $item->image) }}" alt="Image">

                </div>
                @else
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('storage/' . $item->image) }}" alt="Image">
                </div>
                @endif
                @php
                    $counter += 1;
                @endphp
            @endforeach
        </div>
        <button class="d-none carousel-control-prev type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="d-none carousel-control-next type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Carousel End -->

<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <h6 class="section-title text-start text-primary text-uppercase">About Us</h6>
                <h1 class="mb-4">{{ $data['about_us']->title }}</h1>
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
<!-- About End -->

<!-- Room Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title text-center text-primary text-uppercase">Our Rooms</h6>
            <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">Rooms</span></h1>
        </div>
        <div class="row g-4">
            @foreach ($data['rooms'] as $room)
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="room-item shadow rounded overflow-hidden">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('storage/' . $room->cover->image) }}" alt="">
                        <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">IDR{{ number_format($room->price) }}/Night</small>
                    </div>
                    <div class="p-4 mt-2">
                        <div class="d-flex justify-content-between mb-3">
                            <h5 class="mb-0">{{ $room->name }}</h5>
                            <div class="ps-2">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                        </div>
                        <p class="text-body mb-3">{!! Str::limit(strip_tags($room->description), 100) !!}</p>
                        <div class="d-flex justify-content-between">
                            <a class="btn btn-sm btn-primary rounded py-2 px-4" href="{{ route('room.detail', [$room->slug]) }}">View Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
    </div>
</div>
<!-- Room End -->



<!-- Room Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title text-center text-primary text-uppercase">Whats New</h6>
        </div>
        <div class="row g-4">
            @foreach ($data['whats_new'] as $room)
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


        </div>
    </div>
</div>
<!-- Room End -->

<!-- Room Start -->
@foreach($data['explores'] as $explore)
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="mb-5">{{ $explore->ttle }}</span></h1>
            <h6 class="section-title text-center text-primary text-uppercase">{{ $explore->description }}</h6>
        </div>
        <div class="row g-4">
            @foreach($explore->detail as $exploreDetail)
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="room-item shadow rounded overflow-hidden">
                    <div class="position-relative">
                        @foreach($exploreDetail->images as $img)
                        <img class="img-fluid" src="{{ asset('storage/' . $img->image) }}" alt="">
                        @php
                        break;
                        @endphp
                        @endforeach
                        <a href="{{ $exploreDetail->map_url }}" target="_blank"><small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">{{ $exploreDetail->location }} <i class="fa fa-map"></i></small> </a>
                    </div>
                    <div class="p-4 mt-2">
                        <div class="d-flex justify-content-between mb-3">
                            <h5 class="mb-0">{{ $exploreDetail->title }}</h5>
                        </div>
                    </div>
                    <button type="button" class="accordion-button collapsed btn btn-primary btn-sm text-dark" data-bs-toggle="collapse" data-bs-target="#accordionTwo{{ $exploreDetail->id }}" aria-expanded="false" aria-controls="accordionTwo{{ $exploreDetail->id }}">
                        Read mores
                    </button>
                    <div id="accordionTwo{{ $exploreDetail->id }}" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            @php $counter = 0; @endphp
                            @foreach ($exploreDetail->images as $img)
                            @if ($counter > 0)
                            <img src="{{ asset('storage/' . $img->image) }}" alt="" class="img-fluid mb-1" width="300"> <br>
                            @endif
                            @php $counter++; @endphp
                            @endforeach
                            <p>{{ $exploreDetail->description_id }} <br>
                                <hr> {{ $exploreDetail->description_en }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</div>
@endforeach
@if (sizeof($data['explores']) > 3)
<div class="row g-4">
    <div class="col-12">
        <div class="d-flex justify-content-end"><a href="">More...</a></div>
    </div>
</div>
@endif
<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title text-center text-primary text-uppercase">Our Services</h6>
            <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">Services</span></h1>
        </div>
        <div class="row g-4">
            @foreach ($data['services'] as $service)
            <div class="col-lg-3     col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <a class="service-item rounded" href="#.">
                    <h5 class="mb-3">{{ $service->title }}</h5>
                    <p class="text-body mb-0">{!! nl2br($service->description) !!}</p>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Service End -->

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
@section('script')
   <script>
     $('.carousel').carousel({
        interval: 5000 * 5 // 5 sec (1000ms * 5 = 5 sec)
    });
   </script>
@endsection
