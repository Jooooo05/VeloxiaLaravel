@extends('layouts.main')


@section('blade')

<div class="second-page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h4>Book Prefered Deal Here</h4>
          <h2>Make Your Reservation</h2>
          <p>Finish your booking here, lets checkout and make sure all things that you want was included on your
            Reservation</p>
          <div class="main-button"><a href="about.html">Discover More</a></div>
        </div>
      </div>
    </div>
</div>

<div class="more-info reservation-info">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="info-item">
                    <i class="fa fa-phone"></i>
                    <h4>CS Veloxia</h4>
                    <a href="#">+62 xxx xxx xx</a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="info-item">
                    <i class="fa fa-envelope"></i>
                    <h4>Confirm on Email</h4>
                    <a href="#">veloxia@email.com</a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="info-item">
                    <i class="fa fa-map-marker"></i>
                    <h4>Veloxia Office</h4>
                    <a href="#">Jl. Kolonel Masturi No.288, Cihanjuang Rahayu</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="reservation-form">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div id="map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12469.776493332698!2d-80.14036379941481!3d25.907788681148624!2m3!1f357.26927939317244!2f20.870722720054623!3f0!3m2!1i1024!2i768!4f35!3m3!1m2!1s0x88d9add4b4ac788f%3A0xe77469d09480fcdb!2sSunny%20Isles%20Beach!5e1!3m2!1sen!2sth!4v1642869952544!5m2!1sen!2sth"
                        width="100%" height="450px" frameborder="0"
                        style="border:0; border-top-left-radius: 23px; border-top-right-radius: 23px;"
                        allowfullscreen=""></iframe>
                </div>
            </div>
            <div class="col-lg-12">
                <form id="reservation-form" name="gs" method="submit" role="search" action="#">
                    <div class="row">
                        <div class="col-lg-12">
                            <h4>Confirm <em>Reservation</em> Through This <em>Form</em></h4>
                        </div>
                        <div class="col-lg-6">
                            <fieldset>
                                <label for="Name" class="form-label">Your Name</label>
                                <input type="text" name="Name" class="Name" placeholder="ex. TJ Sinaga"
                                    autocomplete="on" required>
                            </fieldset>
                        </div>
                        <div class="col-lg-6">
                            <fieldset>
                                <label for="Number" class="form-label">Your Phone Number</label>
                                <input type="text" name="Number" class="Number" placeholder="Ex. +xxx xxx xxx"
                                    autocomplete="on" required>
                            </fieldset>
                        </div>
                        <div class="col-lg-6">
                            <fieldset>
                                <label for="chooseGuests" class="form-label">Number of Pax</label>
                                <select name="Guests" class="form-select" aria-label="Default select example"
                                    id="chooseGuests" onChange="this.form.click()">
                                    <option selected>ex. 100 pax</option>
                                    <option type="checkbox" name="option1" value="100">100</option>
                                    <option value="150">150</option>
                                    <option value="200">200</option>
                                    <option value="250">250</option>
                                </select>
                            </fieldset>
                        </div>
                        <div class="col-lg-6">
                            <fieldset>
                                <label for="Number" class="form-label">Event Date</label>
                                <input type="date" name="date" class="date" required>
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <label for="chooseDestination" class="form-label">Choose Your Place</label>
                                <select name="Destination" class="form-select" aria-label="Default select example"
                                    id="chooseCategory" onChange="this.form.click()">
                                    <option selected>ex. Villa Istana Bunga</option>
                                    <option value="NusaDua">Nusa Dua</option>
                                    <option value="RajaAmpat">Raja Ampat</option>
                                    <option value="Lembang">Lembang</option>
                                    <option value="PIK">Pantai Indah Kapuk</option>
                                </select>
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <button class="main-button">Confirm your Book</button>
                            </fieldset>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection