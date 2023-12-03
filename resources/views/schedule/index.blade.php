@extends('layout.app')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <h1 class="card-title w-30">Schedule Detail<span class="text-danger ml-2"> Click on schedule to
                                delete</span></h1>
                        {{-- {{ dd($doctor->id) }} --}}
                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-lg">
                                    <i class="fa fa-plus-circle " aria-hidden="true"></i> Add Schedule
                                </button>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">

                    @if ($auth_user->role == 1)
                    <div class="col-md-12">
                            @if ($doctors)
                                @foreach ($doctors as $doctor)
                                    @if ($doctor->schedule->isNotEmpty())
                                        <div class="row mb-4">
                                            <div class="col-md-4">
                                                <div class="card">
                                                    <div class="card-header  border-bottom-0">
                                                        <h2>
                                                            {{ $doctor->fname . ' ' . $doctor->lname }}
                                                        </h2>
                                                    </div>
                                                    <div class="card-body pt-0 text-center">
                                                        @if ($doctor->image)
                                                            <img class="profile-user-img img-fluid img-circle"
                                                                src="{{ asset($doctor->image) }}" alt="profile">
                                                        @else
                                                            <img class="profile-user-img img-fluid img-circle"
                                                                src="{{ asset('storage/images/avatar.webp') }}"
                                                                alt="profile">
                                                        @endif

                                                        <br>
                                                        <div class="text-center">
                                                            License No: {{ $doctor->license_no }}
                                                            <br>
                                                            Specialization:{{ $doctor->specialization }}
                                                        </div>
                                                        <br>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card">
                                                    <div class="card-body">
                                                        @foreach ($doctor->schedule->groupBy('nepali_date') as $date => $schedulesByDate)
                                                            <h5 class="mt-2"> {{ $date }}</h5>
                                                            <div class="row">
                                                                @foreach ($schedulesByDate as $key)
                                                                    <form method="POST"
                                                                        action="{{ route('schedule.destroy', ['schedule' => $key]) }}"
                                                                        id="delete-form">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button class="btn btn-default btn-sm mr-2 mt-2"
                                                                            onclick="return deleteConfirm('delete this schedule')">
                                                                            {{ $key->start_time . ' - ' . $key->end_time }}
                                                                        </button>
                                                                    </form>
                                                                    <div hidden>
                                                                        {{ $rowspan = count($schedulesByDate) }}
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            @else
                                <h1 class="text-center">No Schedule Available</h1>
                            @endif
                     
                    </div>
                    @else
                    <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            @foreach ($schedule->groupBy('nepali_date') as $date => $schedulesByDate)
                                <h5 class="mt-2"> {{ $date }}</h5>
                                <div class="row">
                                    @foreach ($schedulesByDate as $index => $key)
                                        <form method="POST"
                                            action="{{ route('schedule.destroy', ['schedule' => $key]) }}"
                                            id="delete-form">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-default btn-sm mr-2 mt-2"
                                                onclick="return deleteConfirm('delete this schedule')"
                                                class="fa fa-trash" aria-hidden="true"></i>
                                                {{  $key->start_time . ' - ' . $key->end_time  }}
                                            </button>
                                        </form>
                                        @endforeach                                    
                                </div>
                                @endforeach
                        </div>
                    </div>
                </div>
                @endif

        </section>




        <div class="modal fade" id="modal-lg">

            <div class="modal-dialog modal-lg">
                <form role="form" method="post" action="{{ route('schedule.store') }} " id="userform">
                    @csrf
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Create Schedule</h4>
                            <div class="d-flex">
                                <a href="#" onclick="addSchedule()" class="bg-success rounded-sm float-right p-2 m-3"
                                    id="addSchedule"> More Time<i class="fa fa-plus pl-1" aria-hidden="true"></i></a>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                        <span class="text-danger pl-4">*Indicates required field</span>

                        <div class="modal-body">


                            <div class="form-group d-flex ">

                                @if ($auth_user->role == 1)
                                <div class="row col-md-7">
                                        <label for="inputEmail3" class="col-sm-3 col-form-label">
                                            Doctor<span class="text-danger">*</span></label><br>
                                        <div class="col-lg-6">
                                            <select name="doctor_id" id="doctor" class="form-control">
                                                <option value="">Select Doctor</option>

                                                @foreach ($doctors as $doctor)
                                                    {{ $doctor->id }}
                                                    <option value="{{ $doctor->id }}">
                                                        {{ $doctor->fname . ' ' . $doctor->lname }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        @error('doctor_id')
                                        <span class="text-danger"
                                        style="padding-left:100px; margin-left:100px;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    @endif

                                <div class="row col-md-7 ">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">
                                        Date<span class="text-danger">*</span></label><br>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control nepali-datepicker-schedule"
                                            name="nepali_date" id="nepali-datepicker" placeholder="Schedule Date">
                                    </div>
                                    <br>
                                </div>
                                @error('nepali_date')
                                    <span class="text-danger"
                                        style="padding-left:100px; margin-left:100px;">{{ $message }}</span>
                                @enderror
                            </div>


                            
                            <div class="scheduleTime mb-3">
                                
                                <div class="form-group d-flex ">

                                    <div class="row col-md-7">
                                        <label for="inputEmail3" class="col-sm-3 col-form-label">
                                            Start Time<span class="text-danger">*</span></label><br>
                                        <div class="col-lg-6">
                                            <input type="time" class="form-control " name="start_time[]"
                                                id="start_time">
                                        </div>
                                        @error('start_time')
                                            <span class="text-danger"
                                                style="padding-left:100px; margin-left:100px;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="row col-md-6 ">
                                        <label for="inputEmail3" class="col-sm-3 col-form-label">
                                            End Time<span class="text-danger">*</span></label><br>
                                        <div class="col-lg-6">
                                            <input type="time" class="form-control " name="end_time[]"
                                                id="end_time">
                                        </div>
                                        <br>
                                        <i class=" remove-schedule fa fa-minus-circle fa-lg pt-2 pl-3" aria-hidden="true"
                                            style="color:red"></i>
                                    </div>


                                    @error('end_time')
                                        <span class="text-danger"
                                            style="padding-left:100px; margin-left:100px;">{{ $message }}</span>
                                    @enderror


                                </div>

                            </div>

                        </div>

                        <input type="hidden" id="englishdate" name='english_date' />
                        @if ($auth_user->role == 2)
                            <input type="hidden" name='doctor_id' value={{ $auth_user->doctor->id }} />
                        @endif
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                            <button type="submit" style="background-color: #17a2b8; color:white"
                                class="btn btn-default float-right">Create </button>
                        </div>
                    </div>
            </div>
            </form>

        </div>
        <!-- /.modal-content -->
        <!-- /.modal-dialog -->
    @endsection
