@extends('layouts.main')


@section('blade')

<div class="page-heading">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h4>Discover Our Best Offers</h4>
                <h2>Friendly Prices &amp; More</h2>
                <div class="border-button"><a href="about.html">Discover More</a></div>
            </div>
        </div>
    </div>
</div>

<div class="search-form">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form id="search-form" name="gs" method="submit" role="search" action="#">
                    <div class="row">
                        <div class="col-lg-2">
                            <h4>Sort Deals By:</h4>
                        </div>
                        <div class="col-lg-4">
                            <fieldset>
                                <select name="Location" class="form-select" aria-label="Default select example"
                                    id="chooseLocation" onChange="this.form.click()">
                                    <option selected>Places</option>
                                    <option type="checkbox" name="option1" value="Italy">Italy</option>
                                    <option value="Bali">Bali</option>
                                    <option value="Jakarta">Jakarta</option>
                                    <option value="Bandung">Bandung</option>
                                    <option value="Papua">Papua</option>
                                    <option value="Belitung">Belitung (soon)</option>
                                </select>
                            </fieldset>
                        </div>
                        <div class="col-lg-4">
                            <fieldset>
                                <select name="Price" class="form-select" aria-label="Default select example"
                                    id="choosePrice" onChange="this.form.click()">
                                    <option selected>Price Range</option>
                                    <option value="50">Rp. 50 juta - Rp. 70 juta </option>
                                    <option value="90">Rp. 71 juta - Rp. 90 juta</option>
                                    <option value="120">Rp. 91 juta - Rp. 120 juta</option>
                                    <option value="150">Rp. 121 juta - Rp. 150 juta</option>
                                    <option value="150+">Rp. 150 juta +</option>
                                </select>
                            </fieldset>
                        </div>
                        <div class="col-lg-2">
                            <fieldset>
                                <button class="border-button">Search Results</button>
                            </fieldset>
                        </div>
                    </div>
                </form>
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
            <div class="col-lg-6 col-sm-6">
                <div class="item">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="image">
                                <img src="assets/images/deals-01.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 align-self-center">
                            <div class="content">
                                <span class="info">*Best Vendor in Bali</span>
                                <h4>Nura Enterprise</h4>
                                <div class="row">
                                    <div class="col-6">
                                        <i class="fa fa-clock"></i>
                                        <span class="list">40 Event</span>
                                    </div>
                                    <div class="col-6">
                                        <i class="fa fa-map"></i>
                                        <span class="list">Denpasar</span>
                                    </div>
                                </div>
                                <p>NURA ENTERPRISE merupakan perusahaan jasa yang
                                    bergerak dibidang Event Organizer.</p>
                                <div class="main-button">
                                    <a href="reservation.html">Books Vendor</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
                <div class="item">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="image">
                                <img src="assets/images/deals-02.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 align-self-center">
                            <div class="content">
                                <span class="info">*Best Vendor in Jakarta</span>
                                <h4>Brave Ideas</h4>
                                <div class="row">
                                    <div class="col-6">
                                        <i class="fa fa-clock"></i>
                                        <span class="list">76 Events</span>
                                    </div>
                                    <div class="col-6">
                                        <i class="fa fa-map"></i>
                                        <span class="list">Tebet Barat</span>
                                    </div>
                                </div>
                                <p>There's a many things Consult with us for your next event.</p>
                                <div class="main-button">
                                    <a href="reservation.html">Books Vendor</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
                <div class="item">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="image">
                                <img src="assets/images/deals-03.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 align-self-center">
                            <div class="content">
                                <span class="info">*Best Vendor in Papua</span>
                                <h4>Vicca Sera</h4>
                                <div class="row">
                                    <div class="col-6">
                                        <i class="fa fa-clock"></i>
                                        <span class="list">36 Events</span>
                                    </div>
                                    <div class="col-6">
                                        <i class="fa fa-map"></i>
                                        <span class="list">Jayapura</span>
                                    </div>
                                </div>
                                <p> Vicca Sera adalah sebuah perusahaan Event Organizer di Jayapura.</p>
                                <div class="main-button">
                                    <a href="reservation.html">Books Vendor</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
                <div class="item">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="image">
                                <img src="assets/images/deals-04.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 align-self-center">
                            <div class="content">
                                <span class="info">*Best Vendor in Bandung</span>
                                <h4>Ayudha Event</h4>
                                <div class="row">
                                    <div class="col-6">
                                        <i class="fa fa-clock"></i>
                                        <span class="list">66 Events</span>
                                    </div>
                                    <div class="col-6">
                                        <i class="fa fa-map"></i>
                                        <span class="list">Bandung</span>
                                    </div>
                                </div>
                                <p>Kami tidak terbatas dalam menyediakan layanan sewa ke seluruh Jawa Barat & Jakarta.
                                </p>
                                <div class="main-button">
                                    <a href="reservation.html">Books Vendor</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <ul class="page-numbers">
                    <li><a href="#"><i class="fa fa-arrow-left"></i></a></li>
                    <li><a href="#">1</a></li>
                    <li class="active"><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#"><i class="fa fa-arrow-right"></i></a></li>
                </ul>
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
                    <a href="reservation.html">Book Yours Now</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection()