@extends('layout.app');
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    @if ($data['auth_user']== 1)
                        <div class="col-lg-3 col-6">
                            <!-- small card -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    {{-- {{ $users = DB::table('users')->count() }} --}}
                                    {{-- {{dd($users)  }} --}}
                                    <h3>{{ $data['user_count'] }}</h3>

                                    <p>Total Users</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                </div>
                                <a href="{{ route('user.index') }}" class="small-box-footer">
                                    View All <i class="fas fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small card -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3>{{ $data['doctor_count'] }}</h3>

                                    <p>Doctors</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-user-md" aria-hidden="true"></i>
                                </div>
                                <a href="{{ route('doctor.index') }}" class="small-box-footer">
                                    View All <i class="fas fa-arrow-circle-right"></i>
                                </a>
                                </a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small card -->
                            <div class="small-box bg-warning ">
                                <div class="inner">
                                    <h3>{{ $data['admin_count'] }}</h3>

                                    <p> Admin</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-user-plus"></i>
                                </div>
                                <a href="#" class="small-box-footer">
                                    More info <i class="fas fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small card -->
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3>{{ $data['booking_count'] }}</h3>
                                    <p>Appointments</p>
                                </div>
                                <div class="icon">
                                  <i class="fa fa-stethoscope" aria-hidden="true"></i>
                                </div>
                                <a href="#" class="small-box-footer">
                                    View All <i class="fas fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <!-- small card -->
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h3>{{ $data['department_count']  }}</h3>
                                    <p>Departments</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-building" aria-hidden="true"></i>
                                </div>
                                <a href="{{ route('department.index') }}" class="small-box-footer">
                                    View All <i class="fas fa-arrow-circle-right"></i>
                                </a>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                          <!-- small card -->
                          <div class="small-box bg-danger">
                              <div class="inner">
                                  <h3>{{ $data['schedule_count']}}</h3>
                                  <p>Schedules</p>
                              </div>
                              <div class="icon">
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                              </div>
                              <a href="#" class="small-box-footer">
                                  View All <i class="fas fa-arrow-circle-right"></i>
                              </a>
                          </div>
                      </div>
                        <!-- ./col -->
                    @elseif($data['auth_user'] == 2)
                        @if ($data['doctor'])
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="card-body box-profile">
                                            <div class="text-center">                                               
                                                    <img class="profile-user-img img-fluid img-circle"
                                                        src="{{ asset($data['doctor'] ->image) }}" alt="User profile picture">
                                            </div>

                                            <h3 class="profile-username text-center">

                                                {{ $data['doctor'] ->fname . ' ' . $data['doctor'] ->lname }}
                                            </h3>

                                            <p class="text-muted text-center">{{ $data['doctor'] ->specialization }}</p>

                                            <ul class="list-group list-group-unbordered mb-3">
                                                <li class="list-group-item">
                                                    <b>Department</b> <a
                                                        class="float-right">{{ $data['doctor'] ->department->department_name }}</a>
                                                </li>
                                                <li class="list-group-item">
                                                    <b>Gender</b> <a class="float-right">{{ $data['doctor'] ->gender }}</a>
                                                </li>
                                                <li class="list-group-item">
                                                    <b>Contact</b> <a class="float-right">{{ $data['doctor'] ->contact }}</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>                                
                                  <!-- /.card-body -->                                  
                              </div>
                              </div>
                            </div>
                        @endif
                        @else{
                           <p>No user found</p>
                        }
                    @endif
                </div>
            </div>
        </section>
    </div>
@endsection
