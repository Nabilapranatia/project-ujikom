<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DASHMIN - Bootstrap Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{asset('assets/dashmin-1.0.0/img/favicon.ico')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="{{asset('assets/dashmin-1.0.0/https://fonts.googleapis.com')}}">
    <link rel="preconnect" href="{{asset('assets/dashmin-1.0.0/https://fonts.gstatic.com')}}" crossorigin>
    <link href="{{asset('assets/dashmin-1.0.0/https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap')}}" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="{{asset('assets/dashmin-1.0.0/https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/dashmin-1.0.0/https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css')}}" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('assets/dashmin-1.0.0/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/dashmin-1.0.0/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('assets/dashmin-1.0.0/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('assets/dashmin-1.0.0/css/style.css')}}" rel="stylesheet">
</head>

<body>  
  <div class="sidebar pe-4 pb-3">
  @include('layouts/partials/sidebar')
  </div>
  <div class="content">
  @include('layouts/partials/navbar')
  @yield('content')
  </div>

   <!-- JavaScript Libraries -->
   <script src="{{asset('assets/dashmin-1.0.0/https://code.jquery.com/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('assets/dashmin-1.0.0/https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/dashmin-1.0.0/lib/chart/chart.min.js')}}"></script>
    <script src="{{asset('assets/dashmin-1.0.0/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('assets/dashmin-1.0.0/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('assets/dashmin-1.0.0/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/dashmin-1.0.0/lib/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{asset('assets/dashmin-1.0.0/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <script src="{{asset('assets/dashmin-1.0.0/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('assets/dashmin-1.0.0/js/main.js')}}"></script>
</body>

</html>