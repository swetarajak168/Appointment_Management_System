@extends('layout.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->

        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-10 ml-5">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <!-- /.card-header -->
                        <!-- form start -->
                        {{$errors}}
                        <form role="form" method="post" action="{{ route('user.update', ['id' => $user->id]) }}">
                            @csrf
                            @method('PUT')
                            <!-- Horizontal Form -->
                            <div class="card card-info">
                                <div class="card-header">
                                    <h3 class="card-title">Edit User</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->

                                <div class="card-body">

                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">
                                            Name</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="name" id="name"
                                                placeholder="Enter Your Name" value={{ old('name', $user->name) }}>
                                        </div>

                                    </div>
                                    @error('name')
                                        <span class="text-danger" style="padding-left:100px; margin-left:100px;">{{ $message }}</span>
                                    @enderror
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">
                                            Email</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="email" id="email"
                                                placeholder="Email" value={{ old('email', $user->email) }}>
                                        </div>
                                    </div>
                                    @error('email')
                                        <span class="text-danger" style="padding-left:100px; margin-left:100px;">{{ $message }}</span>
                                    @enderror
                                    {{-- @dd($user); --}}
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Role</label>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input mt-1 " type="radio" name="role"
                                                id="inlineRadio1" value="1" {{ $user->role == '1' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="inlineRadio1">Admin</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input mt-1 ml-1" type="radio" name="role"
                                                id="inlineRadio2" value="2" {{ $user->role == '2' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="inlineRadio2">Doctor</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input mt-1 ml-1" type="radio" name="role"
                                                id="inlineRadio2" value="3" {{ $user->role == '3' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="inlineRadio2">User</label>
                                        </div>

                                    </div>
                                    @error('role')
                                        <span class="text-danger"style="padding-left:100px; margin-left:100px;">{{ $message }}</span>
                                    @enderror
                                    <div class="form-group row">
                                        <!-- radio -->
                                        <div class="form-group flex">
                                            <label class="col-sm-5 col-form-label " for="exampleInputEmail1">Status</label>
                                            <div class="form-check form-check-inline">
                                                <div class="ml-4 flex">
                                                    <input class="form-check-input mt-1 ml-10" type="radio" name="status"
                                                        id="inlineRadio1" value="1"
                                                        {{ $user->status == '1' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio1">Active</label>
                                                </div>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input mt-1" type="radio" name="status"
                                                    id="inlineRadio2" value="0"
                                                    {{ $user->status == '0' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="inlineRadio2">Inactive</label>
                                            </div>
                                        </div>
                                    </div>
                                    @error('status')
                                        <span class="text-danger flex" style="padding-left:100px; margin-left:100px;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <!-- /.card-body -->
                            <div class="card-footer">
                                {{-- <button type="submit" class="btn btn-info"> --}}
                                {{-- <a href="{{url('/dashboard/educationdetail')}}">Next</a> </button> --}}
                                <button type="submit" class="btn btn-default float-right"
                                    style="background-color: #17a2b8; color:white">Update User</button>
                            </div>
                            <!-- /.card-footer -->
                        </form>
                    </div>
                </div>
                <!-- /.card -->
            </div>
            <!-- /.card-body -->
        </div>
    </div>
    <!-- /.card-body -->
@endsection
