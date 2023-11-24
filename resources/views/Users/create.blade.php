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

                            <form role="form" method="post" action="{{ route('user.store') }} " id="userform">
                                @csrf
                                <!-- Horizontal Form -->
                                <div class="card card-info">
                                    <div class="card-header">
                                        <h3 class="card-title">Add User Form</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    <div class="card-body">
                                        <span class="text-danger">*Indicates required field</span></label>
                                        <div class="form-group ">
                                            <label for="inputEmail3" class="col-sm-3 col-form-label">
                                                Name<span class="text-danger">*</span></label><br>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" name="name" id="name"
                                                    placeholder="Enter Your Name" value={{ old('name') }}>
                                            </div>

                                        </div>
                                        @error('name')
                                            <span class="text-danger " style="padding-left:100px; margin-left:100px;">{{ $message }}</span>
                                        @enderror
                                        <div class="form-group ">
                                            <label for="inputEmail3" class="col-sm-3 col-form-label">
                                                Email<span class="text-danger">*</span></label></label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" name="email" id="email"
                                                    placeholder="Email" value={{ old('email') }}>
                                            </div>

                                        </div>
                                        @error('email')
                                            <span class="text-danger"  style="padding-left:100px; margin-left:100px;">{{ $message }}</span>
                                        @enderror
                                        <div class="form-group ">
                                            <label for="inputEmail3" class="col-sm-3 col-form-label">Password<span class="text-danger">*</span></label></label>
                                            <div class="col-sm-4">
                                                <input type="password" class="form-control" name="password" id="password"
                                                    placeholder="Password" value={{ old('password') }}>
                                            </div>

                                        </div>
                                        @error('password')
                                            <span class="text-danger"  style="padding-left:100px; margin-left:100px;">{{ $message }}</span>
                                        @enderror
                                        <div class="form-group ">
                                            <label for="inputEmail3" class="col-sm-3 col-form-label">Confirm
                                                Password<span class="text-danger">*</span></label></label>
                                            <div class="col-sm-4">
                                                <input type="password" class="form-control" name="password_confirmation"
                                                    id="password" placeholder="Confirm Password" value={{ old('password_confirmation')}}>
                                            </div>

                                        </div>
                                        @error('password')
                                            <span class="text-danger"  style="padding-left:100px; margin-left:100px;">{{ $message }}</span>
                                        @enderror
                                        <div class="form-group ">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Role<span class="text-danger">*</span></label></label><br>
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
                                           

                                        </div>
                                        @error('role')
                                            <span class="text-danger"  style="padding-left:100px; margin-left:100px;">{{ $message }}</span>
                                        @enderror
                                        <div class="form-group ">
                                            <!-- radio -->
                                            <div class="form-group  mb-0 ">
                                                <label class="col-sm-2 col-form-label"
                                                    for="exampleInputEmail1">Status<span class="text-danger">*</span></label></label><br>
                                                <div class="form-check form-check-inline">
                                                    <div class=" flex">
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
