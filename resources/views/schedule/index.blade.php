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
                                            <h1 class="card-title w-30">Schedule Detail</h1>
                                            <div class="card-tools">
                                                <div class="input-group input-group-sm" style="width: 150px;">
                                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                                        data-target="#modal-lg">
                                                        <i class="fa fa-plus-circle " aria-hidden="true"></i> Add Schedule
                                                    </button>

                                                </div>
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
                                            <thead>
                                                <tr>
                                                    <th>S.N</th>
                                                    <th>Date</th>
                                                    @if(auth()->user()->role == 1)
                                                    <th>Doctor</th>
                                                    @endif
                                                    <th>Start Time</th>
                                                    <th>End Time</th>
                                                    <th>Available Quota</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($schedules as $schedule)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $schedule->nepali_date }}</td>
                                                        @if(auth()->user()->role == 1)
                                                        <td>{{ $schedule->doctor->fname }}</td>
                                                        @endif
                                                        <td>{{ $schedule->start_time }}</td>
                                                        <td>{{ $schedule->end_time }}</td>
                                                        <td>{{ $schedule->limit }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
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


    <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
            <form role="form" method="post" action="{{ route('schedule.store') }} " id="userform">
                @csrf
                <div class="modal-content">
                    {{ $errors }}
                    <div class="modal-header">
                        <h4 class="modal-title">Add Schedule</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @if(auth()->user()->role == 1)
                        <div class="form-group d-flex">
                            <div class="row col-md-8 ">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">
                                    Doctor<span class="text-danger"></span></label><br>
                                <div class="col-lg-9">
                                    <select name="doctor_id" id="doctor" class="form-control">
                                        <option value="">Select Doctor</option>

                                        @foreach ($doctors as $doctor)
                                            {{ $doctor->id }}
                                            <option value="{{ $doctor->id }}">
                                                {{ $doctor->fname }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            @error('doctor_id')
                                <span class="text-danger"
                                    style="padding-left:100px; margin-left:100px;">{{ $message }}</span>
                            @enderror


                        </div>
                        @endif
                        <div class="form-group d-flex">
                            <div class="row col-md-8 ">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">
                                    Date<span class="text-danger"></span></label><br>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control nepali-datepicker" name="nepali_date"
                                        id="nepali-datepicker" placeholder="Schedule Date" value={{ old('nepali_date') }}>
                                </div>
                                <input type="hidden" id="englishdate_" name='english_dob'/>
                            
                                @error('nepali_date')
                                    <span class="text-danger"
                                        style="padding-left:100px; margin-left:100px;">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="row col-md-6">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">
                                    Limit<span class="text-danger"></span></label><br>
                                <div class="col-lg-6">
                                    <input type="number" class="form-control " name="limit" id="limit"
                                        placeholder=" Maximum Limit" value={{ old('limit') }}>
                                </div>
                                @error('limit')
                                    <span class="text-danger"
                                        style="padding-left:100px; margin-left:100px;">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>
                        <div class="form-group d-flex">

                            <div class="row col-md-8">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">
                                    Start Time<span class="text-danger"></span></label><br>
                                <div class="col-lg-6">
                                    <input type="time" class="form-control " name="start_time" id="start_time"
                                        value={{ old('start_time') }}>
                                </div>
                                @error('start_time')
                                    <span class="text-danger"
                                        style="padding-left:100px; margin-left:100px;">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="row col-md-6 ">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">
                                    End Time<span class="text-danger"></span></label><br>
                                <div class="col-lg-6">
                                    <input type="time" class="form-control " name="end_time" id="end_time"
                                        value={{ old('end_time') }}>
                                </div>
                              
                            </div>
                           

                            @error('end_time')
                                <span class="text-danger"
                                    style="padding-left:100px; margin-left:100px;">{{ $message }}</span>
                            @enderror
                        </div>

                        <div classs="pl-2">
                            <i class="fa fa-plus-circle float-right" aria-hidden="true"></i>
                            
                            <i class="fa fa-minus-circle float-right" aria-hidden="true"></i>
                           
                        </div>
                    </div>
                    <input type="hidden" id="englishdate" name='english_date' />
                    @if(auth()->user()->role == 2)
                    {{-- {{ dd(auth()->user()->doctor->id) }} --}}
                    <input type="hidden"  name='doctor_id'  value={{ auth()->user()->doctor->id}}/>

                    @endif
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                        <button type="submit" style="background-color: #17a2b8; color:white"
                            class="btn btn-default float-right">Add Schedule</button>
                    </div>
                </div>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
    </div>
@endsection
