@extends('layouts.main')



@section('blade')

<!-- ***** Main Banner Area Start ***** -->
<section id="section-1">
  <div class="content-slider">
    <input type="radio" id="banner1" class="sec-1-input" name="banner" checked>
    <input type="radio" id="banner2" class="sec-1-input" name="banner">
    <input type="radio" id="banner3" class="sec-1-input" name="banner">
    <input type="radio" id="banner4" class="sec-1-input" name="banner">
    <div class="slider">
      <div id="top-banner-1" class="banner">
        <div class="banner-inner-wrapper header-text">
          <div class="main-caption">
            <h2 class="">Find the best things for your event :</h2>
            <h1 class="">Bali</h1>
            <div class="border-button"><a href="/about">Take a Glimpse</a></div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="more-info">
                  <div class="row">
                    <div class="col-lg-3 col-sm-6 col-6">
                      <i class="fa fa-user border-warning"></i>
                      <h4 class=""><span>Capacity:</span><br>150 pax</h4>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-6">
                      <i class="fa fa-globe border-warning"></i>
                      <h4 class=""><span>Location:</span><br>Nusa Dua<em>2</em></h4>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-6">
                      <i class="fa fa-home border-warning"></i>
                      <h4 class=""><span>Price:</span><br>Rp.100 Juta</h4>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-6">
                      <div class="main-button">
                        <a href="/about">Explore More</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="top-banner-2" class="banner">
        <div class="banner-inner-wrapper header-text">
          <div class="main-caption">
            <h2>Find the best things for your event :</h2>
            <h1>Papua</h1>
            <div class="border-button"><a href="/about">Go There</a></div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="more-info">
                  <div class="row">
                    <div class="col-lg-3 col-sm-6 col-6">
                      <i class="fa fa-user"></i>
                      <h4><span>Capacity:</span><br>100 pax</h4>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-6">
                      <i class="fa fa-globe"></i>
                      <h4><span>Location:</span><br>Raja Ampat<em>2</em></h4>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-6">
                      <i class="fa fa-home"></i>
                      <h4><span>Price:</span><br>Rp.180 Juta</h4>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-6">
                      <div class="main-button">
                        <a href="/about">Explore More</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="top-banner-3" class="banner">
        <div class="banner-inner-wrapper header-text">
          <div class="main-caption">
            <h2>Find the best things for your event :</h2>
            <h1>Jakarta</h1>
            <div class="border-button"><a href="/about">Take a Glimpse</a></div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="more-info">
                  <div class="row">
                    <div class="col-lg-3 col-sm-6 col-6">
                      <i class="fa fa-user"></i>
                      <h4><span>Capacity:</span><br>100 pax</h4>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-6">
                      <i class="fa fa-globe"></i>
                      <h4><span>Location:</span><br>The Hermitage<em>2</em></h4>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-6">
                      <i class="fa fa-home"></i>
                      <h4><span>Price:</span><br>Rp.80 Juta</h4>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-6">
                      <div class="main-button">
                        <a href="/about">Explore More</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="top-banner-4" class="banner">
        <div class="banner-inner-wrapper header-text">
          <div class="main-caption">
            <h2>Find the best things for your event :</h2>
            <h1>Bandung</h1>
            <div class="border-button"><a href="/about">Take a Glimpse</a></div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="more-info">
                  <div class="row">
                    <div class="col-lg-3 col-sm-6 col-6">
                      <i class="fa fa-user"></i>
                      <h4><span>Capacity:</span><br>200 pax</h4>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-6">
                      <i class="fa fa-globe"></i>
                      <h4><span>Location:</span>Grand Mercure</h4>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-6">
                      <i class="fa fa-home"></i>
                      <h4><span>Price:</span><br>Rp.75 Juta</h4>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-6">
                      <div class="main-button">
                        <a href="/about">Explore More</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <nav>
      <div class="controls">
        <label for="banner1"><span class="progressbar"><span class="progressbar-fill"></span></span><span class="text">1</span></label>
        <label for="banner2"><span class="progressbar"><span class="progressbar-fill"></span></span><span class="text">2</span></label>
        <label for="banner3"><span class="progressbar"><span class="progressbar-fill"></span></span><span class="text">3</span></label>
        <label for="banner4"><span class="progressbar"><span class="progressbar-fill"></span></span><span class="text">4</span></label>
      </div>
    </nav>
  </div>
</section>
<!-- ***** Main Banner Area End ***** -->

<div class="visit-country">
  <div class="container">
    <div class="row">
      <div class="col-lg-5">
        <div class="section-heading">
          <h2>Meet our recommendation vendor</h2>
          <p>Your comfort is our happiness, we strive to provide various vendors with the best rating and
            quality for your event to be spectacular and organized</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-8">
        <div class="items">
          <div class="row">
            <div class="col-lg-12">
              <div class="item">
                <div class="row">
                  <div class="col-lg-4 col-sm-5">
                    <div class="image">
                      <img src="assets/images/country-01.jpg" alt="">
                    </div>
                  </div>
                  <div class="col-lg-8 col-sm-7">
                    <div class="right-content">
                      <h4>Bali</h4>
                      <span>Nusa Dua</span>
                      <div class="main-button">
                        <a href="/about" style="background-color: orange; border-color:white">Explore More</a>
                      </div>
                      <p>Bali: Paradise found. Golden beaches, turquoise waters, lush landscapes,
                        and vibrant culture create an enchanting tapestry of beauty.</p>
                      <ul class="info">
                        <li><i class="fa fa-user"></i> 150 pax</li>
                        <li><i class="fa fa-globe"></i> Nusa Dua</li>
                        <li><i class="fa fa-home"></i> Rp. 100 juta<</li>
                      </ul>
                      <div class="text-button">
                        <a href="/about">Need Directions ? <i class="fa fa-arrow-right"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="item">
                <div class="row">
                  <div class="col-lg-4 col-sm-5">
                    <div class="image">
                      <img src="{{ asset('assets/images/country-02.jpg') }}" alt="">
                    </div>
                  </div>
                  <div class="col-lg-8 col-sm-7">
                    <div class="right-content">
                      <h4>Papua</h4>
                      <span>Raja Ampat</span>
                      <div class="main-button">
                        <a href="/about" style="background-color: orange; border-color:white">Explore More</a>
                      </div>
                      <p>Raja Ampat: Nature's masterpiece. Pristine turquoise waters, vibrant
                        coral reefs, and secluded islands create a breathtaking paradise.</p>
                      <ul class="info">
                        <li><i class="fa fa-user"></i> 100 pax</li>
                        <li><i class="fa fa-globe"></i> Raja Ampat</li>
                        <li><i class="fa fa-home"></i> Rp. 180 juta</li>
                      </ul>
                      <div class="text-button">
                        <a href="/about">Need Directions ? <i class="fa fa-arrow-right"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="item last-item">
                <div class="row">
                  <div class="col-lg-4 col-sm-5">
                    <div class="image">
                      <img src="{{ asset('assets/images/country-03.jpg') }}" alt="">
                    </div>
                  </div>
                  <div class="col-lg-8 col-sm-7">
                    <div class="right-content">
                      <h4>West Java</h4>
                      <span>Bandung</span>
                      <div class="main-button">
                        <a href="/about" style="background-color: orange; border-color:white">Explore More</a>
                      </div>
                      <p>Bandung: Enchanting and vibrant. Surrounded by lush hills and volcanic
                        mountains, it's a picturesque city with a thriving art scene and
                        stunning tea plantations.</p>
                      <ul class="info">
                        <li><i class="fa fa-user"></i> 100 pax</li>
                        <li><i class="fa fa-globe"></i> The Hermitage</li>
                        <li><i class="fa fa-home"></i> Rp. 80 juta</li>
                      </ul>
                      <div class="text-button">
                        <a href="/about">Need Directions ? <i class="fa fa-arrow-right"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>


          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="side-bar-map">
          <div class="row">
            <div class="col-lg-12">
              <div id="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12469.776493332698!2d-80.14036379941481!3d25.907788681148624!2m3!1f357.26927939317244!2f20.870722720054623!3f0!3m2!1i1024!2i768!4f35!3m3!1m2!1s0x88d9add4b4ac788f%3A0xe77469d09480fcdb!2sSunny%20Isles%20Beach!5e1!3m2!1sen!2sth!4v1642869952544!5m2!1sen!2sth" width="100%" height="550px" frameborder="0" style="border:0; border-radius: 23px; " allowfullscreen=""></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
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
          <a href="/reservation">Book Yours Now</a>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection