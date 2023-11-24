@extends('frontend.app')
@section('content')
    <div style="margin: 0px 50px;">
        <div class="slider-container">
            <div class="slider ">
                <img src="{{ asset('image/femaledoc.webp') }}" class="w-full" style="height:500px">
                <img src="{{ asset('image/hospital.webp') }}" class="w-full" style="height:500px">
            </div>
        </div>
        <div>
            <h1> Clinical Departments</h1>
            <div class="container">
                
                <div class="row">

                
            @foreach ($departments as $department)

                <div class="card  rounded-4 mr-5 text-center" style="background-color: #d8edf1;width:200px;">
                    <div class="card-header rounded-border text-muted border-bottom-0 ">
                        <h1 class="lead" style="text-decoration: none">
                            <a href="{{ route('booking.show', ['booking' => $department->id]) }}">
                                <h4>{{ $department->department_name }}
                                </h4>
                            </a>
                        </h1>
                    </div>
                    <div class="card-body pt-0">
                        <p>Available Doctors</p>
                        <br>
                        <div>
                            <h1>
                                {{ $department->doctor_count }}
                            </h1>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="text-center ;color:white">
                            <button class="btn btn-info btn-sm mr-2">Proceed <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>

    </div>
        </div>



    </div>
    <footer style="background-color: #b1dae3 ;width:100%;">
        <div class="container">
            <div class="row">
                <div class="col-md-4">

                    <h1>Company Name</h1>
                    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua. Ut enim ad minim veniam,</p>
                </div>
                <div class="col-md-2">
                    <h3>Departments</h3>
                    <ul class="list-unstyled">
                        <li>Orthology</li>
                        <li>Orthology</li>
                        <li>Orthology</li>
                        <li>Orthology</li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <h3>Specialists</h3>
                    <ul class="list-unstyled">
                        <li>Orthology</li>
                        <li>Orthology</li>
                        <li>Orthology</li>
                        <li>Orthology</li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <h3>Contact</h3>
                    <ul class="list-unstyled">
                        <li>Orthology</li>
                        <li>Orthology</li>
                        <li>Orthology</li>
                        <li>Orthology</li>
                    </ul>
                </div>
            </div>

        </div>
        <div class="text-center" style="margin: 0px 50px;">
            <p class='mb-0'>&copy; 2023 Your Company Name. All rights reserved.</p>
        </div>
    </footer>
@endsection
