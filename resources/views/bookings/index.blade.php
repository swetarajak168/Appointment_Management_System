@extends('frontend.app')
@section('content')
<h1>Book Appointment according to departments</h1>
{{-- {{ dd($departments) }} --}}
@foreach($departments as $department)
{{-- {{ dd($department->id) }} --}}
<div class="row align-items-stretch">
<div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
    <div class="card bg-light">
      <div class="card-header text-muted border-bottom-0">
        <h2 class="lead">
            <a href="{{ route('booking.show', ['booking' => $department->id]) }}">{{ ($department->department_name) }}</b>
        </h2> 
      </div>
      <div class="card-body pt-0">
        <div class=" row">
          Available Doctors
          
          <div class="col-5 text-center">
            {{ $doctors = DB::table('doctors')->where('department_id','=',$department->id)->count() }}
         
          </div>
        </div>
      </div>
      <div class="card-footer">
        <div class="text-right">
          
        </div>
      </div>
    </div>
</div>
</div>
@endforeach
@endsection