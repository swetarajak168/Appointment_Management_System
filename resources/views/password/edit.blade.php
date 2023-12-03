@extends('layout.app')
@section('content')
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-10 ">
                    <!-- general form elements -->
                        <!-- /.card-header -->
                        <!-- form start -->
                    {{ $errors }}
                        <form role="form" method="post" action="{{ route('update.password') }} " id="passwordform">
                            @csrf
                            @method('PUT')
                            <!-- Horizontal Form -->
                            <div class="card card-info">
                                <div class="card-header">
                                    <h3 class="card-title">Change Password</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <div class="card-body">
                                    
                                    <div class="form-group ">
                                        <label for="inputEmail3" class="col-sm-3 col-form-label">Password<span class="text-danger">*</span></label></label>
                                        <div class="col-sm-4">
                                            <input type="password" class="form-control" name="current_password" id="current_password"
                                                placeholder="Password" >
                                        </div>

                                    </div>
                                    @error('current_password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    <div class="form-group ">
                                        <label for="inputEmail3" class="col-sm-3 col-form-label">
                                           New Password<span class="text-danger">*</span></label></label>
                                        <div class="col-sm-4">
                                            <input type="password" class="form-control" name="new_password"
                                                id="new_password" placeholder="New Password" >
                                        </div>

                                    </div>
                                    @error('new_password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                  
                                    <div class="form-group ">
                                        <label for="inputEmail3" class="col-sm-3 col-form-label">Confirm
                                            Password<span class="text-danger">*</span></label></label>
                                        <div class="col-sm-4">
                                            <input type="password" class="form-control" name="new_password_confirmation"
                                                id="new_password_confirmation" placeholder="Confirm New Password" >
                                        </div>
                                    </div>
                                    
                                    @error('new_password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                  
                                </div>
                                <div class="card-footer">
                                    <button type="submit" style="background-color: #17a2b8; color:white"
                                        class="btn btn-default float-right">Change</button>
                                </div>
                            </div>

                            <!-- /.card -->
                        </form>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
</div>
@endsection