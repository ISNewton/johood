<!DOCTYPE html>
<html class="" lang="ar"><head>
  <!-- basic -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- mobile metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <!-- site metas -->
  <title>CoBsine</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- bootstrap css -->
  <link rel="stylesheet" type="text/css" href="{{ asset("css/bootstrap.min.css") }}">
  <!-- style css -->
  <link rel="stylesheet" type="text/css" href="{{ asset("css/style.css") }}">

  <!-- Responsive-->
  <link rel="stylesheet" type="text/css" href="{{ asset("css/responsive.css") }}">
  <!-- fevicon -->
  <link rel="icon" href="{{ asset('images/fevicon.png') }}" type="image/gif">
  <!-- Scrollbar Custom CSS -->
  <link rel="icon" href="{{ asset('css/jquery.mCustomScrollbar.min.css') }}" type="image/gif">

  <!-- Tweaks for older IEs-->
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
  <!-- fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Roboto:400,700&amp;display=swap" rel="stylesheet">
  <!-- owl stylesheets --> 
  <link rel="stylesheet" href="{{ asset("css/owl.carousel.min.css") }}">
  <link rel="stylesheet" href="{{ asset("css/owl.theme.default.min.css") }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<style type="text/css">.fancybox-margin{margin-right:0px;}</style>
@livewireStyles
</head>
<body>
  <!--header section start -->
  <div class="header_section" style="
    background-image: url({{ asset('images/banner-bg.jpg') }});
  
  ">
     <nav class="navbar navbar-expand-lg navbar-light bg-light" dir="rtl" lang="ar" style="
    background-image: url({{ asset('images/header-bg.png') }});
     
     ">
        <div class="logo"><a href="index.html"><img src=""></a></div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent" dir="rtl" lang="ar">
           <ul class="navbar-nav mr-auto">
              <li class="nav-item {{ request()->is('*/')  ? 'active' : ''}}">
                 <a class="nav-link" href="{{ route('index') }}">الصفحة الرئيسية</a>
              </li>
              <li class="nav-item {{ request()->is('*services')  ? 'active' : ''}}">
                 <a class="nav-link" href="{{ route('services') }}">خدماتنا</a>
              </li>
              <li class="nav-item {{ request()->is('*products')  ? 'active' : ''}}">
                 <a class="nav-link" href="{{ route('products') }}">منتجاتنا</a>
              </li>
              <li class="nav-item {{ request()->is('*blog')  ? 'active' : ''}}">
                 <a class="nav-link" href="{{ route('blog') }}">ديجي شباب</a>
              </li>
              <li class="nav-item {{ request()->is('*dcg')  ? 'active' : ''}}">
                 <a class="nav-link" href="{{ route('dcg') }}">DCG</a>
              </li>
              <li class="nav-item {{ request()->is('*contact')  ? 'active' : ''}}">
                 <a class="nav-link" href="{{ route('contact') }}">تواصل معنا</a>
              </li>
           </ul>
        </div>
     </nav>
     @yield('slider')


     <!--banner section start -->
    
     <!--banner section end -->
  </div>
  <!--header section end -->
  <!-- blog section start -->
  @yield('content')
  <!-- contact section end -->
  
  <!-- footer section start -->
  <div class="footer_section layout_padding" dir="rtl" lang="ar">
     <div class="container">
        <div class="location_main">
           <div class="location_text"><img src="{{ asset('images/map-icon.png') }}"><span class="padding_left_10"><a href="#">اركويت شارع عبيد ختم </a></span></div>
           <div class="location_text center"><img src="{{ asset('images/images/call-icon.png') }}"><span class="padding_left_10"><a href="#">Call ; 01 1234567890</a></span></div>
           <div class="location_text right"><img src="{{ asset('images/images/mail-icon.png') }}"><span class="padding_left_10"><a href="#">demo@gmail.com</a></span></div>
        </div>
        <div class="footer_section_2" style="text-align:center; padding-right: 400px;">
           <div class="row">
              <div class="col-lg-4">
                 <div class="social_icon">
                    <ul>
                       <li><a href="#"><img src="{{ asset('images/fb-icon.png') }}"></a></li>
                       <li><a href="#"><img src="{{ asset('images/twitter-icon.png') }}"></a></li>
                       <li><a href="#"><img src="{{ asset('images/linkedin-icon.png') }}"></a></li>
                       <li><a href="#"><img src="{{ asset('images/instagram-icon.png') }}"></a></li>
                       <li><a href="#"><img src="{{ asset('images/youtub-icon.png') }}"></a></li>
                    </ul>
                 </div>
              </div>
           </div>
        </div>
     </div>
  </div>
  <!-- footer section end -->
  <!-- copyright section start -->
  <div class="copyright_section">
     <div class="container">
        <p class="copyright_text"><a href=""> ايزوتك الاستشارية</a></p>
     </div>
  </div>
  <!-- copyright section end -->
  <!-- Javascript files-->
  <script src="{{ asset("js/jquery.min.js") }}"></script>
  <script src="{{ asset("js/popper.min.js") }}"></script>
  <script src="{{ asset("js/bootstrap.bundle.min.js") }}"></script>
  <script src="{{ asset("js/jquery-3.0.0.min.js") }}"></script>
  <script src="{{ asset("js/plugin.js") }}"></script>
  <!-- sidebar -->
  <script src="{{ asset("js/jquery.mCustomScrollbar.concat.min.js") }}"></script>
  <script src="{{ asset("js/custom.js") }}"></script>
  <!-- javascript --> 
  <script src="{{ asset("js/owl.carousel.js") }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  
  <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
  @livewireScripts
</body></html>