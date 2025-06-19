@extends('layouts.app2')
@section('title')
    All Cars
@endsection
@section('content')
    <h1 class="text-center text-white bg-danger py-2 h3 text-uppercase">Popular Cars</h1>
    @foreach ($popularCars as $popularCar)
        <div class="col-md-3 my-2">
            <div class="worp_box p-2">
                <div class="position-relative">
                    <img src="{{ asset('assets/Image/car.png') }}" class="card-img-top" width="100%" height="120px">
                    <span
                        class="text-white bold position-absolute top-0 end-0 m-2 bg-success px-1 rounded text-capitalize">{{ $popularCar->availability }}</span>
                </div>

                <div class="card-body p-1">
                    <h5 class="card-title text-center">{{ $popularCar->name }}</h5>
                    <div class="d-flex justify-content-between">
                        <div><span class="text-success fw-bold">Car Price:{{ $popularCar->price }}</span></div>
                        <div><span class="text-info fw-bold">Per day:{{ $popularCar->daily_rental_price }}</span></div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div><span class="text-muted fw-bold">Manufacturer:{{ $popularCar->year }}</span></div>
                        <div><span class="text-muted fw-bold">{{ $popularCar->total_car }}</span></div>
                    </div>
                </div>
                <div class="card-body p-0 my-2">
                    <a href="#" class="card-link btn btn-outline-danger w-100 ">Buy Now</a>
                </div>
            </div>
        </div>
    @endforeach
    <h1 class="text-center text-white bg-danger py-2 h3 text-uppercase">Regular Cars</h1>
    @foreach ($normalCars as $normalCar)
        <div class="col-md-3 my-2">
            <div class="worp_box p-2">
                <div class="position-relative">
                    <img src="{{ asset('assets/Image/car.png') }}" class="card-img-top" width="100%" height="120px">
                    <span
                        class="text-white bold position-absolute top-0 end-0 m-2  px-1 rounded text-capitalize {{ $normalCar->availability === 'unavailable' ? 'bg-danger' : 'bg-success' }}">{{ $normalCar->availability }}</span>
                </div>

                <div class="card-body p-1">
                    <h5 class="card-title text-center">{{ $normalCar->name }}</h5>
                    <div class="d-flex justify-content-between">
                        <div><span class="text-success fw-bold">Car Price:{{ $normalCar->price }}</span></div>
                        <div><span class="text-info fw-bold">Per day:{{ $normalCar->daily_rental_price }}</span></div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div><span class="text-muted fw-bold">Manufacturer:{{ $normalCar->year }}</span></div>
                        <div><span class="text-muted fw-bold">{{ $normalCar->total_car }}</span></div>
                    </div>
                </div>
                <div class="card-body p-0 my-2">
                    <a href="#" class="card-link btn btn-outline-danger w-100 ">Buy Now</a>
                </div>
            </div>
        </div>
    @endforeach
    <h1 class="text-center text-white bg-danger py-2 h3 text-uppercase">New Cars</h1>
    @foreach ($newCars as $newCar)
        <div class="col-md-3 my-2">
            <div class="worp_box p-2">
                <div class="position-relative">
                    <img src="{{ asset('assets/Image/car.png') }}" class="card-img-top" width="100%" height="120px">
                    <span
                        class="text-white bold position-absolute top-0 end-0 m-2 px-1 rounded text-capitalize 
    {{ $newCar->availability === 'unavailable' ? 'bg-danger' : 'bg-success' }}">
                        {{ $newCar->availability }}
                    </span>
                </div>

                <div class="card-body p-1">
                    <h5 class="card-title text-center">{{ $newCar->name }}</h5>
                    <div class="d-flex justify-content-between">
                        <div><span class="text-success fw-bold">Car Price:{{ $newCar->price }}</span></div>
                        <div><span class="text-info fw-bold">Per day:{{ $newCar->daily_rental_price }}</span></div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div><span class="text-muted fw-bold">Manufacturer:{{ $newCar->year }}</span></div>
                        <div><span class="text-muted fw-bold">{{ $newCar->total_car }}</span></div>
                    </div>
                </div>
                <div class="card-body p-0 my-2">
                    <a href="#" class="card-link btn btn-outline-danger w-100 ">Buy Now</a>
                </div>
            </div>
        </div>
    @endforeach
@endsection
