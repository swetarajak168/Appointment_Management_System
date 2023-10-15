
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
                          
                            <form role="form" method="post" action="/dashboard/user/store">
                                @csrf
                                <!-- Horizontal Form -->
                                <div class="card card-info">
                                    <div class="card-header">
                                        <h3 class="card-title">Add Doctor Form</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    
                                        <div class="card-body">

                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-2 col-form-label"> 
                                                    First Name</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" name="fname" id="name"
                                                        placeholder="Enter Your First Name">
                                                </div>
                                                @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror

                                                <label for="inputEmail3" class="col-sm-2 col-form-label"> 
                                                    Last Name</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" name="lname" id="name"
                                                        placeholder="Enter Your Last Name">
                                                </div>
                                                @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="form-group row">
                                                
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-2 col-form-label"> 
                                                    Email</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" name="email" id="email"
                                                        placeholder="Email">
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
                                                        placeholder="Password">
                                                </div>
                                                @error('password')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                       
                                            <input type="hidden" name="hidden_field_name" value="2">

                                            <div class="form-group row">
                                                <label for="inputEmail3"
                                                    class="col-sm-2 col-form-label">Contact</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" name="contact" id="contact"
                                                        placeholder=" Enter your Contact Number">
                                                </div>
                                                @error('status')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label for="inputEmail3"
                                                    class="col-sm-2 col-form-label">Province</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" name="province" id="province"
                                                        placeholder=" Enter  province name">
                                                </div>
                                                @error('status')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                                
                                                <label for="inputEmail3"
                                                class="col-sm-2 col-form-label">District</label>
                                                <div class="col-sm-4">
                                                <input type="text" class="form-control" name="province" id="province"
                                                    placeholder=" Enter your district ">
                                                </div>
                                            @error('status')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail3"
                                                    class="col-sm-2 col-form-label">Municipality</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" name="province" id="province"
                                                        placeholder=" Enter your municipality ">
                                                </div>
                                                @error('status')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                                
                                                <label for="inputEmail3"
                                                class="col-sm-2 col-form-label">Ward</label>
                                                <div class="col-sm-3">
                                                <input type="number" class="form-control w-50" name="ward" id="ward">                                                
                                                
                                                    
                                            </div>

                                            
                                            @error('status')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-2 col-form-label"> 
                                                    Tole</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" name="Tole" id="Tole"
                                                        placeholder="Tole">
                                                </div>
                                                @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group row">
                                                <!-- radio -->
                                                <div class="form-group flex ">
                                                    <label class="col-sm-4 col-form-label"
                                                        for="exampleInputEmail1">Gender</label>
                                                    <div class="form-check form-check-inline">
                                                        <div class="ml-4 flex">
                                                            <input class="form-check-input mt-1 " type="radio"
                                                                name="status" id="inlineRadio1"
                                                                value="male">
                                                            <label class="form-check-label "
                                                                for="inlineRadio1">Male</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <div class="ml-5 flex">
                                                            <input class="form-check-input mt-1" type="radio"
                                                                name="status" id="inlineRadio2"
                                                                value="female">
                                                            <label class="form-check-label"
                                                                for="inlineRadio2">Female</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                @error('status')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-2 col-form-label"> 
                                                    DOB</label>
                                                <div class="col-sm-4">
                                                    <input type="DATE" class="form-control" name="dob" id="dob"
                                                        >
                                                </div>
                                                @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-2 col-form-label"> 
                                                    Specialization</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" name="specialization" id="specialization"
                                                        placeholder="Your Specialization">
                                                </div>
                                                @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-2 col-form-label"> 
                                                    Department</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" name="department" id="department"
                                                        placeholder="Your Department">
                                                </div>
                                                @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-2 col-form-label"> 
                                                    Image</label>
                                                <div class="col-sm-4">
                                                    <input type="file" class="form-control" name="image" id="image"
                                                      >
                                                </div>
                                                @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                </div>
                                        
                                <div class="card-footer">                           
                                    <button type="submit" style="background-color: #17a2b8; color:white" class="btn btn-default float-right">Add Doctor</button>
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