@extends('frontend.app')

@section('content')
    @foreach ($doctors as $doctor)
        <div class="row ">
            <div class="col-md-4">

                <div class="card" >
                    <div class="card-header  border-bottom-0" style="background-color: #6495ED">
                        <h2 >
                            {{ $doctor->fname . '' . $doctor->lname }}
                        </h2>
                    </div>
                    <div class="card-body pt-0">
                        @if ($doctor->image)
                            <img class="profile-user-img img-fluid img-circle" src="{{ asset($doctor->image) }}"
                                alt="profile">
                        @endif
                        <br>
                        <div class="text-center">
                            License No: {{ $doctor->license_no }}
                        </div>
                        <br>

                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-lg"
                            data-doctor="{{ $doctor }}">
                            Proceed to Book
                        </button>
                    </div>

                </div>
            </div>


            <div class="col h-100">
                <div class="card bg-light ">
                    <table class="table">
                        <thead style="background-color: #6495ED">
                            <tr>
                                <th>Date</th>
                                <th>Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($doctor->schedule->groupBy('nepali_date') as $date => $schedulesByDate)
                                <tr>
                                    <td> {{ $date }}</td>                              
                               
                                    <td>
                                        @foreach ($schedulesByDate as $index => $key)
                                            {{ $key->start_time . ' - ' . $key->end_time }}
                                            <br>
                                        @endforeach
                                    </td>
                                </tr>
                                <div hidden>

                                    {{ $rowspan = count($schedulesByDate) }}
                                </div>
                            @endforeach
                        </tbody>
                    </table>
                    {{-- <div class="d-flex justify-content-around ">
                        
                        <div>
                            <p>Available Time</p>
                        </div>
                        
                    </div> --}}
                </div>
            </div>

        </div>
        </div>
    @endforeach
    @foreach ($doctors as $doctor)
        <div class="modal fade" id="modal-lg">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Book Your appointment</h4>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form role="form" method="post" action="" id="patientform">
                            @csrf
                            <div class="form-group">
                                <div class="row col-md-8 ">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">
                                        Name<span class="text-danger"></span></label><br>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control " name="pname" id="patient_name"
                                            placeholder="Enter Your Name">
                                    </div>
                                </div>

                            </div>

                            <div class="form-group">
                                <div class="row col-md-8">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">
                                        Address<span class="text-danger"></span></label><br>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control " name="address" id="patient_address"
                                            placeholder=" Address..">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group d-flex">
                                <div class="row col-md-8 ">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">
                                        Email<span class="text-danger"></span></label><br>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control " name="email" id="patient_email"
                                            placeholder="Email..">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row col-md-8">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">
                                        Contact<span class="text-danger"></span></label><br>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control " name="contact" id="patient_contact"
                                            placeholder=" Contact..">
                                    </div>
                                </div>

                            </div>

                            <div class="form-group d-flex">
                                <div class="row col-md-8 ">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">
                                        Date of Birth<span class="text-danger"></span></label><br>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control nepali-datepicker " name="date_of_birth"
                                            id="modal-nepali-datepicker" placeholder="Date Of Birth..">
                                    </div>
                                </div>

                            </div>
                            <div class="form-group d-flex">
                                <div class="row col-md-8">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">
                                        Gender<span class="text-danger"></span></label><br>
                                    <div class="col-lg-6">


                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input mt-1 ml-2" type="radio" name="gender"
                                                id="inlineRadio1" value="1">
                                            <label class="form-check-label" for="inlineRadio1">Male</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input mt-1 ml-1" type="radio" name="gender"
                                                id="inlineRadio2" value="2" @checked(true)>
                                            <label class="form-check-label" for="inlineRadio2">Female</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input mt-1 ml-1" type="radio" name="gender"
                                                id="inlineRadio2" value="2" @checked(true)>
                                            <label class="form-check-label" for="inlineRadio2">Other</label>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <div class="frm-group">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">
                                    Select Date and Time<span class="text-danger"></span></label><br>
                                <div class="col-lg-6">
                                    <select name="schedule" id="schedule" class="form-control">
                                        <option value="">Select Time</option>

                                        @foreach ($doctor->schedule as $sch)
                                            <option value=" {{ $sch->start_time . '-' . $sch->end_time }}">
                                                {{ $sch->start_time . '-' . $sch->end_time . ' (' . $sch->nepali_date . ')' }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                        </form>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Book Now</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
    @endforeach
@endsection
