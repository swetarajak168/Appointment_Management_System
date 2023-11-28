@extends('layout.app');
@section('content')
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <h3 class=>User Profile</h3>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header" style="background-color: #2F6B73">
                                <h3 class="card-title text-white ">User Information</h3>
                            </div>
                            <!-- /.card-header -->

                            <div class="card-body box-profile">
                                @if ($user->image)
                                    <div class="text-center">
                                        <img class="profile-user-img img-fluid img-circle" src="{{ asset($user->image) }}"
                                            alt="profile">
                                    @else
                                        <img class="profile-user-img img-fluid img-circle"
                                            src="{{ asset('storage/images/avatar.webp') }}" alt="profile">
                                @endif
                            </div>
                            <h3 class="profile-username text-center">
                                {{ $user->name }}</h3>
                            <div class="d-flex justify-content-center ">
                                <ul class="list-group list-group-unbordered mb-3 mr-5 p-2">

                                    <li class="">
                                        <b>Email:</b> {{ $user->email }}
                                    </li>
                                    <li class="">
                                        <b>Role:</b>
                                        @if ($user->role == 1)
                                            Admin
                                        @else
                                            Doctor
                                        @endif
                                    </li>
                                    <li class="">
                                        <b>Status:</b>
                                        @if ($user->status == 1)
                                            Active
                                        @else
                                            Inactive
                                        @endif
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
