@extends('frontend.app')
@section('content')
    <div class="container">
        <h1>Book Appointment according to departments</h1>
        {{-- {{ dd($departments) }} --}}
        


            
                <div class="d-flex flex-wrap">
                 
                        @foreach ($departments as $department)
                            {{-- {{ dd($department->id) }} --}}

                            <div class="card  rounded-4 w-25 bg-light mr-5 text-center">
                                <div class="card-header rounded-border text-muted border-bottom-0 ">
                                    <h1 class="lead">
                                        <a href="{{ route('booking.show', ['booking' => $department->id]) }}">
                                            <h2>{{ $department->department_name }}
                                    </h1></b>
                                    </h1>
                                </div>
                                <div class="card-body pt-0">
                                    <p>Available Doctors</p>
                                    <br>
                                    <div>
                                        <h1>
                                            {{ $doctors = DB::table('doctors')->where('department_id', '=', $department->id)->count() }}
                                        </h1>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="text-center">
                                        <button  class="btn btn-primary btn-sm mr-2">Proceed</button>
                                    </div>
                                </div>

                            </div>
                        @endforeach
                    
                </div>
            
     
    </div>
@endsection
