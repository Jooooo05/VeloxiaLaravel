@extends('layouts.main')


@section('blade')

<!-- ***** Main Banner Area Start ***** -->
<div class="about-main-content">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="content">
          <div class="blur-bg"></div>
          <h4>FIND YOUR VENDOR</h4>
          <div class="line-dec"></div>
          <h2>Welcome To Veloxia</h2>
          <p>Bali, the "Island of the Gods," captivates with its breathtaking beauty. From pristine beaches to
            lush landscapes, it offers a paradise of turquoise waters, golden sands, and vibrant culture.</p>
          <div class="main-button">
            <a href="{{ route('reservation') }}">Discover More</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- ***** Main Banner Area End ***** -->

<div class="cities-town">
  <div class="container">
    <div class="row">
      <div class="slider-content">
        <div class="row">
          <div class="col-lg-12">
            <h2>Bali <em>Beach &amp; Mountains</em></h2>
          </div>
          <div class="col-lg-12">
            <div class="owl-cites-town owl-carousel">
              <div class="item">
                <div class="thumb">
                  <img src="{{ asset('assets/images/cities-01.jpg') }}" alt="">
                  <h4>Bidadari Cliffside Estate</h4>
                </div>
              </div>
              <div class="item">
                <div class="thumb">
                  <img src="{{ asset('assets/images/cities-02.jpg') }}" alt="">
                  <h4>Courtyard By Marriott</h4>
                </div>
              </div>
              <div class="item">
                <div class="thumb">
                  <img src="{{ asset('assets/images/cities-03.jpg') }}" alt="">
                  <h4>Grand Hyatt</h4>
                </div>
              </div>
              <div class="item">
                <div class="thumb">
                  <img src="{{ asset('assets/images/cities-04.jpg') }}" alt="">
                  <h4>Mahogany</h4>
                </div>
              </div>
              <div class="item">
                <div class="thumb">
                  <img src="{{ asset('assets/images/cities-01.jpg') }}" alt="">
                  <h4>Bidadari Cliffside Estate</h4>
                </div>
              </div>
              <div class="item">
                <div class="thumb">
                  <img src="{{ asset('assets/images/cities-02.jpg') }}" alt="">
                  <h4>Courtyard By Marriott</h4>
                </div>
              </div>
              <div class="item">
                <div class="thumb">
                  <img src="{{ asset('assets/images/cities-03.jpg') }}" alt="">
                  <h4>Grand Hyatt</h4>
                </div>
              </div>
              <div class="item">
                <div class="thumb">
                  <img src="{{ asset('assets/images/cities-04.jpg') }}" alt="">
                  <h4>Mahogany</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="weekly-offers">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-heading text-center">
                    <h2>Best Places Offers in Bali</h2>
                    <p>This is a selection of the offers provided by our vendors, according to the ratings provided by users</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="owl-weekly-offers owl-carousel">
                    <div class="item">
                        <div class="thumb">
                            <img src="{{ asset('assets/images/offers-01.jpg') }}" alt="">
                            <div class="text">
                                <h4>Bidadari Cliffside Estate<br><span><i class="fa fa-users"></i> 100 pax</span></h4>
                                <h6>150 juta<br><span>/event</span></h6>
                                <div class="line-dec"></div>
                                <ul>
                                    <li>Deal Includes:</li>
                                    <li><i class="fa fa-taxi"></i> Variety of Food</li>
                                    <li><i class="fa fa-plane"></i> 5 Villa with 15 bedrooms</li>
                                    <li><i class="fa fa-building"></i> Outdoor Event</li>
                                </ul>
                                <div class="main-button">
                                    <a href="{{ route('reservation') }}">Make a Reservation</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="thumb">
                            <img src="{{ asset('assets/images/offers-02.jpg') }}" alt="">
                            <div class="text">
                                <h4>Kingston<br><span><i class="fa fa-users"></i> 234 Check Ins</span></h4>
                                <h6>$420<br><span>/person</span></h6>
                                <div class="line-dec"></div>
                                <ul>
                                    <li>Deal Includes:</li>
                                    <li><i class="fa fa-taxi"></i> 5 Days Trip > Hotel Included</li>
                                    <li><i class="fa fa-plane"></i> Airplane Bill Included</li>
                                    <li><i class="fa fa-building"></i> Daily Places Visit</li>
                                </ul>
                                <div class="main-button">
                                    <a href="{{ route('reservation') }}">Make a Reservation</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="thumb">
                            <img src="{{ asset('assets/images/offers-03.jpg') }}" alt="">
                            <div class="text">
                                <h4>George Town<br><span><i class="fa fa-users"></i> 234 Check Ins</span></h4>
                                <h6>$420<br><span>/person</span></h6>
                                <div class="line-dec"></div>
                                <ul>
                                    <li>Deal Includes:</li>
                                    <li><i class="fa fa-taxi"></i> 5 Days Trip > Hotel Included</li>
                                    <li><i class="fa fa-plane"></i> Airplane Bill Included</li>
                                    <li><i class="fa fa-building"></i> Daily Places Visit</li>
                                </ul>
                                <div class="main-button">
                                    <a href="{{ route('reservation') }}">Make a Reservation</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="thumb">
                            <img src="{{ asset('assets/images/offers-01.jpg') }}" alt="">
                            <div class="text">
                                <h4>Havana<br><span><i class="fa fa-users"></i> 234 Check Ins</span></h4>
                                <h6>$420<br><span>/person</span></h6>
                                <div class="line-dec"></div>
                                <ul>
                                    <li>Deal Includes:</li>
                                    <li><i class="fa fa-taxi"></i> 5 Days Trip > Hotel Included</li>
                                    <li><i class="fa fa-plane"></i> Airplane Bill Included</li>
                                    <li><i class="fa fa-building"></i> Daily Places Visit</li>
                                </ul>
                                <div class="main-button">
                                    <a href="{{ route('reservation') }}">Make a Reservation</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="thumb">
                            <img src="{{ asset('assets/images/offers-02.jpg') }}" alt="">
                            <div class="text">
                                <h4>Kingston<br><span><i class="fa fa-users"></i> 234 Check Ins</span></h4>
                                <h6>$420<br><span>/person</span></h6>
                                <div class="line-dec"></div>
                                <ul>
                                    <li>Deal Includes:</li>
                                    <li><i class="fa fa-taxi"></i> 5 Days Trip > Hotel Included</li>
                                    <li><i class="fa fa-plane"></i> Airplane Bill Included</li>
                                    <li><i class="fa fa-building"></i> Daily Places Visit</li>
                                </ul>
                                <div class="main-button">
                                    <a href="{{ route('reservation') }}">Make a Reservation</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="thumb">
                            <img src="{{ asset('assets/images/offers-03.jpg') }}" alt="">
                            <div class="text">
                                <h4>George Town<br><span><i class="fa fa-users"></i> 234 Check Ins</span></h4>
                                <h6>$420<br><span>/person</span></h6>
                                <div class="line-dec"></div>
                                <ul>
                                    <li>Deal Includes:</li>
                                    <li><i class="fa fa-taxi"></i> 5 Days Trip > Hotel Included</li>
                                    <li><i class="fa fa-plane"></i> Airplane Bill Included</li>
                                    <li><i class="fa fa-building"></i> Daily Places Visit</li>
                                </ul>
                                <div class="main-button">
                                    <a href="{{ route('reservation') }}">Make a Reservation</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="more-about">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <div class="left-image">
                    <img src="{{ asset('assets/images/about-left-image.jpg') }}" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="section-heading">
                    <h2>Discover More About Our Country</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore.</p>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="info-item">
                            <h4>150.640 +</h4>
                            <span>Total Guests Yearly</span>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="info-item">
                            <h4>175.000+</h4>
                            <span>Amazing Accomoditations</span>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="info-item">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h4>12.560+</h4>
                                    <span>Amazing Places</span>
                                </div>
                                <div class="col-lg-6">
                                    <h4>240.580+</h4>
                                    <span>Different Check-ins Yearly</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.
                </p>
                <div class="main-button">
                    <a href="{{ route('reservation') }}">Discover More</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="best-locations">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-heading text-center">
                    <h2>Best Locations In Caribbeans</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore.</p>
                </div>
            </div>

            <div class="col-lg-8 offset-lg-2">
                <div class="options">
                </div>
            </div>

            <div class="col-lg-12">
                <div class="main-button text-center">
                    <a href="{{ route('deals') }}">Discover All Places</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="call-to-action">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h2>Are You Looking To Travel ?</h2>
                <h4>Make A Reservation By Clicking The Button</h4>
            </div>
            <div class="col-lg-4">
                <div class="border-button">
                    <a href="{{ route('deals') }}">Book Yours Now</a>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection