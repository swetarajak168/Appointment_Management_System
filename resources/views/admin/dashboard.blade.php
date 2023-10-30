@extends('layout.app');
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <!-- small card -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                {{-- {{ $users = DB::table('users')->count() }} --}}
                            {{-- {{dd($users)  }} --}}
                                <h3>{{ $users = DB::table('users')->count() }}</h3>

                                <p>Total Users</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </div>
                            <a href="{{ route('user.create') }}" class="small-box-footer">
                                Add More<i class="fa fa-plus-circle pl-2" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small card -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>{{ $doctors = DB::table('doctors')->count() }}</h3>

                                <p>Doctors</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-user-md" aria-hidden="true"></i>
                            </div>
                            <a href="{{ route('doctor.create') }}" class="small-box-footer">
                                More info <i class="fas fa-arrow-circle-right"></i>
                            </a>
                            </a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small card -->
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>{{ $users = DB::table('users')->where('role','=','1')->count() }}</h3>

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
                                <h3>65</h3>

                                <p>Appointments</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-chart-pie"></i>
                            </div>
                            <a href="#" class="small-box-footer">
                                More info <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>
            </div>
        </section>
    </div>
@endsection
