@extends('frontend.app')
@section('content')
    <div class="container">
        <h2 class="mb-4">Book Appointment according to departments</h2>
        <div class="d-flex flex-wrap">
            @foreach ($departments as $department)
                <div class="card  rounded-4 w-25  mr-5 text-center" style="background-color: #81c5d2;color:#666666; text-decoration:none">
                    <div class="card-header rounded-border text-muted border-bottom-0 ">
                        <h1 class="lead" style="text-decoration: none">
                            <a style="color:#666666; text-decoration: none"  href="{{ route('booking.show', ['booking' => $department->id]) }}">
                                <h2>{{ $department->department_name }}
                                </h2>
                            </a>
                        </h1>
                    </div>
                    <div class="card-body pt-0">
                        <h4>Available Doctors</h4>
                        <br>
                        <div>
                            <h1>
                                {{ $department->doctor_count }}
                            </h1>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="text-center">
                            <a style="color:#666666; text-decoration: none" href="{{ route('booking.show', ['booking' => $department->id]) }}">
                                <button class="btn btn-info btn-sm mr-2">Proceed <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
                            </a>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
