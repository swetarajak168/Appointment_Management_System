@extends('layout.app')
@inject('province_helper', 'App\Helpers\ProvinceHelper')
@inject('department_helper', 'App\Helpers\DepartmentHelper')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-lg-12 ">
                        <!-- general form elements -->
                        <div class=" card-primary">
                            <!-- /.card-header -->
                            <!-- form start -->
                            
                            <form role="form" method="post" action="{{ route('doctor.update',$doctor) }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <!-- Basic Detail Form -->
                                <div id="basicinfo">
                                    <div class="card card-info">
                                        <div class="card-header">
                                            <h3 class="card-title">Update Doctor </h3>
                                        </div>
                                        <!-- /.card-header -->
                                        <!-- form start -->
                                        <div class="card-body">
                                            <div class="form-group  ml-2">
                                                <label for="inputEmail3" class="col-sm-2 col-form-label">
                                                    License No.</label>

                                                <div class="col-md-4">
                                                    <input type="number" style="width:150%" onchange='formvalidation()'
                                                        class="form-control" name="license_no" id="license_no" 
                                                        placeholder="License No." value= {{ old('license_no') }}>
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
                                                                value={{ old('fname', $doctor->fname) }}>
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
                                                                value={{ old('lname', $doctor->lname) }}>
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
                                                                value={{ old('contact',$doctor->contact) }}>
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
                                                            {!! Form::select('province', $province_helper->ProvinceList(),  old('province', $doctor->province), [
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
                                                    </div>
                                                   
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
                                                                value={{ old('municipality' ,$doctor->municipality) }}>
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
                                                                name="ward" id="ward" value={{ old('ward', $doctor->ward) }}>
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
                                                                value={{ old('tole', $doctor->tole) }}>
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
                                                                class="form-control" placeholder="Select Birth Date"
                                                                name='dob' value="{{ old('dob',$doctor->dob) }}"/>
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
                                                                {{ $doctor->gender == 'male' ? 'checked' : '' }}>
                                                            <label class="form-check-label "
                                                                for="inlineRadio1">Male</label>
                                                        </div>
                                                    </div>


                                                    <div class="form-check form-check-inline">
                                                        <div class="ml-5 flex">
                                                            <input class="form-check-input mt-1"
                                                                onchange='formvalidation()' type="radio" name="gender"
                                                                id="inlineRadio2" value="female"
                                                                {{ $doctor->gender == 'female' ? 'checked' : '' }}>
                                                            <label class="form-check-label"
                                                                for="inlineRadio2">Female</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <div class="ml-5 flex">
                                                            <input class="form-check-input mt-1" type="radio"
                                                                name="gender" id="inlineRadio2" value="others"
                                                                {{ $doctor->gender == 'others' ? 'checked' : '' }}>
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
                                                                value={{ old('specialization',$doctor->specialization) }}>
                                                            @error('specialization')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>

                                                    </div>
                                                    {{-- <div class="col-md-6">
                                                        
                                                        <label for="inputEmail3" class="col-sm-4 col-form-label">
                                                            Department</label>
                                                        <div class="col-sm-8">
                                                            <select name="department_id" id="department" class="form-control" >
                                                               
                                                                @foreach($departments as $dept)
                                                                
                                                                    <option value="{{ $dept->id }}"     {{ $doctor->department->deptartment_name === $dept->department_name ? 'selected' : '' }} >
                                                                        {{ $dept->department_name }}</option>
                                                                @endforeach
                                                            </select>
                                                            @error('department')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>

                                                    </div> --}}
                                                    <div class="col-md-6">
                                                        {!! Form::label('department_id', 'Department', ['class' => 'col-sm-4 col-form-label']) !!}
                                                        <div class="col-sm-8">
                                                            {!! Form::select('department_id', $department_helper->departmentList(), $doctor->department->id, ['class' => 'form-control', 'id' => 'department']) !!}
                                                            @error('department_id')
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
                                           
                                            <img src="{{ asset($doctor->image) }}" alt="Image preview" class=" pl-3" id="preview" />
                                            <input type="hidden" name="role" value="2">
                                            <input type="hidden" name="status" value="1">
                                            <input type="hidden" id="englishdate" name='english_dob' />
                                        </div>


                                        <div class="card-footer">
                                            <button type="button" onclick="display('educationform',event,'basicinfo')"
                                                  style="background-color:#17a2b8; color:white"
                                                class="btn btn-default float-right">Next</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Of Basic Detail Form -->

                          

                                <div id='educationform' style="display:none;">
                                    <div class="card card-info">
                                        <div class="card-header">
                                            <h3 class="card-title">Add Education Form</h3>
                                        </div>
                                        <!-- /.card-header -->
                                        <!-- form start -->
                                        <div class="card-body" id ="form-container">
                                        @foreach($doctor->education as $education)
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
                                                            placeholder=" Institution" value={{$education->institution}}>
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
                                                            placeholder=" Board" value={{  $education->board }}>
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
                                                            placeholder=" Marks Obtained" value={{  $education->marks }}>
                                                        @error('marks')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col group-form">
                                                    <div class="form-group">
                                                        <label for="completion_date">Completion Date</label>
                                                        <input type="text" class="form-control education-nepali-datepicker" 
                                                            onchange='eduvalidation()' name="completionDate[]"
                                                            placeholder="Completion date" value={{ $education->completionDate }}>
                                                        @error('completionDate')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                    
                                                </div>
                                                <input type="hidden" class="englishDate" name='CompletionDateAD[]' value={{ $education->CompletionDateAD }} />
                                                <i class="fa fa-minus-circle fa-lg remove-education"  aria-hidden="true" style="color: red"></i>

                                            </div>

                                            @endforeach
                                        </div>
                                        <div>
                                            <a href="#" class=" addEducation bg-success rounded-sm float-right p-2 m-3"
                                                id="addEducation">Add More<i class="fa fa-plus pl-1"
                                                    aria-hidden="true"></i></a>
                                        </div>
                                        <div class="card-footer">
                                            <button type="submit" onclick="display('basicinfo',event,'educationform')"
                                                style="background-color: #17a2b8; color:white"
                                                class="btn btn-default float-left">Previous</button>
                                            <button type="submit" 
                                                onclick="display('experienceform',event,'educationform')" id="edunextbtn"
                                                style="background-color: #17a2b8; color:white"
                                                class="btn btn-default float-right">Next</button>
                                        </div>
                                        <!-- /.card -->

                                    </div>
                                </div>
                                <!--END OF EDUCATION FORM-->

                                <div id="experienceform" style="display:none;">
                                    <div class="card card-info">
                                        <div class="card-header">
                                            <h3 class="card-title">Add Experience Form</h3>
                                        </div>
                                        
                                        <div class="card-body">
                                            @foreach($doctor->experience as $experience)
                                            <div class="row experience-form">
                                               
                                                <div class="col group-form">
                                                    <div class="form-group ">
                                                        <label for="inputEmail3">
                                                            Organization Name
                                                        </label>
                                                        <input type="text" onchange="expvalidation()"
                                                            class="form-control" name="organization_name[]"
                                                            id="organization_name" placeholder="Organization Name" value={{ $experience->organization_name }}>
                                                    </div>
                                                </div>

                                                <div class="col group-form">
                                                    <div class="form-group ">
                                                        <label for="inputEmail3">Position</label>
                                                        <input type="text" onchange="expvalidation()"
                                                            class="form-control" name="position[]" id="position"
                                                            placeholder="Position" value={{ $experience->position }}>
                                                    </div>
                                                </div>

                                                <div class="col group-form">
                                                    <div class="form-group ">
                                                        <label for="inputEmail3">Start Date</label>
                                                        <input type="text"onchange="expvalidation()" 
                                                            class="form-control start-nepali-datepicker" name="startDate[]" value={{ $experience->startDate }} >
                                                    </div>
                                                </div>

                                                <div class="col group-form">
                                                    <div class="form-group ">
                                                        <label for="inputEmail3">End Date</label>
                                                        <input type="text" onchange="expvalidation()" 
                                                            class="form-control end-nepali-datepicker" name="endDate[]" value={{ $experience->endDate }} >
                                                    </div>
                                                </div>
                                                <i class="fa fa-minus-circle fa-lg  remove-experience" aria-hidden="true" style="color: red"></i>

                                                <div class="form-group ">
                                                    <label for="inputEmail3" class="col-sm-6 col-form-label">Job
                                                        Description</label>
                                                    <div class="col-sm-8">
                                                        <textarea onchange="expvalidation()" rows="4" cols="100" class="form-control" name="jobDescription[]"
                                                            id="jobDescription" placeholder="Job Description" value={{ $experience->jobDescription }}>
                                                    </textarea>
                                                    </div>
                                                </div>
                                                <input type="hidden" class="startenglishDate" name='startEnglishDate[]'/>
                                                <input type="hidden" class="endenglishDate" name='endEnglishDate[]'/>

                                            </div>
                                            @endforeach
                                        
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
                                            <button type="submit"  id ="expNextbtn"
                                                onclick="display('credentialsform',event,'experienceform')"
                                                style="background-color: #17a2b8; color:white"
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
                                        {{-- {{$errors}} --}}
                                        <div class="card-body">
                                            <div class="form-group ">
                                                <label for="inputEmail3" onchange="loginvalidation()"
                                                    class="col-sm-3 col-form-label">
                                                    Email</label>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" name="email"
                                                        id="email" value="{{ $doctor->email }}">
                                                </div>

                                            </div>
                                           
                                           
                                        </div>
                                        <div class="card-footer">
                                            <button type="submit"
                                                onclick="display('experienceform',event,'credentialsform')"
                                                style="background-color: #17a2b8; color:white"
                                                class="btn btn-default float-left">Previous </button>
                                            <button type="submit"  id="loginbtn"
                                                style="background-color: #17a2b8; color:white"
                                                class="btn btn-default float-right">Update Doctor</button>
                                        </div>
                                        <!-- /.card -->
                                    </div>
                                </div>
                                    <!--End Of Credentials Form-->
                            </form>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </section>
    </div>
    <!-- /.card-body -->
@endsection
