@extends('layout.app')
@section('content')
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>

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
                                            @if ($data['auth_role'] == 1)
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
                                                    @foreach ($data['bookings'] as $booking)
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>{{ $booking->patient->name }}</td>
                                                            <td>{{ $booking->book_date_bs }}</td>
                                                            <td>{{ $booking->start_time . '-' . $booking->end_time }}</td>
                                                            {{-- @if (auth()->user()->role == 1) --}}

                                                            <td>{{ $booking->doctor->fname }}</td>
                                                            {{-- @endif --}}


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
                                                        <th>Status</th>
                                                    </tr>
                                                <tbody>
                                                    @foreach($data['bookings'] as $booking)                                                        
                                                        @if ($booking->doctor_id === $data['auth_id'])                                                           
                                                            <tr>
                                                                <td>{{ $loop->iteration }}</td>
                                                                <td>{{ $booking->patient->name }}</td>
                                                                <td>{{ $booking->book_date_bs }}</td>
                                                                <td>{{ $booking->start_time . '-' . $booking->end_time }}</td>   
                                                                <td>

                                                                <form id="statusForm" method="post" action="{{ route('update.status', ['id' => $booking->id]) }}">
                                                                    @csrf
                                                                    @method('PUT')
                                                                
                                                                    <label>
                                                                        <input type="radio" name="status" value="approved" {{ $booking->status === 'approved' ? 'checked' : '' }}>
                                                                        Approved
                                                                    </label>
                                                                
                                                                    <label>
                                                                        <input type="radio" name="status" value="canceled" {{ $booking->status === 'canceled' ? 'checked' : '' }}>
                                                                        Cancled
                                                                    </label>
                                                                </form>
                                                            </td>

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
    <script>
        $(document).ready(function () {
            // Automatically submit the form when a radio button is clicked
            $('input[name="status"]').change(function () {
                $('#statusForm').submit();
            });
        });
      </script>
@endsection
