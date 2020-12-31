@extends('layouts.template')

@section('styles')
      <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/site/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/site/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/site/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/site/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/site/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/site/vendor/venobox/venobox.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/site/css/style.css')}}" rel="stylesheet">
@endsection

@section('content')
    @include('site.layouts.partials._header')
    @yield('carroussel')
    @yield('breadcome')
    <main id="main">
        @yield('page-content')
    </main><!-- End #main -->

    @include('site.layouts.partials._footer')
    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
@endsection

@section('scripts')
    <!-- Vendor JS Files -->
  <script src="{{asset('assets/site/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('assets/site/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/site/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('assets/site/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('assets/site/vendor/jquery-sticky/jquery.sticky.js')}}"></script>
  <script src="{{asset('assets/site/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('assets/site/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('assets/site/vendor/counterup/counterup.min.js')}}"></script>
  <script src="{{asset('assets/site/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/site/vendor/venobox/venobox.min.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/site/js/main.js')}}"></script>
@endsection
