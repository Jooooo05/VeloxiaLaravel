  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.html" class="logo">
              <img class="m-auto" style="width:100px; padding-top:15px" src="assets/images/logo.png" alt="">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li><a href="/" class=" {{ ($title === "Home") ? 'active' : '' }} ">Home</a></li>
              <li><a href="/about" class=" {{ ($title === "About") ? 'active' : '' }} ">About</a></li>
              <li><a href="/deals" class=" {{ ($title === "Deals") ? 'active' : '' }} ">Deals</a></li>
              <li><a href="/reservation" class=" {{ ($title === "Reservation") ? 'active' : '' }} ">Reservation</a></li>
              <li><a href="/reservation" class="">Book Yours</a></li>
            </ul>
            <a class='menu-trigger'>
              <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->