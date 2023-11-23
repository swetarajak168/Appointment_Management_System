<!DOCTYPE html>
<html>

<head></head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AMS</title> <!--
            Tell the browser to be responsive to screen width -->
            <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Font Awesome -->
            <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}"> <!-- Ionicons -->
            <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
            <!-- Theme style -->
            <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
            <!-- Google Font: Source Sans Pro -->
            <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
            <!--Nepali Date Picker CSS-->
             <!--Nepali Date Picker CSS-->
    <link href="http://nepalidatepicker.sajanmaharjan.com.np/nepali.datepicker/css/nepali.datepicker.v4.0.1.min.css"
    rel="stylesheet" type="text/css" />
    {{-- slick slider --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
<style>
  html,body{
    height:100vh;
  }
</style>

</head>

<body>
    <nav class=" navbar navbar-expand  navbar-light mb-3" style="background-color: #b1dae3">
      
        <!-- Left navbar links -->
        <ul class="navbar-nav  " style="padding-left: 300px">
          <li class="nav-item">
            <a href="/" class="nav-link">AMS</a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="/" class="nav-link">Home</a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Contact</a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">About</a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('booking.index') }}" class="nav-link">Book Appointent</a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('login') }}" class="nav-link">Log In</a>
          </li>
        </ul>    
        <!-- SEARCH FORM -->       
    
        <!-- Right navbar links -->
       
      </nav>
    
    @yield('content')

</body>
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>

<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- bs-custom-file-input -->
<script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('dist/js/demo.js') }}"></script>
{{-- slick slider --}}
<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        bsCustomFileInput.init();
    });
</script>
<script src="http://nepalidatepicker.sajanmaharjan.com.np/nepali.datepicker/js/nepali.datepicker.v4.0.1.min.js"
    type="text/javascript"></script>

   
<script>
  $(document).ready(function(){
      $('.slider').slick({
          autoplay: true,
          autoplaySpeed: 2000,
          dots: true,
          infinite: true,
          speed: 500,
          slidesToShow: 1,
          slidesToScroll: 1
      });
  });
</script>
</html>