@extends('layout.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-10 ml-5">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <!-- /.card-header -->
                            <!-- form start -->

                            <form role="form" method="post" action="{{ route('user.store') }}">
                                @csrf
                                <!-- Horizontal Form -->
                                <div class="card card-info">
                                    <div class="card-header">
                                        <h3 class="card-title">Add User Form</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    {{-- {{$errors}} --}}
                                    <div class="card-body">

                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-3 col-form-label">
                                                Name</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" name="name" id="name"
                                                    placeholder="Enter Your Name">
                                            </div>

                                        </div>
                                        @error('name')
                                            <span class="text-danger " style="padding-left:100px; margin-left:100px;">{{ $message }}</span>
                                        @enderror
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-3 col-form-label">
                                                Email</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" name="email" id="email"
                                                    placeholder="Email">
                                            </div>

                                        </div>
                                        @error('email')
                                            <span class="text-danger"  style="padding-left:100px; margin-left:100px;">{{ $message }}</span>
                                        @enderror
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-3 col-form-label">Password</label>
                                            <div class="col-sm-4">
                                                <input type="password" class="form-control" name="password" id="password"
                                                    placeholder="Password">
                                            </div>

                                        </div>
                                        @error('password')
                                            <span class="text-danger"  style="padding-left:100px; margin-left:100px;">{{ $message }}</span>
                                        @enderror
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-3 col-form-label">Confirm
                                                Password</label>
                                            <div class="col-sm-4">
                                                <input type="password" class="form-control" name="password_confirmation"
                                                    id="password" placeholder="Confirm Password">
                                            </div>

                                        </div>
                                        @error('password')
                                            <span class="text-danger"  style="padding-left:100px; margin-left:100px;">{{ $message }}</span>
                                        @enderror
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-3 col-form-label">Role</label>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input mt-1 ml-2" type="radio" name="role"
                                                    id="inlineRadio1" value="1">
                                                <label class="form-check-label" for="inlineRadio1">Admin</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input mt-1 ml-1" type="radio" name="role"
                                                    id="inlineRadio2" value="2"  @checked(true)>
                                                <label class="form-check-label" for="inlineRadio2">Doctor</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input mt-1 ml-1" type="radio" name="role"
                                                    id="inlineRadio2" value="3">
                                                <label class="form-check-label" for="inlineRadio2">User</label>
                                            </div>

                                        </div>
                                        @error('role')
                                            <span class="text-danger"  style="padding-left:100px; margin-left:100px;">{{ $message }}</span>
                                        @enderror
                                        <div class="form-group row">
                                            <!-- radio -->
                                            <div class="form-group flex mb-0 ">
                                                <label class="col-sm-7 col-form-label"
                                                    for="exampleInputEmail1">Status</label>
                                                <div class="form-check form-check-inline">
                                                    <div class="ml-4 flex">
                                                        <input class="form-check-input mt-1 " type="radio" name="status"
                                                            id="inlineRadio1" value="1" @checked(true)>
                                                        <label class="form-check-label " for="inlineRadio1" >Active</label>
                                                    </div>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <div class="ml-5 flex">
                                                        <input class="form-check-input mt-1" type="radio" name="status"
                                                            id="inlineRadio2" value="0">
                                                        <label class="form-check-label"
                                                            for="inlineRadio2">Inactive</label>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        @error('status')
                                                <span class="text-danger " style="padding-left:100px; margin-left:100px;">{{ $message }}</span>
                                            @enderror
                                    </div>
                                </div>

                                <div class="card-footer">
                                    <button type="submit" style="background-color: #17a2b8; color:white"
                                        class="btn btn-default float-right">Add User</button>
                                </div>
                                <!-- /.card -->
                            </form>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
    </div>
    <!-- /.card-body -->
@endsection