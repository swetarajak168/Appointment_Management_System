@extends('frontend.app')
@section('content')
    <div class="container">
        <h1>Book Appointment according to departments</h1>
        <div class="d-flex flex-wrap">
            @foreach ($departments as $department)
                <div class="card  rounded-4 w-25  mr-5 text-center" style="background-color: #d8edf1">
                    <div class="card-header rounded-border text-muted border-bottom-0 ">
                        <h1 class="lead" style="text-decoration: none">
                            <a href="{{ route('booking.show', ['booking' => $department->id]) }}">
                                <h2>{{ $department->department_name }}
                                </h2>
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
                        <div class="text-center">
                            <a href="{{ route('booking.show', ['booking' => $department->id]) }}">
                                <button class="btn btn-info btn-sm mr-2">Proceed</button>
                            </a>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
