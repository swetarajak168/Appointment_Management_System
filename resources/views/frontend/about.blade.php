@extends('frontend.app')
@section('content')
    <div class="text-center">
        <h1 style="color:#20475b">

            About Appointment Management System
        </h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <!-- Your text goes here -->
                <h1>
                    Who we are?
                </h1>
                <h5 class="pt-4">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                    deserunt mollit anim id est laborum.
                </h5>
            </div>
            <div class="col-md-6">
                <!-- Your image goes here -->
                <img src="{{ asset('image/aboutbuilding.jpg') }}" class="img-fluid float-right" alt="Your Image">
            </div>
        </div>
        <div class="team ">
            <h1 class="text-center m-5">Our Teams</h1>
            <div class="row">
                <div class="col-md-4">
                    <div class="card  box-profile" style="padding:10px; background-color:#81c5d2">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle" style=" background-color:#81c5d2"
                                src="{{ asset('storage/images/avatar.webp') }}" alt="User profile picture">
                            <h3>John Doe</h3>
                            <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam,</h6>
                        </div>


                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card  box-profile" style="padding:10px; background-color:#81c5d2">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle" style=" background-color:#81c5d2"
                                src="{{ asset('storage/images/avatar.webp') }}" alt="User profile picture">
                            <h3>John Doe</h3>
                            <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam,</h6>
                        </div>


                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card  box-profile" style="padding:10px; background-color:#81c5d2">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle" style=" background-color:#81c5d2"
                                src="{{ asset('storage/images/avatar.webp') }}" alt="User profile picture">
                            <h3>John Doe</h3>
                            <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam,</h6>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div @endsection
