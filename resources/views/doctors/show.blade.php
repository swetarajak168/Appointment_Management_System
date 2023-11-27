@extends('layout.app');
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <h3 class=>Doctor Profile</h3>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header" style="background-color: #2F6B73">
                                <h3 class="card-title text-white ">Basic Details</h3>
                            </div>
                            <!-- /.card-header -->

                            <div class="card-body box-profile">
                                @if ($doctor->image)
                                    <div class="text-center">
                                        <img class="profile-user-img img-fluid img-circle" src="{{ asset($doctor->image) }}"
                                            alt="profile">
                                    @else
                                        <img class="profile-user-img img-fluid img-circle"
                                            src="{{ asset('storage/images/avatar.webp') }}" alt="profile">
                                @endif
                            </div>
                            <h3 class="profile-username text-center">
                                {{ $doctor->fname . '' . $doctor->lname }}</h3>
                            <div class="d-flex justify-content-center ">
                                <ul class="list-group list-group-unbordered mb-3 mr-5">
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
                                        <b>Department: </b> {{ $doctor->department->department_name }}
                                    </li>
                                    <li class="list-group-item">
                                        <b>Specialization: </b> {{ $doctor->specialization }}
                                    </li>
                                    <li class="list-group-item">
                                        <b>gender: </b> {{ $doctor->gender }}
                                    </li>
                                    <li class="list-group-item">
                                        <b>Date Of Birth: </b> {{ $doctor->dob }}
                                    </li>
                                </ul>

                                <ul class="list-group list-group-unbordered mb-3 ml-5">
                                    <li class="list-group-item">
                                        <b>Province</b> {{ $doctor->province }}
                                    </li>
                                    <li class="list-group-item">
                                        <b>District:</b> {{ $doctor->district }}
                                    </li>
                                    <li class="list-group-item">
                                        <b>Municipality: </b> {{ $doctor->municipality }}
                                    </li>
                                    <li class="list-group-item">
                                        <b>Ward: </b> {{ $doctor->ward }}
                                    </li>
                                    <li class="list-group-item">
                                        <b>Tole: </b> {{ $doctor->tole }}
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <!-- /.card-body -->


                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header" style="background-color: #2F6B73">
                            <h3 class="card-title text-white ">Education Details</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Level</th>
                                        <th>Institutuion</th>
                                        <th>Board</th>
                                        <th>Maks</th>
                                        <th>Completion Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($doctor->education as $education)
                                        <tr>
                                            <td>{{ $education->level }}</td>
                                            <td>{{ $education->institution }}</td>
                                            <td>{{ $education->board }}</td>
                                            <td>{{ $education->marks }}</td>
                                            <td>{{ $education->completionDate }}</td>

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


            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header" style="background-color: #2F6B73">
                            <h3 class="card-title text-white">Experience Details</h3>


                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Organization Name</th>
                                        <th>Position</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Job Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($doctor->experience as $experience)
                                        <tr>
                                            <td>{{ $experience->organization_name }}</td>
                                            <td>{{ $experience->position }}</td>
                                            <td>{{ $experience->startDate }}</td>
                                            <td>{{ $experience->endDate }}</td>
                                            <td style="width:200px; overflow-wrap:break-word">
                                                {{ $experience->jobDescription }}</td>
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
    <!-- /.card-body -->


    <!-- /.nav-tabs-custom -->
    </div>
    <!-- /.col -->

    </div>
    </section>
    <!-- Main content -->
    </div>
@endsection
