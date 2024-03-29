
<!DOCTYPE html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Grand - Event and Conference Template</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('importHome/assets/css/bootstrap.min.css')}}" >
    <!-- Icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('importHome/assets/fonts/line-icons.css')}}">
    <!-- Slicknav -->
    <link rel="stylesheet" type="text/css" href="{{ asset('importHome/assets/css/slicknav.css')}}">
    <!-- Nivo Lightbox -->
    <link rel="stylesheet" type="text/css" href="{{ asset('importHome/assets/css/nivo-lightbox.css')}}" >
    <!-- Animate -->
    <link rel="stylesheet" type="text/css" href="{{ asset('importHome/assets/css/animate.css')}}">
    <!-- Main Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('importHome/assets/css/main.css')}}">
    <!-- Responsive Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('importHome/assets/css/responsive.css')}}">

  </head>
  <body>

    <!-- Header Area wrapper Starts -->
    <header id="header-wrap">
      <!-- Navbar Start -->
      <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              <span class="icon-menu"></span>
              <span class="icon-menu"></span>
              <span class="icon-menu"></span>
            </button>
            <a href="index.html" class="navbar-brand"><img src="{{ asset('importHome/assets/img/logo.png')}}" alt=""></a>
          </div>
          <div class="collapse navbar-collapse" id="main-navbar">
            <ul class="navbar-nav mr-auto w-100 justify-content-end">
              <li class="">
                <a class="nav-link" href="#header-wrap">
                    <li class="nav-item active">
                      <a class="nav-link" href="{{ route('home.index')}}">Home</a>
                    </li>
                    <li class="nav-item active">
                      <a class="nav-link" href="#" >Présentation</a>
                    </li>
                    <li class="nav-item active">
                      <a class="nav-link" href="#" >Participation</a>
                    </li>
                    <li class="nav-item active">
                      <a class="nav-link" href="#" >Dates</a>
                    </li>
                    <li class="nav-item active">
                      <a class="nav-link" href="#" >Sponsors</a>
                    </li>
                    <li class="nav-item active">
                      <a class="nav-link" href="#" >committees</a>
                    </li>
                  
                    <li class="nav-item active">
                      <a class="nav-link" href="#" >contact</a>
                    </li>
                </a>
                
              </li>
             
            </ul>
          </div>
        </div>

        <!-- Mobile Menu Start -->
        <ul class="mobile-menu">
          <li>
            <a class="page-scrool" href="#header-wrap">Home</a>
          </li>
          <li>
            <a class="page-scrool" href="#about">About</a>
          </li>
          <li>
             <a class="page-scroll" href="#schedules">schedules</a>
          </li>
          <li>
            <a class="page-scroll" href="#team">Speakers</a>
          </li>
          <li>
            <a class="page-scroll" href="#gallery">Gallery</a>
          </li>
          <li>
            <a class="page-scroll" href="#faq">Faq</a>
          </li>
          <li>
            <a class="page-scroll" href="#sponsors">Sponsors</a>
          </li>
          <li>
            <a class="page-scroll" href="#pricing">pricing</a>
          </li>
          <li>
            <a class="page-scroll" href="#google-map-area">Contact</a>
          </li>

        </ul>
        <!-- Mobile Menu End -->

      </nav>
      <!-- Navbar End -->

 @yield('content')
    <!-- Footer Section Start -->
    <footer class="footer-area section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.2s">
            <h3><img src="{{ asset('importHome/assets/img/logo.png')}}" alt=""></h3>
            <p>
              Aorem ipsum dolor sit amet elit sed lum tempor incididunt ut labore el dolore alg minim veniam quis nostrud ncididunt.
            </p>
          </div>
          <div class="col-md-6 col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.4s">
            <h3>QUICK LINKS</h3>
            <ul>
              <li><a href="#">About Conference</a></li>
              <li><a href="#">Our Speakers</a></li>
              <li><a href="#">Event Shedule</a></li>
              <li><a href="#">Latest News</a></li>
              <li><a href="#">Event Photo Gallery</a></li>
            </ul>
          </div>
          <div class="col-md-6 col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.6s">
            <h3>RECENT POSTS</h3>
            <ul class="image-list">
              <li>
                <figure class="overlay">
                  <img class="img-fluid" src="{{ asset('importHome/assets/img/art/a1.jpg')}}" alt="">
                </figure>
                <div class="post-content">
                  <h6 class="post-title"> <a href="blog-single.html">Lorem ipsm dolor sumit.</a> </h6>
                  <div class="meta"><span class="date">October 12, 2018</span></div>
                </div>
              </li>
              <li>
                <figure class="overlay">
                  <img class="img-fluid" src="{{ asset('importHome/assets/img/art/a2.jpg')}}" alt="">
                </figure>
                <div class="post-content">
                  <h6 class="post-title"><a href="blog-single.html">Lorem ipsm dolor sumit.</a></h6>
                  <div class="meta"><span class="date">October 12, 2018</span></div>
                </div>
              </li>
            </ul>
          </div>
          <div class="col-md-6 col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.8s">
            <h3>SUBSCRIBE US</h3>
            <div class="widget">
              <div class="newsletter-wrapper">
                <form method="post" id="subscribe-form" name="subscribe-form" class="validate">
                  <div class="form-group is-empty">
                    <input type="email" value="" name="Email" class="form-control" id="EMAIL" placeholder="Your email" required="">
                    <button type="submit" name="subscribe" id="subscribes" class="btn btn-common sub-btn"><i class="lni-pointer"></i></button>
                    <div class="clearfix"></div>
                  </div>
                </form>
              </div>
            </div>
            <!-- /.widget -->
            <div class="widget">
              <h5 class="widget-title">FOLLOW US ON</h5>
              <ul class="footer-social">
                <li><a class="facebook" href="#"><i class="lni-facebook-filled"></i></a></li>
                <li><a class="twitter" href="#"><i class="lni-twitter-filled"></i></a></li>
                <li><a class="linkedin" href="#"><i class="lni-linkedin-filled"></i></a></li>
                <li><a class="google-plus" href="#"><i class="lni-google-plus"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer Section End -->

    <div id="copyright">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="site-info">
              <p>© Designed and Developed by <a href="http://uideck.com" rel="nofollow">UIdeck</a></p>
            </div>      
          </div>
        </div>
      </div>
    </div>

    <!-- Go to Top Link -->
    <a href="#" class="back-to-top">
    	<i class="lni-chevron-up"></i>
    </a>

    <div id="preloader">
      <div class="sk-circle">
        <div class="sk-circle1 sk-child"></div>
        <div class="sk-circle2 sk-child"></div>
        <div class="sk-circle3 sk-child"></div>
        <div class="sk-circle4 sk-child"></div>
        <div class="sk-circle5 sk-child"></div>
        <div class="sk-circle6 sk-child"></div>
        <div class="sk-circle7 sk-child"></div>
        <div class="sk-circle8 sk-child"></div>
        <div class="sk-circle9 sk-child"></div>
        <div class="sk-circle10 sk-child"></div>
        <div class="sk-circle11 sk-child"></div>
        <div class="sk-circle12 sk-child"></div>
      </div>
    </div>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('importHome/assets/js/jquery-min.js')}}"></script>
    <script src="{{ asset('importHome/assets/js/popper.min.js')}}"></script>
    <script src="{{ asset('importHome/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('importHome/assets/js/jquery.countdown.min.js')}}"></script>
    <script src="{{ asset('importHome/assets/js/jquery.nav.js')}}"></script>
    <script src="{{ asset('importHome/assets/js/jquery.easing.min.js')}}"></script>
    <script src="{{ asset('importHome/assets/js/wow.js')}}"></script>
    <script src="{{ asset('importHome/assets/js/jquery.slicknav.js')}}"></script>
    <script src="{{ asset('importHome/assets/js/nivo-lightbox.js')}}"></script>
    <script src="{{ asset('importHome/assets/js/main.js')}}"></script>
    <script src="{{ asset('importHome/assets/js/form-validator.min.js')}}"></script>
    <script src="{{ asset('importHome/assets/js/contact-form-script.min.js')}}"></script>
    <script src="{{ asset('importHome/assets/js/map.js')}}"></script>
    <script type="text/javascript" src="//maps.googleapis.com/maps/api/js?key=AIzaSyCsa2Mi2HqyEcEnM1urFSIGEpvualYjwwM"></script>
      
  </body>
</html>
