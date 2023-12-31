@extends('layouts.main')


@section('blade')

<div class="amazing-deals">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-heading text-center">
                    <h2>Best Offers for our vendors in each City</h2>
                    <p>Here are some of our best-recommended vendors from various places, who have proven their
                        reliability in executing events excellently, as evidenced by high levels of customer
                        satisfaction.</p>
                </div>
            </div>
            {{-- <div class="col-lg-6 col-sm-6 m-auto">
                <div class="item">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="image">
                                <img src="{{ asset('assets/images') }}/{{ $detail->img }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 align-self-center">
                            <div class="content">
                                <span class="info">*Best Vendor in {{ $detail->name_place }}</span>
                                <h4>{{ $detail->title }}</h4>
                                <div class="row">
                                    <div class="col-12">
                                        <span class="list">{{ $detail->vendor_name }}</span>
                                        <span class="list">No handphone : {{ $detail->vendor_phone }}</span>
                                    </div>
                                    <div class="col-12">
                                        <i class="fa fa-map"></i>
                                        <span class="list">{{ $detail->name_area }}</span><br>
                                        <span class="list">Open Price : Rp {{ $detail->open_price }}</span>
                                    </div>
                                </div>
                                <div>
                                </div>
                                <p>{{ $detail->event }}</p>
                                <div class="main-button">
                                    <a href="{{ route('reservation') }}">Books Vendor</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</div>

    <div class="card m-auto" style="width: 18rem;">
        <img src="{{ asset('assets/images') }}/{{ $detail->img }}" class="card-img-top" alt="Chicago Skyscrapers"/>
        <div class="card-body">
            <h5 class="card-title">*Best Vendor in {{ $detail->name_place }}</h5>
            <p class="card-text">{{ $detail->title }}</p>
        </div>

        <ul class="list-group list-group-light list-group-small">
            <li class="list-group-item px-4">{{ $detail->vendor_name }}</li>
            <li class="list-group-item px-4">No handphone : {{ $detail->vendor_phone }}</li>
            <li class="list-group-item px-4">{{ $detail->name_area }}</li>
            <li class="list-group-item px-4">Open Price : Rp {{ $detail->open_price }}</li>
        </ul>

        <div class="card-body">
            <a href="#" class="card-link">Comunicate</a>
            <a href="#" class="card-link">Book Yours now</a>
        </div>
    </div>

<div class="call-to-action">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h2>Are You Looking a Vendor ?</h2>
                <h4>Lets Communicate with vendor</h4>
            </div>
            <div class="col-lg-4">
                <div class="border-button">
                    <a href="{{ route('reservation') }}">Book Yours Now</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection()

