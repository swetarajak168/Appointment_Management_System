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
                                                        <th>Status</th>
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
                                                            <td>
                                                                @if ($booking->status == 'canceled')
                                                                    <button type="button"
                                                                        class="btn btn-danger">Cancled</button>
                                                                @elseif($booking->status == 'approved')
                                                                    <button type="button"
                                                                        class="btn btn-success">Approved</button>
                                                                @else
                                                                    <button type="button"
                                                                        class="btn btn-warning">Pending</button>
                                                                @endif
                                                            </td>
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
                                                    @foreach ($data['bookings'] as $booking)
                                                        @if ($booking->doctor_id === $data['auth_id'])
                                                            <tr>
                                                                <td>{{ $loop->iteration }}</td>
                                                                <td>{{ $booking->patient->name }}</td>
                                                                <td>{{ $booking->book_date_bs }}</td>
                                                                <td>{{ $booking->start_time . '-' . $booking->end_time }}
                                                                </td>
                                                                <td>
                                                                    @if ($booking->status == 'pending')
                                                                        <div class="btn-group">
                                                                            <button type="button"
                                                                                class="btn btn-warning dropdown-toggle"
                                                                                data-toggle="dropdown" aria-haspopup="true"
                                                                                aria-expanded="false"
                                                                                style="color: white; padding-left:15px; padding-right:15px;">
                                                                                Pending
                                                                            </button>
                                                                            <div class="dropdown-menu">
                                                                                <a class="dropdown-item custom-dropdown-item accept-item"
                                                                                    onclick="return deleteConfirm('Approve this appointment')"
                                                                                    href="{{ route('appointment.edit', ['appointment' => $booking->id, 'status' => 'approved']) }}">Approve<i
                                                                                        class="fa fa-check"
                                                                                        aria-hidden="true"></i></a>
                                                                                <a class="dropdown-item custom-dropdown-item reject-item"
                                                                                    onclick="return deleteConfirm('cancel this appointment')"
                                                                                    href="{{ route('appointment.edit', ['appointment' => $booking->id, 'status' => 'canceled']) }}">Decline<i
                                                                                        class="fa fa-times"
                                                                                        aria-hidden="true"></i></a>
                                                                            </div>
                                                                        </div>
                                                                    @elseif($booking->status == 'approved')
                                                                        <span style="color: green;">Approved<i
                                                                                class="fa fa-check pl-3"
                                                                                aria-hidden="true"></i></span>
                                                                    @else
                                                                        <span style="color: red;">Declined<i
                                                                                class="fa fa-times pl-4"
                                                                                aria-hidden="true"></i></span>
                                                                    @endif

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

@endsection
