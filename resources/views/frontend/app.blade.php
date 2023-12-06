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

{{-- template --}}

<!-- Theme style -->

<link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">

<link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">

<!-- Google Font: Source Sans Pro -->

<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
<!-- Add this in the <head> of your HTML file -->

<!--Nepali Date Picker CSS-->
<!--Nepali Date Picker CSS-->
<link href="http://nepalidatepicker.sajanmaharjan.com.np/nepali.datepicker/css/nepali.datepicker.v4.0.1.min.css"
    rel="stylesheet" type="text/css" />
{{-- slick slider --}}
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
{{-- AOS --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<style>
    html,
    body {
        height: 100vh;
        background-color: #d8edf1;
    }

    .nav-item {
        font-size: 20px;
    }
    
</style>
</head>
<body>

    <nav class=" navbar navbar-expand  navbar-light mb-3" style="background-color: #81c5d2">

        <!-- Left navbar links -->
        <ul class="navbar-nav" style="padding-left: 200px;">
            <li class="nav-item " style="padding-right: 100px">
                <a href="/" class="nav-link"><i class="fa fa-stethoscope" aria-hidden="true"></i> {{ __('AMS') }}</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="/" class="nav-link">{{ __('Home') }}</a>
            </li>

            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ route('about') }}" class="nav-link">{{ __('About') }}</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ route('booking.index') }}" class="nav-link">{{ __('Book Appointent') }}</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ route('contact') }}" class="nav-link">{{ __('Contact') }}</a>
            </li>
            
          
            
        </ul>
        <ul  class="navbar-nav " style="padding-left: 200px">
            @auth
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ route('dashboard') }}" class="nav-link">{{ auth()->user()->name }}</a>
                </li>

            @else
           
                <li class="nav-item d-none d-sm-inline-block" >
                    <a href="{{ route('login') }}" class="nav-link" >
                    <button type="button" class="btn btn-info">
                        {{ __('LogIn') }}
                    </button>
                    </a>
                </li>
            @endauth
        </ul>
        <!-- SEARCH FORM -->

        <!-- Right navbar links -->

    </nav>


    @yield('content')
    <footer style="background-color: #81c5d2 ;width:100%; ">
        <div class="container ">
            <div class="row  ">
                <div class="col-md-4 mt-4">

                    <h1><i class="fa fa-stethoscope" aria-hidden="true"></i>AMS</h1>
                    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et dolore magna aliqua. Ut enim ad minim veniam,</p>
                </div>
                <div class="col-md-2 mt-4">
                    <h3>Departments</h3>
                    <ul class="list-unstyled">
                        <li>Orthology</li>
                        <li>Neurology</li>
                        <li>Dental</li>
                        <li>Dermalogy</li>
                    </ul>
                </div>
                <div class="col-sm-2 mt-4">
                    <h3>Specialists</h3>
                    <ul class="list-unstyled">
                        <li>Orthologist</li>
                        <li>Neurologist</li>
                        <li>Dentists</li>
                        <li>Dermatologists</li>
                    </ul>
                </div>
                <div class="col-sm-2 mt-4">
                    <h3>Our Partners</h3>
                    <ul class="list-unstyled">
                        <li>Hamro Doctor</li>
                        <li>Sajilo Sewa</li>
                        <li>Khalti</li>
                    </ul>
                </div>
                {{-- <div class="col-sm-2">
                        <h3>Contact</h3>
                        <ul class="list-unstyled">
                            <a style="color:black">
                                <li ><i class="fa fa-facebook" aria-hidden="true"></i>
                            </li>
                                </a>
                            <li><i class="fa fa-linkedin-square" aria-hidden="true"></i></li>
                            <li>Orthology</li>
                            <li>Orthology</li>
                        </ul>
                    </div> --}}
            </div>

        </div>
        <div class="text-center" style="margin: 0px 50px;">
            <p class='mb-0'>&copy; 2023 AMS All rights reserved.</p>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                duration: 900,
            });
        });
    </script>

</body>
<!-- jQuery -->
<script type="text/javascript" src="js/jquery.min.js') }}"></script>

<!-- Bootstrap Core JavaScript -->
<script type="text/javascript" src="js/bootstrap.min.js') }}"></script>

<!-- all plugins and JavaScript -->


<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- bs-custom-file-input -->
<script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>


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
    $(document).ready(function() {
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
{{-- status button --}}



</html>
