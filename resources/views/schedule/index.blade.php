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
                                            {{-- {{ dd($doctor->id) }} --}}
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
                                        <table class="table table-bordered ">
                                            <thead>
                                                <tr>
                                                    <th>S.N</th>
                                                    <th>Date</th>
                                                    @if (auth()->user()->role == 1)
                                                        <th>Doctor</th>
                                                    @endif
                                                    <th>Available Time</th>

                                                    {{-- <th>Available Quota</th> --}}
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if (auth()->user()->role == 1)
                                                    @foreach ($schedules->groupBy('nepali_date') as $date => $schedulesByDate)
                                                        <div hidden>

                                                            {{ $rowspan = count($schedulesByDate) }}
                                                        </div>
                                                        {{-- {{ dd($schedules) }} --}}
                                                        @foreach ($schedulesByDate as $index => $schedule)
                                                            {{-- {{ dd($schedule) }} --}}
                                                            <tr>
                                                                @if ($index === 0)
                                                                    <td rowspan="{{ $rowspan }}">
                                                                        {{ $loop->parent->iteration }}</td>
                                                                    <td rowspan="{{ $rowspan }}">
                                                                        {{ $schedule->nepali_date }}</td>
                                                                    @if (auth()->user()->role == 1)
                                                                        <td rowspan="{{ $rowspan }}">
                                                                            {{ $schedule->doctor->fname }}</td>
                                                                    @endif
                                                                @endif
                                                                <td>{{ $schedule->start_time . ' - ' . $schedule->end_time }}
                                                                </td>
                                                                <td class="d-flex mr-2">


                                                                    <a href="{{ route('schedule.edit', ['schedule' => $schedule]) }}"
                                                                        class="btn btn-primary btn-sm mr-2">
                                                                        <i class="fa fa-edit" aria-hidden="true"></i> Edit
                                                                    </a>

                                                                    <form method="POST"
                                                                        action="{{ route('schedule.destroy', ['schedule' => $schedule]) }}"
                                                                        id="delete-form">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button class="btn btn-danger btn-sm mr-2"
                                                                            onclick="return deleteConfirm('Delete this user')"><i
                                                                                class="fa fa-trash" aria-hidden="true"></i>
                                                                            Delete
                                                                        </button>
                                                                    </form>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    @endforeach
                                                @endif
                                                @foreach ($schedule->groupBy('nepali_date') as $date => $schedulesByDate)
                                                <div hidden>

                                                    {{ $rowspan = count($schedulesByDate) }}
                                                </div>
                                                {{-- {{ dd($schedules) }} --}}
                                                @foreach ($schedulesByDate as $index => $key)
                                                    {{-- {{ dd($key) }} --}}
                                                    <tr>
                                                        @if ($index === 0)
                                                            <td rowspan="{{ $rowspan }}">
                                                                {{ $loop->parent->iteration }}</td>
                                                            <td rowspan="{{ $rowspan }}">
                                                                {{ $key->nepali_date }}</td>
                                                            @if (auth()->user()->role == 1)
                                                                <td rowspan="{{ $rowspan }}">
                                                                    {{ $key->doctor->fname }}</td>
                                                            @endif
                                                        @endif
                                                        <td>{{ $key->start_time . ' - ' . $key->end_time }}
                                                        </td>
                                                        <td class="d-flex mr-2">
                                                            <a href="{{ route('schedule.edit', ['schedule' => $key]) }}"
                                                                class="btn btn-primary btn-sm mr-2">
                                                                <i class="fa fa-edit" aria-hidden="true"></i> Edit
                                                            </a>
                                                            <form method="POST"
                                                                action="{{ route('schedule.destroy', ['schedule' => $key]) }}"
                                                                id="delete-form">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn btn-danger btn-sm mr-2"
                                                                    onclick="return deleteConfirm('Delete this user')"><i
                                                                        class="fa fa-trash" aria-hidden="true"></i>
                                                                    Delete
                                                                </button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
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
                        @if (auth()->user()->role == 1)
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
                                        id="nepali-datepicker" placeholder="Schedule Date" >
                                </div>


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
                        <div class="scheduleTime mb-3">
                            <div class="form-group d-flex ">

                                <div class="row col-md-8">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">
                                        Start Time<span class="text-danger"></span></label><br>
                                    <div class="col-lg-6">
                                        <input type="time" class="form-control " name="start_time[]" id="start_time"
                                           >
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
                                        <input type="time" class="form-control " name="end_time[]" id="end_time"
                                            >
                                    </div>
                                    <br>

                                </div>


                                @error('end_time')
                                    <span class="text-danger"
                                        style="padding-left:100px; margin-left:100px;">{{ $message }}</span>
                                @enderror


                            </div>
                            <div class="row  d-flex justify-content-end">
                                <i class="fa fa-plus-circle  fa-lg" aria-hidden="true" id="addSchedule"
                                    style="color: rgb(10, 65, 25);padding-right:2px " onclick="addSchedule()"></i>
                                <i class="fa fa-minus-circle  fa-lg " aria-hidden="true" style="color: red; "></i>

                            </div>
                        </div>

                    </div>
                    <input type="hidden" id="englishdate" name='english_date' />
                    @if (auth()->user()->role == 2)
                        {{-- {{ dd(auth()->user()->doctor->id) }} --}}
                        <input type="hidden" name='doctor_id' value={{ auth()->user()->doctor->id }} />
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
