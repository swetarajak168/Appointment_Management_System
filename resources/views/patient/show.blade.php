@extends('layout.app')
@section('content')
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header" style="background-color: #2F6B73">
                            <h3 class="card-title text-white ">Patient Information</h3>
                        </div>
                        <!-- /.card-header -->

                        <div class="card-body box-profile">
                           
                                    <img class="profile-user-img img-fluid img-circle"
                                        src="{{ asset('storage/images/avatar.webp') }}" alt="profile">
                        </div>
                        <h3 class="profile-username text-center">
                            {{ $patient->name }}</h3>
                        <div class="d-flex justify-content-center ">
                            <ul class="list-group list-group-unbordered mb-3 mr-5 p-2">

                                <li class="">
                                    <b>Email:</b> {{ $patient->email }}
                                </li>
                                <li class="">
                                    <b>Address:</b> {{ $patient->address }}
                                </li>
                                <li class="">
                                    <b>Contact:</b> {{ $patient->contact }}
                                </li>
                                <li class="">
                                    <b>Gender:</b> {{ $patient->gender }}
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

    </section>
</div>
@endsection