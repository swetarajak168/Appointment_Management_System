@extends('layout.app')
@inject('province_helper', 'App\Helpers\ProvinceHelper')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class=" card-primary">
                            <form role="form" method="post" action="{{ route('doctor.store') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <!-- Basic Detail Form -->
                                <div id="basicinfo">
                                    <div class="card card-info">
                                        <div class="card-header">
                                            <h3 class="card-title">Add Doctor Form</h3>
                                        </div>
                                        <div class="card-body">

                                            <div class="form-group  ml-2">
                                                <label for="inputEmail3" class="col-sm-2 col-form-label">
                                                    License No.</label>

                                                <div class="col-md-4">
                                                    <input type="number" style="width:150%" onchange='formvalidation()'
                                                        class="form-control" name="license_no" id="license_no"
                                                        placeholder="License No." value={{ old('license_no') }}>
                                                    @error('license_no')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="inputEmail3" class="col-sm-4 col-form-label ">
                                                            First Name</label>
                                                        <div class="col-lg-8">
                                                            <input type="text" style="width:150%"
                                                                onchange='formvalidation()' class="form-control mr-2 pr-2"
                                                                name="fname" id="fname" placeholder="First Name"
                                                                value={{ old('fname') }}>
                                                            @error('fname')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="inputEmail3" class="col-sm-4 col-form-label ">
                                                            Last Name</label>
                                                        <div class="col-sm-8 ">
                                                            <input type="text" style="width:150%"
                                                                onchange='formvalidation()' class="form-control "
                                                                name="lname" id="lname" placeholder="Last Name"
                                                                value={{ old('lname') }}>
                                                            @error('lname')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="container mt-3">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="inputEmail3"
                                                            class="col-sm-4 col-form-label">Contact</label>
                                                        <div class="col-sm-8">
                                                            <input type="number" style="width:150%"
                                                                onchange='formvalidation()' class="form-control"
                                                                name="contact" id="Contact"
                                                                placeholder="Your contact Number"
                                                                value={{ old('contact') }}>
                                                            @error('contact')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="container mt-3">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group col-md-12">
                                                            {!! Form::label('province', 'Province ', ['class' => 'col-sm-8 col-form-label']) !!}
                                                            {!! Form::select('province', $province_helper->ProvinceList(), old('province'), [
                                                                'class' => 'form-control  col-md-12',
                                                                'placeholder' => 'Select Province',
                                                                'id' => 'province',
                                                            ]) !!}
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">

                                                        <div class="form-group col-md-12">
                                                            {!! Form::label('district', 'Select district', ['class' => 'col-sm-8 col-form-label']) !!}
                                                            {!! Form::select('district', [], old('district'), [
                                                                'class' => 'form-control col-sm-12',
                                                                'placeholder' => 'Select District',
                                                                'id' => 'district', // Add an id to select element
                                                            ]) !!}
                                                        </div>
                                                        {{-- <label for="inputEmail3"
                                                            class="col-sm-4 col-form-label">Province</label> --}}
                                                        {{-- <div class="col-sm-8">
                                                            <input type="text" style="width:150%"
                                                                onchange='formvalidation()' class="form-control"
                                                                name="province" id="province"
                                                                placeholder=" Enter  province name"
                                                                value={{ old('province') }}>
                                                            @error('province')
                                                                <div class="text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div> --}}

                                                    </div>
                                                    {{-- <div class="col-md-6">

                                                        <label for="inputEmail3"
                                                            class="col-sm-4 col-form-label">District</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" style="width:150%"
                                                                onchange='formvalidation()' class="form-control"
                                                                name="district" id="district"
                                                                placeholder=" Enter your district "
                                                                value={{ old('district') }}>
                                                            @error('district')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>

                                                    </div> --}}
                                                </div>
                                            </div>

                                            <div class="container mt-3">
                                                <div class="row">
                                                    <div class="col-md-6">

                                                        <label for="inputEmail3"
                                                            class="col-sm-4 col-form-label">Municipality</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" style="width:150%"
                                                                onchange='formvalidation()' class="form-control "
                                                                name="municipality" id="municipality"
                                                                placeholder=" Enter your municipality "
                                                                value={{ old('municipality') }}>
                                                            @error('municipality')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>

                                                    </div>
                                                    <div class="col-md-6">

                                                        <label for="inputEmail3"
                                                            class="col-sm-4 col-form-label">Ward</label>
                                                        <div class="col-sm-8">
                                                            <input type="number" style="width:150%"
                                                                onchange='formvalidation()' class="form-control w-150"
                                                                name="ward" id="ward" value={{ old('ward') }}>
                                                            @error('ward')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="container mt-3">
                                                <div class="row">
                                                    <div class="col-md-6">

                                                        <label for="inputEmail3" class="col-sm-4 col-form-label">
                                                            Tole</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" style="width:150%"
                                                                onchange='formvalidation()' class="form-control"
                                                                name="tole" id="Tole" placeholder="Tole"
                                                                value={{ old('tole') }}>
                                                            @error('tole')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>


                                                    </div>
                                                    <div class="col-md-6">

                                                        <label for="inputEmail3" class="col-sm-4 col-form-label">
                                                            Date of birth</label>
                                                        <div class="col-sm-4">
                                                            <input type="text" style="width:300%"
                                                                onchange='formvalidation()' id="nepali-datepicker"
                                                                class="form-control nepali-datepicker"
                                                                placeholder="Select Birth Date" name='dob' />
                                                            @error('dob')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group ">
                                                <!-- radio -->
                                                <div class="form-group ">
                                                    <label class="col-sm-4 col-form-label ml-3"
                                                        for="exampleInputEmail1">Gender</label><br>

                                                    <div class="form-check form-check-inline">
                                                        <div class="pl-3  flex">
                                                            <input class="form-check-input " onchange='formvalidation()'
                                                                type="radio" name="gender" id="inlineRadio1"
                                                                value="male"
                                                                {{ old('gender') == 'male' ? 'checked' : '' }}>
                                                            <label class="form-check-label "
                                                                for="inlineRadio1">Male</label>
                                                        </div>
                                                    </div>


                                                    <div class="form-check form-check-inline">
                                                        <div class="ml-5 flex">
                                                            <input class="form-check-input mt-1"
                                                                onchange='formvalidation()' type="radio" name="gender"
                                                                id="inlineRadio2" value="female"
                                                                {{ old('gender') == 'female' ? 'checked' : '' }}>
                                                            <label class="form-check-label"
                                                                for="inlineRadio2">Female</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <div class="ml-5 flex">
                                                            <input class="form-check-input mt-1" type="radio"
                                                                name="gender" id="inlineRadio2" value="others"
                                                                {{ old('gender') == 'others' ? 'checked' : '' }}>
                                                            <label class="form-check-label"
                                                                for="inlineRadio2">Others</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            @error('gender')
                                                <span class="text-danger"
                                                    style="margin-left:150px">{{ $message }}</span>
                                            @enderror

                                            <div class="container mb-3">
                                                <div class="row">
                                                    <div class="col-md-6">

                                                        <label for="inputEmail3" class="col-sm-4 col-form-label">
                                                            Specialization</label>
                                                        <div class="col-sm-8">
                                                            <input type="text"style="width:150%"
                                                                onchange='formvalidation()' class="form-control"
                                                                name="specialization" id="specialization"
                                                                placeholder="Your Specialization"
                                                                value={{ old('specialization') }}>
                                                            @error('specialization')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>


                                                    </div>
                                                    <div class="col-md-6">

                                                        <label for="inputEmail3" class="col-sm-4 col-form-label">
                                                            Department</label>
                                                        <div class="col-sm-8">
                                                            <select name="department_id" id="department"
                                                                class="form-control">
                                                                <option value="">Select Department</option>
                                                                @foreach ($departments as $dept)
                                                                    <option value="{{ $dept->id }}">
                                                                        {{ $dept->department_name }}</option>
                                                                @endforeach
                                                            </select>
                                                            @error('department')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group  ml-2">
                                                <label for="inputEmail3" class="col-sm-2 col-form-label">
                                                    Image</label>
                                                <div class="col-sm-4">
                                                    <input type="file" class="form-control  " name="image"
                                                        id="image" onchange="previewFile()">
                                                    @error('image')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <img src="{{ asset('storage/images/avatar.webp') }}" alt="Image preview "
                                                class=" pl-3" id="preview" style="height:150px;" />
                                            <input type="hidden" name="role" value="2">
                                            <input type="hidden" name="status" value="1">
                                            <input type="hidden" id="englishdate" name='english_dob' />
                                        </div>


                                        <div class="card-footer">
                                            <button type="button" onclick="display('educationform',event,'basicinfo')"
                                                disabled id="nextbtn" style="background-color:#696969; color:white"
                                                class="btn btn-default float-right">Next</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Of Basic Detail Form -->

                                <!--EDUCATION FORM-->
                                <div id='educationform' style="display:none;">
                                    <div class="card card-info">
                                        <div class="card-header">
                                            <h3 class="card-title">Add Education Form</h3>
                                        </div>
                                        <!-- /.card-header -->
                                        <!-- form start -->

                                        <div class="card-body" id ="form-container">
                                            <div class="row education-form ">
                                                <div class="col form-group ">
                                                    <div class="form-group">
                                                        <label for="inputEmail3">
                                                            Level</label>

                                                        <select id="level" style="width:95%" class="form-control"
                                                            name="level[]">
                                                            <option value="school">School</option>
                                                            <option value="highschool">High School</option>
                                                            <option value="bachelor" selected>MBBS</option>
                                                            <option value="master">MD</option>
                                                            <option value="phd">PHD</option>
                                                        </select>
                                                        @error('level')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror

                                                    </div>
                                                </div>

                                                <div class="col group-form">
                                                    <div class="form-group">
                                                        <label for="institution">Institution</label>
                                                        <input type="text" class="form-control" id="Institution"
                                                            onchange='eduvalidation()' name="institution[]"
                                                            placeholder=" Institution">
                                                        @error('institution')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col group-form">
                                                    <div class="form-group">
                                                        <label for="board">Board</label>
                                                        <input type="text" class="form-control" id="Board"
                                                            onchange='eduvalidation()' name="board[]"
                                                            placeholder=" Board">
                                                        @error('board')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col group-form">
                                                    <div class="form-group">
                                                        <label for="marks">Marks</label>
                                                        <input type="text" class="form-control" id="Scores"
                                                            onchange='eduvalidation()' name="marks[]"
                                                            placeholder=" Marks Obtained">
                                                        @error('marks')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col group-form">
                                                    <div class="form-group">
                                                        <label for="completion_date">Completion Date</label>
                                                        <input type="text"
                                                            class="form-control education-nepali-datepicker"
                                                            onchange='eduvalidation()' name="completionDate[]"
                                                            placeholder="Completion date">
                                                        @error('completionDate')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>

                                                </div>
                                                <input type="hidden" class="englishDate" name='CompletionDateAD[]' />
                                                <i class="fa fa-minus-circle fa-lg remove-education" aria-hidden="true"
                                                    style="color: red"></i>
                                            </div>

                                        </div>
                                        <div>
                                            <a href="#"
                                                class=" addEducation bg-success rounded-sm float-right p-2 m-3"
                                                id="addEducation">Add More<i class="fa fa-plus pl-1"
                                                    aria-hidden="true"></i></a>
                                        </div>
                                        <div class="card-footer">
                                            <button type="submit" onclick="display('basicinfo',event,'educationform')"
                                                style="background-color: #17a2b8; color:white"
                                                class="btn btn-default float-left">Previous</button>
                                            <button type="submit" disabled
                                                onclick="display('experienceform',event,'educationform')" id="edunextbtn"
                                                style="background-color:#696969; color:white"
                                                class="btn btn-default float-right">Next</button>
                                        </div>
                                        <!-- /.card -->

                                    </div>
                                </div>
                                <!--END OF EDUCATION FORM-->

                                <!--Experience Form-->
                                <div id="experienceform" style="display:none;">
                                    <div class="card card-info">
                                        <div class="card-header">
                                            <h3 class="card-title">Add Experience Form</h3>
                                        </div>

                                        <div class="card-body">

                                            <div class="row experience-form">

                                                <div class="col group-form">
                                                    <div class="form-group ">
                                                        <label for="inputEmail3">
                                                            Organization Name
                                                        </label>
                                                        <input type="text" onchange="expvalidation()"
                                                            class="form-control" name="organization_name[]"
                                                            id="organization_name" placeholder="Organization Name">
                                                    </div>
                                                </div>

                                                <div class="col group-form">
                                                    <div class="form-group ">
                                                        <label for="inputEmail3">Position</label>
                                                        <input type="text" onchange="expvalidation()"
                                                            class="form-control" name="position[]" id="position"
                                                            placeholder="Position">
                                                    </div>
                                                </div>

                                                <div class="col group-form">
                                                    <div class="form-group ">
                                                        <label for="inputEmail3">Start Date</label>
                                                        <input type="text"onchange="expvalidation()"
                                                            class="form-control start-nepali-datepicker"
                                                            name="startDate[]">
                                                    </div>
                                                </div>

                                                <div class="col group-form">
                                                    <div class="form-group ">
                                                        <label for="inputEmail3">End Date</label>
                                                        <input type="text" onchange="expvalidation()"
                                                            class="form-control end-nepali-datepicker" name="endDate[]">
                                                    </div>
                                                </div>
                                                <i class="fa fa-minus-circle fa-lg  remove-experience" aria-hidden="true"
                                                    style="color: red"></i>

                                                <div class="form-group ">
                                                    <label for="inputEmail3" class="col-sm-6 col-form-label">Job
                                                        Description</label>
                                                    <div class="col-sm-6">
                                                        <textarea onchange="expvalidation()" rows="4" cols="100" class="form-control" name="jobDescription[]"
                                                            id="jobDescription" placeholder="Job Description">
                                                    </textarea>
                                                    </div>
                                                </div>
                                                <input type="hidden" class="startenglishDate"
                                                    name='startEnglishDate[]' />
                                                <input type="hidden" class="endenglishDate" name='endEnglishDate[]' />

                                            </div>

                                        </div>
                                        <div>
                                            <a href="#" class="bg-success rounded-sm float-right p-2 m-3"
                                                id="addExperience">Add More<i class="fa fa-plus pl-1"
                                                    aria-hidden="true"></i></a>
                                        </div>
                                        <div class="card-footer">
                                            <button type="submit"
                                                onclick="display('educationform',event,'experienceform')"
                                                style="background-color: #17a2b8; color:white"
                                                class="btn btn-default float-left">Previous </button>
                                            <button type="submit" disabled id ="expNextbtn"
                                                onclick="display('credentialsform',event,'experienceform')"
                                                style="background-color: #696969; color:white"
                                                class="btn btn-default float-right">Next </button>
                                        </div>
                                        <!-- /.card -->
                                    </div>
                                    <!--Experience Form-->
                                </div>

                                <!--Credentials Form-->
                                <div id="credentialsform" style="display:none;">
                                    <div class="card card-info">
                                        <div class="card-header">
                                            <h3 class="card-title">Add Login details</h3>
                                        </div>
                                        <!-- /.card-header -->
                                        <!-- form start -->
                                        <div class="card-body">
                                            <div class="form-group ">
                                                <label for="inputEmail3" onchange="loginvalidation()"
                                                    class="col-sm-3 col-form-label">
                                                    Email</label>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" name="email"
                                                        id="email" placeholder="Email">
                                                </div>

                                            </div>
                                            <div class="form-group ">
                                                <label for="inputEmail3" class="col-sm-3 col-form-label">
                                                    Password</label>
                                                <div class="col-sm-6">
                                                    <input type="password" onchange="loginvalidation()"
                                                        class="form-control" name="password" id="password"
                                                        placeholder="Password">
                                                </div>

                                            </div>
                                            <div class="form-group ">
                                                <label for="inputEmail3" class="col-sm-3 col-form-label">
                                                    Confirm Password</label>
                                                <div class="col-sm-6">
                                                    <input type="password" onchange="loginvalidation()"
                                                        class="form-control" name="password_confirmation" id="password"
                                                        placeholder="Password">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <button type="submit"
                                                onclick="display('experienceform',event,'credentialsform')"
                                                style="background-color: #17a2b8; color:white"
                                                class="btn btn-default float-left">Previous </button>
                                            <button type="submit" disabled id="loginbtn"
                                                onclick="return deleteConfirm('Are you sure to add this doctor')"
                                                style="background-color: #696969; color:white"
                                                class="btn btn-default float-right">Submit</button>
                                        </div>
                                        <!-- /.card -->
                                    </div>
                                    <!--End Of Credentials Form-->
                                </div>
                            </form>
                        </div>

                        <!-- /.card-body -->
                    </div>
                </div>
        </section>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

        <script>
            $(document).ready(function() {
                $('#province').change(function() {
                    var selectedProvince = $(this).val();

                    // Make an AJAX request to get districts for the selected province
                    $.ajax({
                        url: '{{ route('get-districts') }}',
                        method: 'GET',
                        data: {
                            province: selectedProvince
                        },
                        success: function(response) {
                            // Clear existing options
                            $('#district').empty();

                            $('#district').append('<option value="">Select District</option>');

                            // Add new options based on the response
                            $.each(response, function(id, name) {
                                $('#district').append('<option value="' + id + '">' + name +
                                    '</option>');
                            });
                        },
                        error: function(xhr, status, error) {
                            console.error(error);
                        }
                    });
                });
            });
        </script>
    @endsection
