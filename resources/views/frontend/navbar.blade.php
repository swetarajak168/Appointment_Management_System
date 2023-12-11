
<nav class=" navbar navbar-expand  navbar-light mb-3" style="background-color: #81c5d2">
    {{-- {{ dd($menus) }} --}}
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