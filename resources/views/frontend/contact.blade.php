@extends('frontend.app')
@section('content')
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>

    <div class="container-fluid">
        <div class="text-center m-4">
            <h3>Contact Us</h3>
            <h5>

                Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you
                within a matter of hours to help you.
            </h5>
        </div>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.877987164248!2d85.34108177414569!3d27.690165726251465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb199225ddb01b%3A0x5bdcec622a9c4d75!2sYoung%20Minds%20Creation%20(P)%20Ltd!5e0!3m2!1sen!2snp!4v1701098662726!5m2!1sen!2snp"
            width="1300" height="600" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="row " style="margin-left:175px;">

                <!--Grid column-->
                <div class="col-md-9 mb-md-0 mb-5 mt-5">
                    <form role="form" id="contact-form1" name="contact-form" action="{{ route('contactmail') }}"
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
                                <button class="btn btn btn-lg btn-submit mb-4" style=" background-color: #81c5d2 ;margin-left:350px">Submit</button>
                            </div>
                            <div class="status"></div>
                        </form>
                </div>

            </div>

    </div>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script type="text/javascript">
        $('#contact-form1').submit(function(event) {
            console.log('object')
            event.preventDefault();

            grecaptcha.ready(function() {
                grecaptcha.execute("{{ env('GOOGLE_RECAPTCHA_KEY') }}", {
                    action: 'submit'
                }).then(function(token) {
                    $('#contact-form1').prepend('<input type="hidden" name="g-recaptcha-response" value="' + token + '">');
                    $('#contact-form1').unbind('submit').submit();
                });;
            });
        });
    </script>
@endsection
