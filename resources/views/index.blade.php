@extends('frontend.app')
@inject('testimonial_helper', 'App\Helpers\TestimonialsHelper')
@inject('faq_helper', 'App\Helpers\FaqHelper')
@section('content')
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <script src="https://www.google.com/recaptcha/api.js?render={{ env('GOOGLE_RECAPTCHA_KEY') }}"></script>

    <div style="margin: 0px 50px;">

        <div class="slider-container">
            <div class="slider ">
                <img src="{{ asset('image/sth.jpg') }}" class="w-full" style="height:500px;">
                <img src="{{ asset('image/building.jpg') }}" class="w-full" style="height:500px">
                <img src="{{ asset('image/medicine.jpg') }}" class="w-full" style="height:500px">
            </div>
        </div>

        <div class="mb-4">
            <h2 class="h1-responsive font-weight-bold text-center my-4">Our Specialists</h2>
            <div class="container">

                <div class="animated-element">
                    <div class="row">
                        @foreach ($departments as $department)
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
                        @endforeach
                    </div>
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
                                            {{ $doctor->fname }}
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
                <br>
                <div class="d-flex align-items-center justify-content-center">
                    <button type="button" class="btn btn-info m-3" data-toggle="modal" data-target="#modal-lg">
                        <i class="fa fa-plus-circle" aria-hidden="true"></i> Add your review
                    </button>
                </div>

                <div class="animated-element">
                    <div class="container">
                        <div class="row">
                            @foreach ($testimonial_helper->List() as $testimonial)
                                <div class="col-md-4">
                                    <div class="card" style="background-color: #81c5d2">
                                        <div class="card-header  border-bottom-0">
                                            <h2>
                                                {{ $testimonial->name }}
                                            </h2>
                                        </div>
                                        <div class="card-body pt-0 text-center">

                                            <img class="profile-user-img img-fluid img-circle"
                                                src="{{ asset('storage/images/avatar.webp') }}" alt="profile">

                                            <br>
                                            <div class="text-center">
                                                <p>{{ $testimonial->message }}</p>
                                            </div>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                            @endforeach


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
                        <form role="form" id="contact-form" name="contact-form" action="{{ route('contactmail') }}"
                            method="POST">
                            @csrf
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
                            @if ($errors->has('g-recaptcha-response'))
                                <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
                            @endif


                            <div class="text-center text-md-left " style=" text-align: center;">
                                <button class="btn btn btn-lg btn-submit"
                                    style=" background-color: #81c5d2 ;margin-left:350px">Submit</button>
                            </div>
                            <div class="status"></div>
                        </form>
                    </div>

                </div>
                <section>

                    <section class="faq d-flex align-items-center justify-content-center m-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card bg-transparent" >
                                    <div class="card-header" style=" background-color: #81c5d2" >
                                        <h3 class="card-title"  >

                                            <h2 class="text-center" ><i class="fas fa-text-width"></i>Frequently Asked Questions</h2>
                                        </h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <div class="d-flex " >
                                        <dl class="ml-5" >

                                            @foreach ($faq_helper->List() as $faq)
                                                <dt class="h5 font-weight-bold">{{ $faq->question }}</dt>
                                                <dd  >{{ $faq->answer }}</dd>
                                            @endforeach
                                        </dl>
                                        <dl class="ml-5" >

                                            @foreach ($faq_helper->faqlist() as $faq)
                                                <dt class="h5 font-weight-bold ">{{ $faq->question }}</dt>
                                                <dd >{{ $faq->answer }}</dd>
                                            @endforeach
                                        </dl>
                                    </div>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                            <!-- ./col -->

                            <!-- ./col -->
                        </div>
                    </section>


        </div>
        <div class="modal fade" id="modal-lg">

            <div class="modal-dialog modal-lg">
                <form role="form" method="post" action="{{ route('clienttestimonial.store') }} " id="userform">
                    @csrf
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Testimonial</h4>
                        </div>

                        <div class="modal-body">


                            <div class="form-group">
                                <div class="row col-md-7 ">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">
                                        Name<span class="text-danger">*</span></label><br>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control " name="name" id="name"
                                            placeholder="Your Name..">
                                    </div>
                                    <br>
                                </div>
                                <div class="row col-md-7 mt-3 ">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">
                                        Review<span class="text-danger">*</span></label><br>
                                    <div class="col-lg-8">
                                        <textarea class="form-control nepali-datepicker-schedule" name="message" id="message"
                                            placeholder="Your Message..">
                                        </textarea>
                                    </div>
                                    <br>
                                </div>

                            </div>

                        </div>


                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                            <button type="submit" style="background-color: #17a2b8; color:white"
                                class="btn btn-default float-right">Create </button>
                        </div>
                    </div>
            </div>
            </form>

        </div>

    </div>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script type="text/javascript">
        $('#contact-form').submit(function(event) {
            console.log('object')
            event.preventDefault();

            grecaptcha.ready(function() {
                grecaptcha.execute("{{ env('GOOGLE_RECAPTCHA_KEY') }}", {
                    action: 'submit'
                }).then(function(token) {
                    $('#contact-form').prepend(
                        '<input type="hidden" name="g-recaptcha-response" value="' + token +
                        '">');
                    $('#contact-form').unbind('submit').submit();
                });;
            });
        });
    </script>
@endsection
