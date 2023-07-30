@extends('layouts.main')


@section('blade')

<div class="page-heading">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h4>Discover Our Best Offers</h4>
                <h2>Friendly Prices &amp; More</h2>
                <div class="border-button"><a href="{{ route('about') }}">Discover More</a></div>
            </div>
        </div>
    </div>
</div>



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

            @foreach ( $deals as $deal )
            <div class="col-lg-6 col-sm-6">
                <div class="item">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="image">
                                <img src="assets/images/{{ $deal->img }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 align-self-center">
                            <div class="content">
                                <span class="info">*Best Vendor in {{ $deal->name_place }}</span>
                                <h4>{{ $deal->title }}</h4>
                                <div class="row">
                                    <div class="col-6">
                                        <span class="list">{{ $deal->vendor_name }}</span>
                                    </div>
                                    <div class="col-6">
                                        <i class="fa fa-map"></i>
                                        <span class="list">{{ $deal->name_area }}</span>
                                    </div>
                                </div>
                                <p>{{ $deal->event }}</p>
                                <div class="main-button">
                                    <a href="/dealsDetail/{{ $deal->id }}">Books Vendor</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach()



        </div>
    </div>
</div>

<div class="call-to-action">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h2>Are You Looking a Vendor ?</h2>
                <h4>Lets Communicate with them by Clicking The Button</h4>
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