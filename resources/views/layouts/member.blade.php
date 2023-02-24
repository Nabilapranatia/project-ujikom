<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title> - Gardening Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="{{asset('assets/member/https://fonts.googleapis.com')}}">
    <link rel="preconnect" href="{{asset('assets/member/https://fonts.gstatic.com')}}" crossorigin>
    <link href="{{asset('assets/member/https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;500&display=swap')}}" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('assets/member/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/member/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/member/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('assets/member/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('assets/member/css/style.css')}}" rel="stylesheet"> 
</head>

<body>

  @include('layouts.partials.member.navbar')
  @yield('content')
  @include('layouts.partials.member.footer')
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- JavaScript Libraries -->
  <script src="{{asset('assets/member/https://code.jquery.com/jquery-3.4.1.min.js')}}"></script>
  <script src="{{asset('assets/member/https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/member/lib/wow/wow.min.js')}}"></script>
  <script src="{{asset('assets/member/lib/easing/easing.min.js')}}"></script>
  <script src="{{asset('assets/member/lib/waypoints/waypoints.min.js')}}"></script>
  <script src="{{asset('assets/member/lib/owlcarousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('assets/member/lib/counterup/counterup.min.js')}}"></script>
  <script src="{{asset('assets/member/lib/parallax/parallax.min.js')}}"></script>
  <script src="{{asset('assets/member/lib/isotope/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/member/lib/lightbox/js/lightbox.min.js')}}"></script>

  <!-- Template Javascript -->
  <script src="{{asset('assets/member/js/main.js')}}"></script>
</body>

</html>