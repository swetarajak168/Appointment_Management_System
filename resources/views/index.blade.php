@extends('frontend.app')
@section('content')
    <div style="margin: 0px 50px;">
        <div class="slider-container">
            <div class="slider ">
                <img src="{{ asset('image/sth.jpg') }}" class="w-full" style="height:500px;">
                <img src="{{ asset('image/building.jpg') }}" class="w-full" style="height:500px">
                <img src="{{ asset('image/medicine.jpg') }}" class="w-full" style="height:500px">
            </div>
        </div>

        <div class="mb-4">
            <h1 class="mb-4 text-center"> Clinical Departments</h1>
            <div class="container">

                <div class="row">
                    @foreach ($departments as $department)
                        <div class="aos" data-aos = "fade-right">
                            <div class="card  rounded-4 mr-5 text-center" style="background-color: #81c5d2;width:200px;">
                                <div class="card-header rounded-border text-muted border-bottom-0 ">
                                    <h1 class="lead">
                                        <a style=" color:black;text-decoration: none"
                                            href="{{ route('booking.show', ['booking' => $department->id]) }}">
                                            <h4 style="text-decoration: none">{{ $department->department_name }}
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


                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <section class="specialists">
                <h2 class="h1-responsive font-weight-bold text-center my-4">Our Specialists</h2>
                <div class="container mt-4">
                    <div class="row">
                        @foreach ($doctors as $doctor)
                            <div class="col-md-4">
                                <div class="card" style="background-color: #81c5d2">
                                    <div class="card-header  border-bottom-0">
                                        <h2>
                                            {{ $doctor->fname . ' ' . $doctor->lname }}
                                        </h2>
                                    </div>
                                    <div class="card-body pt-0 text-center">
                                        @if ($doctor->image)
                                            <img class="profile-user-img img-fluid img-circle"
                                                src="{{ asset($doctor->image) }}" alt="profile">
                                        @else
                                            <img class="profile-user-img img-fluid img-circle"
                                                src="{{ asset('storage/images/avatar.webp') }}" alt="profile">
                                        @endif

                                        <br>
                                        <div class="text-center">
                                            License No: {{ $doctor->license_no }}
                                            <br>
                                            Specialization:{{ $doctor->specialization }}
                                        </div>
                                        <br>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
            <section class="testimonials">
                <h2 class="h1-responsive font-weight-bold text-center my-4"> Client's Testimonials</h2>
                <div class="aos" data-aos="fade-right">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card" style="background-color: #81c5d2">
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

                            <div class="col-md-4">

                                <div class="card" style="background-color: #81c5d2">
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
                            <div class="col-md-4">

                                <div class="card" style="background-color: #81c5d2">
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
                    </div>
                </div>



            </section>
            <section class="mb-4">
                <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
                <!--Section description-->
                <h5 class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate
                    to
                    contact us directly. Our team will come back to you within
                    a matter of hours to help you.</h5>
                    <div class="row" style="margin-left:175px;">

                        <!--Grid column-->
                        <div class="col-md-9 mb-md-0 mb-5">
                            <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                                <!--Grid row-->
                                <div class="row">

                                    <!--Grid column-->
                                    <div class="col-md-6">
                                        <div class="md-form mb-4">
                                            <input type="text" id="name" name="name" class="form-control"
                                                placeholder ="Your Name.">
                                        </div>
                                    </div>
                                    <!--Grid column-->

                                    <!--Grid column-->
                                    <div class="col-md-6">
                                        <div class="md-form mb-4">
                                            <input type="text" id="email" name="email" class="form-control"
                                                placeholder ="Your Email..">
                                        </div>
                                    </div>
                                    <!--Grid column-->

                                </div>
                                <!--Grid row-->

                                <!--Grid row-->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="md-form mb-4">
                                            <input type="text" id="subject" name="subject" class="form-control"
                                                placeholder="Subject..">

                                        </div>
                                    </div>
                                </div>
                                <!--Grid row-->

                                <!--Grid row-->
                                <div class="row">

                                    <!--Grid column-->
                                    <div class="col-md-12">

                                        <div class="md-form mb-4 ">
                                            <input type="text" id="message" name="message" rows="2"
                                                class="form-control md-textarea" placeholder="Message..">

                                        </div>

                                    </div>
                                </div>
                                <!--Grid row-->

                            </form>

                            <div class="text-center text-md-left " style=" text-align: center;">
                                <a class="btn btn-lg" style=" background-color: #81c5d2 ;margin-left:350px"
                                    onclick="document.getElementById('contact-form').submit();">Send</a>
                            </div>
                            <div class="status"></div>
                        </div>

                    </div>
                <section>


        </div>


    </div>
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
@endsection
