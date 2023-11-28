@extends('frontend.app')
@section('content')
    <div class="text-center">
        <h1>

            About Appointment Management System
        </h1>
    </div>
    <div class="container-fluid w-100" style="background-image: url('{{asset('image/aboutbuilding.jpg')  }}')">
        <div class="col-md-4">

            <div class="card" style='background-color: rgba(255, 255, 255, 0.1); font-weight:25px; '>
                <div class="card-header  border-bottom-0">
                    <h2>
                        John Doe
                    </h2>
                </div>
                <div class="card-body pt-0 text-center">

                    <img class="profile-user-img img-fluid img-circle"
                        src="{{ asset('storage/images/avatar.webp') }}" alt="profile">

                    <br>
                    <div class="text-center">
                        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor "</p>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </div>

@endsection