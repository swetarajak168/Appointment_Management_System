@extends('layout.app')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h1 class="card-title w-30">List of Appointment </h1>
                                            <div class="card-tools flex">

                                            </div>
                                        </div>
                                    </div>

                                    <!-- /.card-header -->
                                    @if (session('success'))
                                        <div class="alert alert-success">
                                            {{ session('success') }}
                                        </div>
                                    @endif
                                    <div class="card-body table-responsive p-0">
                                        <table class="table table-hover">
                                            @if (auth()->user()->role == 1)
                                                <thead>
                                                    <tr>
                                                        <th>S.N</th>
                                                        <th>Patient Name</th>
                                                        <th>Book Date </th>
                                                        <th>Time</th>
                                                        <th>Doctor</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($bookings as $booking)
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>{{ $booking->patient->name }}</td>
                                                            <td>{{ $booking->book_date_bs }}</td>
                                                            <td>{{ $booking->start_time . '-' . $booking->end_time }}</td>
                                                            <td>{{ $booking->doctor->fname }}</td>


                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            @else
                                                <thead>
                                                    <tr>
                                                        <th>S.N</th>
                                                        <th>Patient Name</th>
                                                        <th>Book Date </th>
                                                        <th>Time</th>

                                                    </tr>
                                                <tbody>
                                                    @foreach($bookings as $booking)                                                        
                                                        @if ($booking->doctor_id === auth()->user()->doctor()->first()->id)                                                           
                                                            <tr>
                                                                <td>{{ $loop->iteration }}</td>
                                                                <td>{{ $booking->patient->name }}</td>
                                                                <td>{{ $booking->book_date_bs }}</td>
                                                                <td>{{ $booking->start_time . '-' . $booking->end_time }}</td>                                                        
                                                            </tr>                                                            
                                                        @endif                                                    
                                                    @endforeach
                                                </tbody>
                                            @endif
                                        </table>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
