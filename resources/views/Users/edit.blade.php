
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
                            <form role="form" method="post" action="/dashboard/user/{{$user->id}}/update">
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
                                                        placeholder="Enter Your Name" value={{ old('name', $user->name)}}>
                                                </div>
                                                @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-2 col-form-label"> 
                                                    Email</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" name="email" id="email"
                                                        placeholder="Email"  value={{ old('email', $user->email)}}>
                                                </div>
                                                @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="form-group row">
                                                <label for="inputEmail3"
                                                    class="col-sm-2 col-form-label">Password</label>
                                                <div class="col-sm-4">
                                                    <input type="password" class="form-control" name="password" id="password"
                                                        placeholder="Password"  >
                                                </div>
                                                @error('password')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                          {{-- @dd($user); --}}
                                            <div class="form-group row">
                                                <label for="inputEmail3"
                                                    class="col-sm-2 col-form-label">Role</label>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input mt-1" type="radio"
                                                            name="role" id="inlineRadio1"
                                                            value="1"
                                                             {{ $user->role == '1' ? 'checked' : '' }}
                                                             >
                                                        <label class="form-check-label"
                                                            for="inlineRadio1">1</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input mt-1" type="radio"
                                                            name="role" id="inlineRadio2"
                                                            value="2"
                                                            {{ $user->role == '2' ? 'checked' : '' }}
                                                             >
                                                        <label class="form-check-label"
                                                            for="inlineRadio2">2</label>
                                                    </div>
                                                    @error('role')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                            </div>
                                            <div class="form-group row">
                                                <!-- radio -->
                                                <div class="form-group flex">
                                                    <label class="col-sm-4 col-form-label "
                                                        for="exampleInputEmail1">Status</label>
                                                    <div class="form-check form-check-inline">
                                                        <div class="ml-4 flex">
                                                        <input class="form-check-input mt-1 ml-10" type="radio"
                                                            name="status" id="inlineRadio1"
                                                            value="active"
                                                            {{ $user->status == 'active' ? 'checked' : '' }}>
                                                        <label class="form-check-label"
                                                            for="inlineRadio1">Active</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input mt-1" type="radio"
                                                            name="status" id="inlineRadio2"
                                                            value="inactive"
                                                            {{ $user->status == 'inactive' ? 'checked' : '' }}>
                                                        <label class="form-check-label"
                                                            for="inlineRadio2">Inactive</label>
                                                    </div>
                                                </div>
                                                @error('status')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                </div>
                        
                                 <!-- /.card-body -->
                                <div class="card-footer">
                                    {{-- <button type="submit" class="btn btn-info"> --}}
                                        {{-- <a href="{{url('/dashboard/educationdetail')}}">Next</a> </button> --}}
                                    <button type="submit" class="btn btn-default float-right">Add User</button>
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
