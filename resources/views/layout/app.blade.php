<x-app-layout>    
    @include('sweetalert::alert')
    @include('layout.header')   
    @include('layout.sidebar')      
    @yield('content')
    
    @include('layout.footer') 
                  
</x-app-layout>