@extends('layout.app');
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                




                <h3 class=>Doctor Profile</h3>
                <div class="row">
                    <div class="col-md-3">

                        <!-- Profile Image -->
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    <img class="profile-user-img img-fluid img-circle" src="{{ asset($doctor->image) }}"
                                        alt="profile">
                                </div>
                                <h3 class="profile-username text-center">
                                    {{ $doctor->fname . '' . $doctor->lname }}</h3>



                                <ul class="list-group list-group-unbordered mb-3">
                                    <li class="list-group-item">
                                        <b>License No:</b> {{ $doctor->license_no }}
                                    </li>
                                    <li class="list-group-item">
                                        <b>Email:</b> {{ $doctor->email }}
                                    </li>
                                    <li class="list-group-item">
                                        <b>Contact: </b> {{ $doctor->contact }}
                                    </li>
                                    <li class="list-group-item">
                                        <b>Department: </b> {{ $doctor->department }}
                                    </li>
                                </ul>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                        <!-- About Me Box -->

                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-9 ">
                        <div class="card">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">About Me</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <strong><i class="fa fa-info-circle" aria-hidden="true"></i>Basic Information</strong>
                                    <div class="basic text-muted d-flex justify-content-between ">
                                        <div>
                                            <b>Date of Birth: </b>{{ $doctor->dob }}
                                        </div>
                                        <div>
                                            <b>Gender: </b> {{ $doctor->gender }}
                                        </div>
                                        <div>
                                            <b>Specialization: </b> {{ $doctor->specialization }}
                                        </div>

                                    </div>
                                    <strong><i class="fas fa-map-marker-alt mr-1 mt-1"></i> Location</strong>

                                    <div class="location text-muted">
                                        
                                            <ul class="col ">
                                                <div>
                                                    <b>Province: </b>{{ $doctor->province }}
                                                </div>
                                                <div>
                                                    <b>District: </b> {{ $doctor->district }}
                                                </div>
                                                <div>
                                                    <b>Municipality: </b> {{ $doctor->municipality }}
                                                </div>
                                            
                                        
                                                <div>
                                                    <b>Ward: </b>{{ $doctor->ward }}
                                                </div>
                                               
                                                <div>
                                                    <b>Tole: </b> {{ $doctor->tole }}
                                                </div>
                                            </ul>
                                        </div>
                                    
                                    <hr>

                                    <strong><i class="fas fa-book mr-1"></i> Education</strong>
                                    @foreach ($doctor->education as $list)
                                        <ul>
                                            <li class="text-muted"><b>Institution: </b> {{ $list->institution }}</li>
                                            <li class="text-muted"><b>Board/University: </b> {{ $list->board }}</li>
                                            <li class="text-muted"><b>Completion Date: </b> {{ $list->completionDate }}
                                            </li>
                                        </ul>
                                    @endforeach
                                    <hr>

                                   

                                    <strong><i class="fa fa-lightbulb mr-1"></i> Experience</strong>
                                    @foreach ($doctor->experience as $item2)
                                        <ul class="exp  text-muted">
                                            <li>
                                                <b>Organization Name: </b> {{ $item2->organization_name }}
                                            </li>
                                            <li>
                                                <b>Position: </b> {{ $item2->position }}
                                            </li>
                                            <li>
                                                <b>Start Date: </b> {{ $item2->startDate }}
                                            </li>
                                            <li>
                                                <b>End Date: </b> {{ $item2->endDate }}
                                            </li>
                                          </ul>
                                    @endforeach

                                    <hr>

                                    
                                    <hr>

                                </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                        </div>
                        <!-- /.nav-tabs-custom -->
                    </div>
                    <!-- /.col -->
                </div>
            </div>
        </section>
        <!-- Main content -->
    </div>
@endsection
