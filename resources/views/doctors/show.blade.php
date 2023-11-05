@extends('layout.app');
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h4>Doctor Profile</h4>
                </div>
                <div class="card-body">
                    {{-- {{ dd($doctor)  }}; --}}
                    <div class="col-md-9">
                      {{-- {{ dd($doctor->education) }} --}}
                        
                          <ul class="nav nav-pills">
                            <li class="nav-item"><a class="nav-link active" href="#activity"  id = "detail" data-toggle="tab">Basic Information</a></li>
                            
                          </ul>
                         <div id="doctor-detail" style="display:block">
                        <div class="text-center mt-3" >
                            <img class="profile-user-img img-fluid img-circle"
                                 src="{{ asset($doctor->image) }}"
                                 alt="User profile picture">
                          </div>
                          
                          <h3 class="profile-username text-center mb-4">{{ $doctor->fname  }}</h3>
                          <ul class="list-group list-group-bordered m-3 " style="margin-left:150px;">
                            <li class="list-group-item">
                              <b>License No</b> <a class="float-right">{{ $doctor->license_no }}</a>
                            </li>
                           
                            <li class="list-group-item">
                              <b> Name</b> <a class="float-right">{{ $doctor->fname . ''. $doctor->lname }}</a>
                            </li>
                            
                           
                            <li class="list-group-item">
                                <b>Contact</b> <a class="float-right">{{ $doctor->contact }}</a>
                              </li>
                              <li class="list-group-item">
                                <b>Province</b> <a class="float-right">{{ $doctor->province }}</a>
                              </li>
                              <li class="list-group-item">
                                <b>District</b> <a class="float-right">{{ $doctor->district }}</a>
                              </li>
                             
                              <li class="list-group-item">
                                <b>Municipality</b> <a class="float-right">{{ $doctor->municipality }}</a>
                              </li>
                              <li class="list-group-item">
                                <b>Ward</b> <a class="float-right">{{ $doctor->ward }}</a>
                              </li>
                              <li class="list-group-item">
                                <b>Tole</b> <a class="float-right">{{ $doctor->tole }}</a>
                              </li>
                              <li class="list-group-item">
                                <b>Gender</b> <a class="float-right">{{ $doctor->gender }}</a>
                              </li>
                              <li class="list-group-item">
                                <b>Date Of Birth</b> <a class="float-right">{{ $doctor->dob }}</a>
                              </li>
                              <li class="list-group-item">
                                <b>Specialzation</b> <a class="float-right">{{ $doctor->specialization  }}</a>
                              </li>
                              <li class="list-group-item">
                                <b>Department</b> <a class="float-right">{{ $doctor->department }}</a>
                              </li>
        
                          </ul>
                        </div>
                         
                     {{-- {{ dd($doctor->education) }} --}}
                      <!-- /.nav-tabs-custom -->
                    {{-- {{ dd(count($doctor->education)) }} --}}
                    <ul class="nav nav-pills">
                     
                      <li class="nav-item"><a class="nav-link active" href="#timeline" data-toggle="tab">Education</a></li>
                      
                    </ul>
                      <div id="education-detail" >
                        @foreach($doctor->education as $education)
                        <ul class="list-group list-group-bordered m-3 " style="margin-left:150px;">
                          <li class="list-group-item">
                            <b>Level</b> <a class="float-right">{{ $education->level}}</a>
                          </li>
                         
                          <li class="list-group-item">
                            <b>Institution</b> <a class="float-right">{{ $education->institution }}</a>
                          </li>
                          
                          <li class="list-group-item">
                            <b>Completion Date</b> <a class="float-right">{{ $education->completionDate }}</a>
                          </li>
                          <li class="list-group-item">
                              <b>Board</b> <a class="float-right">{{ $education->board }}</a>
                            </li>
                            <li class="list-group-item">
                              <b>Scores</b> <a class="float-right">{{ $education->marks }}</a>
                            </li>                          
                        </ul>
                        @endforeach
                      </div>
                    

                      <ul class="nav nav-pills">
                     
                        <li class="nav-item"><a class="nav-link active" href="#timeline" data-toggle="tab">Experience</a></li>
                        
                      </ul>
                      <div id="experience-detail" >
                        @foreach($doctor->experience as $experience)
                        <ul class="list-group list-group-bordered m-3 " style="margin-left:150px;">
                          <li class="list-group-item">
                            <b>Organization Name</b> <a class="float-right">{{ $experience->organization_name }}</a>
                          </li>
                         
                          <li class="list-group-item">
                            <b>Position</b> <a class="float-right">{{ $experience->position }}</a>
                          </li>
                          
                          <li class="list-group-item">
                            <b>Start Date</b> <a class="float-right">{{ $experience->startDate }}</a>
                          </li>
                          <li class="list-group-item">
                              <b>End Date</b> <a class="float-right">{{ $experience->endDate }}</a>
                            </li>
                            <li class="list-group-item">
                              <b>Job Description</b> <a class="float-right">{{ $experience->jobDescription }}</a>
                            </li>                          
                        </ul>
                        @endforeach
                      </div>
                      
                    </div>
                </div>

            </div>
        </div>
        </section>
        <!-- Main content -->
      </div>
    
@endsection
