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
                            {{ $errors }}
                            <form role="form" method="post" action="{{ route('doctor.update', ['doctor'=>$doctor]) }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
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
                                                <input type="text" class="form-control" name="license_no" id="license_no"
                                                    placeholder="License No."
                                                    value={{ old('license_no', $doctor->license_no) }}>
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
                                                                name="fname" id="name" placeholder="First Name"
                                                                value={{ old('fname', $doctor->fname) }}>
                                                        </div>
                                                    </div>
                                                    @error('fname')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror

                                                </div>
                                                <div class="col-md-6">
                                                    <div class="d-flex">
                                                        <label for="inputEmail3" class="col-sm-4 col-form-label ">
                                                            Last Name</label>
                                                        <div class="col-sm-8 ">
                                                            <input type="text" class="form-control " name="lname"
                                                                id="name" placeholder="Last Name"
                                                                value={{ old('lname', $doctor->lname) }}>
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
                                                                id="email" placeholder="Email"
                                                                value={{ old('email', $doctor->email) }}>
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
                                                            <input type="text" class="form-control" name="Contact"
                                                                id="Contact" placeholder=" Enter your Contact Number"
                                                                value={{ old('Contact', $doctor->Contact) }}>
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
                                                                id="province" placeholder=" Enter  province name"
                                                                value={{ old('Province', $doctor->Province) }}>
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
                                                                id="district" placeholder=" Enter your district "
                                                                value={{ old('District', $doctor->District) }}>
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
                                                                placeholder=" Enter your municipality "
                                                                value={{ old('Municipality', $doctor->Municipality) }}>
                                                            @error('Municipality')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="d-flex">
                                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Ward</label>
                                                        <div class="col-sm-6">
                                                            <input type="number" class="form-control w-50" name="Ward"
                                                                id="ward" value={{ old('Ward', $doctor->Ward) }}>
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
                                                        <input type="text" class="form-control" name="tole" id="Tole"
                                                            placeholder="Tole" value={{ old('tole', $doctor->tole) }}>
                                                        @error('tole')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
        
                                              </div>
                                              <div class="col-md-6">
                                                <div class="d-flex">
                                                    <label for="inputEmail3" class="col-sm-2 col-form-label">
                                                        DOB</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" id="nepali-datepicker"
                                                            placeholder="Select Nepali 
                                                        Date"
                                                            name='dob' value={{ old('dob', $doctor->dob) }} />
                                                    </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>

                                        <div class="form-group row">
                                            
                                        </div>

                                        <div class="form-group row">
                                            <!-- radio -->
                                            <div class="form-group flex ml-3">
                                                <label class="col-sm-4 col-form-label"
                                                    for="exampleInputEmail1">Gender</label>
                                                <div class="form-check form-check-inline">
                                                    <div class="ml-4 flex">
                                                        <input class="form-check-input mt-1 " type="radio"
                                                            name="gender" id="inlineRadio1" value="male"
                                                            {{ $doctor->gender == 'male' ? 'checked' : '' }}>
                                                        <label class="form-check-label " for="inlineRadio1">Male</label>
                                                    </div>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <div class="ml-5 flex">
                                                        <input class="form-check-input mt-1" type="radio"
                                                            name="gender" id="inlineRadio2" value="female"
                                                            {{ $doctor->gender == 'female' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="inlineRadio2">Female</label>
                                                    </div>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <div class="ml-5 flex">
                                                        <input class="form-check-input mt-1" type="radio"
                                                            name="gender" id="inlineRadio2" value="other"
                                                            {{ $doctor->gender == 'others' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="inlineRadio2">Others</label>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                        @error('gender')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror

                                        <div class="container mb-3">
                                            <div class="row">
                                              <div class="col-md-6">
                                                <div class="d-flex">
                                                    <label for="inputEmail3" class="col-sm-4 col-form-label">
                                                        Specialization</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" name="specialization"
                                                            id="specialization" placeholder="Your Specialization"
                                                            value={{ old('specialization', $doctor->specialization) }}>
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
                                                            id="department" placeholder="Your Department"
                                                            value={{ old('Department', $doctor->Department) }}>
                                                        @error('Department')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>

                                        <input type="hidden" id="englishdate" name='english_dob' />


                                        

                                        <div class="form-group row ml-2">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">
                                                Image</label>
                                            <div class="col-sm-4">
                                                <input type="file" class="form-control" name="image" id="image"
                                                    value={{ old('image', $doctor->image) }}>
                                                @error('image')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                        </div>
                                        <input type="hidden" name="role" value="2">
                                        <input type="hidden" name="status" value="1">
                                    </div>
                                </div>

                                <div class="card-footer">
                                    <button type="submit" style="background-color: #17a2b8; color:white"
                                        class="btn btn-default float-right">Update Doctor</button>
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
