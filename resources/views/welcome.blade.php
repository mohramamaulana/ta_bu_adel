<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Villa Agency - Real Estate HTML5 Template</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('landing/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('landing/assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{ asset('landing/assets/css/templatemo-villa-agency.css')}}">
    <link rel="stylesheet" href="{{ asset('landing/assets/css/owl.css')}}">
    <link rel="stylesheet" href="{{ asset('landing/assets/css/animate.css')}}">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 591 villa agency

https://templatemo.com/tm-591-villa-agency

-->
  </head>

<body>

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
                        <h1>GaTelwelcme</h1>
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                    @if (Route::has('login'))
                    @auth
                        <li><a href="{{ url('/home') }}" class="r1">Home</a></li>
                        @else
                        <li><a href="{{ route('login') }}"  class="r1">Login</a></li>
                        @if (Route::has('register'))
                        <li><a href="{{ route('register') }}" class="r1">Register</a></li>
                        <li><a href=""></a></li>
                        @endif
                    @endauth
                    @endif 
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

  <div class="main-banner">
    <div class="owl-carousel owl-banner">
      <div class="item item-1">
        <div class="header-text">
          <span class="category">SMK TELKOM, <em>Jombang</em></span>
          <h2>gatel!<br>galery telkom</h2>
        </div>
      </div>
      <div class="item item-2">
        <div class="header-text">
          <span class="category">SMK TELKOM, <em>Jombang</em></span>
          <h2>gatel!<br>galery telkom</h2>
        </div>
      </div>
      <div class="item item-3">
        <div class="header-text">
          <span class="category">SMK TELKOM, <em>Jombang</em></span>
          <h2>gatel!<br>galery telkom</h2>
        </div>
      </div>
    </div>
  </div>

  <div class="properties section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 offset-lg-4">
          <div class="section-heading text-center">
            <h6>| Properties</h6>
            <h2>We Provide The Best Property You Like</h2>
          </div>
        </div>
      </div>
      {{-- @foreach ($gambar as $gmbr)
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="item">
            <a href="property-details.html"><img src="{{ asset('landing/assets/images/property-01.jpg')}}" alt=""></a>
            <span class="category">Luxury Villa</span>
            <h6>$2.264.000</h6>
            <h4><a href="property-details.html">18 New Street Miami, OR 97219</a></h4>
            <ul>
              <li>Bedrooms: <span>8</span></li>
              <li>Bathrooms: <span>8</span></li>
              <li>Area: <span>545m2</span></li>
              <li>Floor: <span>3</span></li>
              <li>Parking: <span>6 spots</span></li>
            </ul>
            <div class="main-button">
              <a href="property-details.html">Schedule a visit</a>
            </div>
          </div>
        </div>
       
      </div>
      @endforeach --}}
     
    </div>
  </div>

  

  <footer>
    <div class="container">
      <div class="col-lg-8">
        <p>Copyright © 2048 Villa Agency Co., Ltd. All rights reserved. 
        
        Design: <a rel="nofollow" href="https://templatemo.com" target="_blank">TemplateMo</a> Distribution: <a href="https://themewagon.com">ThemeWagon</a></p>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('landing/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset('landing/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('landing/assets/js/isotope.min.js')}}"></script>
  <script src="{{ asset('landing/assets/js/owl-carousel.js')}}"></script>
  <script src="{{ asset('landing/assets/js/counter.js')}}"></script>
  <script src="{{ asset('landing/assets/js/custom.js')}}"></script>

  </body>
</html>