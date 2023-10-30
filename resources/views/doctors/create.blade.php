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
                            {{-- {{ $errors }} --}}
                            {{-- <form role="form" method="post" action="{{ route('doctor.store') }}"
                                enctype="multipart/form-data"> --}}
                                <form role="form" method="post" action="{{ route('doctor.store') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <!-- Horizontal Form -->
                                <div class="card card-info">
                                    <div class="card-header">
                                        <h3 class="card-title">Add Doctor Form</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    <div class="card-body">
                                        <div class="form-group row ml-2">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">
                                                License No.</label>

                                            <div class="col-sm-4">
                                                <input type="number" class="form-control" name="license_no" id="license_no"
                                                    placeholder="License No." value={{ old('license_no') }}>
                                                @error('license_no')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                        </div>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="d-flex">
                                                        <label for="inputEmail3" class="col-sm-4 col-form-label ">
                                                            First Name</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control mr-2 pr-2"
                                                                name="fname" id="name" placeholder="First Name" value={{ old('fname') }}>
                                                            @error('fname')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>


                                                </div>
                                                <div class="col-md-6">
                                                    <div class="d-flex">
                                                        <label for="inputEmail3" class="col-sm-4 col-form-label ">
                                                            Last Name</label>
                                                        <div class="col-sm-8 ">
                                                            <input type="text" class="form-control " name="lname"
                                                                id="name" placeholder="Last Name" value={{ old('lname') }}>
                                                            @error('lname')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="container mt-3">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="d-flex">
                                                        <label for="inputEmail3" class="col-sm-4 col-form-label">
                                                            Email</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control" name="email"
                                                                id="email" placeholder="Email" value={{ old('email') }}>
                                                            @error('email')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="d-flex">
                                                        <label for="inputEmail3"
                                                            class="col-sm-4 col-form-label">Contact</label>
                                                        <div class="col-sm-8">
                                                            <input type="number" class="form-control" name="Contact"
                                                                id="Contact" placeholder="Your Contact Number" value={{ old('Contact') }}>
                                                            @error('Contact')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="container mt-3">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="d-flex">
                                                        <label for="inputEmail3"
                                                            class="col-sm-4 col-form-label">Province</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control" name="Province"
                                                                id="province" placeholder=" Enter  province name" value={{ old('Province') }}>
                                                            @error('Province')
                                                                <div class="text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="d-flex">
                                                        <label for="inputEmail3"
                                                            class="col-sm-4 col-form-label">District</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control" name="District"
                                                                id="district" placeholder=" Enter your district " value={{ old('District') }}>
                                                            @error('District')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="container mt-3">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="d-flex">
                                                        <label for="inputEmail3"
                                                            class="col-sm-4 col-form-label">Municipality</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control"
                                                                name="Municipality" id="municipality"
                                                                placeholder=" Enter your municipality " value={{ old('Municipality') }}>
                                                            @error('Municipality')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="d-flex">
                                                        <label for="inputEmail3"
                                                            class="col-sm-4 col-form-label">Ward</label>
                                                        <div class="col-sm-6">
                                                            <input type="number" class="form-control w-50"
                                                                name="Ward" id="ward" value={{ old('Ward') }}>
                                                            @error('Ward')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="container mt-3">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="d-flex">
                                                        <label for="inputEmail3" class="col-sm-4 col-form-label">
                                                            Tole</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control" name="tole"
                                                                id="Tole" placeholder="Tole" value={{ old('tole') }}>
                                                            @error('tole')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-6">
                                                    <div class="d-flex">
                                                        <label for="inputEmail3" class="col-sm-4 col-form-label">
                                                            DOB</label>
                                                        <div class="col-sm-4">
                                                            <input type="text" id="nepali-datepicker"
                                                                placeholder="Select Nepali 
                                                        Date"  name='dob'  value={{ old('dob') }}/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="container mt-3">

                                        </div>

                                        <div class="form-group row">
                                            <!-- radio -->
                                            <div class="form-group d-flex  ">
                                                <label class="col-sm-4 col-form-label ml-3"
                                                    for="exampleInputEmail1">Gender</label>
                                                
                                                    <div class="form-check form-check-inline">
                                                        <div class="ml-1 flex">
                                                            <input class="form-check-input mt-1 " type="radio"
                                                                name="gender" id="inlineRadio1" value="male">
                                                            <label class="form-check-label "
                                                                for="inlineRadio1">Male</label>
                                                        </div>
                                                    </div>


                                                    <div class="form-check form-check-inline">
                                                        <div class="ml-5 flex">
                                                            <input class="form-check-input mt-1" type="radio"
                                                                name="gender" id="inlineRadio2" value="female">
                                                            <label class="form-check-label"
                                                                for="inlineRadio2">Female</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <div class="ml-5 flex">
                                                            <input class="form-check-input mt-1" type="radio"
                                                                name="gender" id="inlineRadio2" value="others">
                                                            <label class="form-check-label"
                                                                for="inlineRadio2">Others</label>
                                                        </div>
                                                    </div>                                                                                           
                                                </div>
                                        </div>

                                        @error('gender')
                                        <span class="text-danger" style="margin-left:150px">{{ $message }}</span>
                                    @enderror

                                        <div class="container mb-3">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="d-flex">
                                                        <label for="inputEmail3" class="col-sm-4 col-form-label">
                                                            Specialization</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control"
                                                                name="specialization" id="specialization"
                                                                placeholder="Your Specialization">
                                                            @error('specialization')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-6">
                                                    <div class="d-flex">
                                                        <label for="inputEmail3" class="col-sm-4 col-form-label">
                                                            Department</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control" name="Department"
                                                                id="department" placeholder="Your Department">
                                                            @error('Department')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                  

                                        <div class="form-group row ml-2">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">
                                                Image</label>
                                            <div class="col-sm-4">
                                                <input type="file" class="form-control" name="image"
                                                    id="image"  onchange="previewFile()" >
                                                @error('image')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <img src=""  alt="Image preview"  id="preview"/>
                                        <input type="hidden" name="role" value="2">
                                        <input type="hidden" name="status" value="1">
                                        <input type="hidden" id="englishdate" name='english_dob' />
                                    </div>
                                    {{-- <div class="card-footer">
                                        <button type="submit" style="background-color: #17a2b8; color:white"
                                            class="btn btn-default float-right">Add Doctor</button>
                                    </div> --}}

                                    <div class="card-footer">
                                        <button type="submit" style="background-color: #17a2b8; color:white"
                                            class="btn btn-default float-right">Next</button>
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
