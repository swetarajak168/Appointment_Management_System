@extends('frontend.app')

@section('content')
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>

    <h4 class="text-center">Click On time to book your appointment</h4>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @foreach ($scheduled_doctor as $doctor)
        <div class="row ">
            <div class="col-md-4">
                <div class="card" style="background-color: #81c5d2">
                    <div class="card-header  border-bottom-0">
                        <h2>
                            {{ $doctor->fname . ' ' . $doctor->lname }}
                        </h2>
                    </div>
                    <div class="card-body pt-0 text-center">
                        @if ($doctor->image)
                            <img class="profile-user-img img-fluid img-circle" src="{{ asset($doctor->image) }}"
                                alt="profile">
                        @else
                            <img class="profile-user-img img-fluid img-circle"
                                src="{{ asset('storage/images/avatar.webp') }}" alt="profile">
                        @endif

                        <br>
                        <div class="text-center">
                            License No: {{ $doctor->license_no }}
                            <br>
                            Specialization:{{ $doctor->specialization }}
                        </div>
                        <br>
                    </div>
                </div>
            </div>


            <div class="col h-100">
                <div class="card bg-light ">

                    <table class="table">
                        <thead style="background-color: #d8edf1">
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
                                        @forelse ($schedulesByDate as $key)
                                            @if ($key->status != 'approved')
                                                <button type="button" class="btn btn-info" data-toggle="modal"
                                                    data-target="#modal-lg{{ $key->id }}">
                                                    {{ $key->start_time . ' - ' . $key->end_time }}
                                                </button>
                                            @endif


                                            <div class="modal fade" id="modal-lg{{ $key->id }}">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header"
                                                            style="background-color: #17a2b8;color:white">
                                                            <h4 class="modal-title text-center">Book Your
                                                                appointment</h4>

                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>


                                                        <div class="modal-body">
                                                            <form role="form" method="post"
                                                                action="{{ route('patient.store') }}" id="patientform">
                                                                @csrf
                                                                <div class="form-group">
                                                                    <div class="row col-md-8 ">
                                                                        <label for="inputEmail3"
                                                                            class="col-sm-3 col-form-label">
                                                                            Name<span
                                                                                class="text-danger"></span></label><br>
                                                                        <div class="col-lg-6">
                                                                            <input type="text" class="form-control "
                                                                                name="name" id="patient_name"
                                                                                placeholder="Enter Your Name">
                                                                        </div>
                                                                    </div>

                                                                </div>

                                                                <div class="form-group">
                                                                    <div class="row col-md-8">
                                                                        <label for="inputEmail3"
                                                                            class="col-sm-3 col-form-label">
                                                                            Address<span
                                                                                class="text-danger"></span></label><br>
                                                                        <div class="col-lg-6">
                                                                            <input type="text" class="form-control "
                                                                                name="address" id="patient_address"
                                                                                placeholder=" Address..">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group d-flex">
                                                                    <div class="row col-md-8 ">
                                                                        <label for="inputEmail3"
                                                                            class="col-sm-3 col-form-label">
                                                                            Email<span
                                                                                class="text-danger"></span></label><br>
                                                                        <div class="col-lg-6">
                                                                            <input type="text" class="form-control "
                                                                                name="email" id="patient_email"
                                                                                placeholder="Email..">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="row col-md-8">
                                                                        <label for="inputEmail3"
                                                                            class="col-sm-3 col-form-label">
                                                                            Contact<span
                                                                                class="text-danger"></span></label><br>
                                                                        <div class="col-lg-6">
                                                                            <input type="text" class="form-control "
                                                                                name="contact" id="patient_contact"
                                                                                placeholder=" Contact..">
                                                                        </div>
                                                                    </div>

                                                                </div>

                                                                <div class="form-group d-flex">
                                                                    <div class="row col-md-8 ">
                                                                        <label for="inputEmail3"
                                                                            class="col-sm-3 col-form-label">
                                                                            Date of Birth<span
                                                                                class="text-danger"></span></label><br>
                                                                        <div class="col-sm-6">
                                                                            <input type="text"
                                                                                class="form-control nepali-datepicker "
                                                                                name="date_of_birth"
                                                                                id="modal-nepali-datepicker{{ $key->id }}"
                                                                                placeholder="Date Of Birth..">
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <input type="hidden" name="date_of_birth_ad"
                                                                    id="date_of_birth_ad{{ $key->id }}">
                                                                <div class="form-group d-flex">
                                                                    <div class="row col-md-8">
                                                                        <label for="inputEmail3"
                                                                            class="col-sm-3 col-form-label">
                                                                            Gender<span
                                                                                class="text-danger"></span></label><br>
                                                                        <div class="col-lg-6">


                                                                            <div class="form-check form-check-inline">
                                                                                <input class="form-check-input mt-1 ml-2"
                                                                                    type="radio" name="gender"
                                                                                    id="inlineRadio1" value="1">
                                                                                <label class="form-check-label"
                                                                                    for="inlineRadio1">Male</label>
                                                                            </div>
                                                                            <div class="form-check form-check-inline">
                                                                                <input class="form-check-input mt-1 ml-1"
                                                                                    type="radio" name="gender"
                                                                                    id="inlineRadio2" value="2"
                                                                                    @checked(true)>
                                                                                <label class="form-check-label"
                                                                                    for="inlineRadio2">Female</label>
                                                                            </div>
                                                                            <div class="form-check form-check-inline">
                                                                                <input class="form-check-input mt-1 ml-1"
                                                                                    type="radio" name="gender"
                                                                                    id="inlineRadio2" value="2"
                                                                                    @checked(true)>
                                                                                <label class="form-check-label"
                                                                                    for="inlineRadio2">Other</label>
                                                                            </div>


                                                                        </div>
                                                                    </div>
                                                                </div>


                                                                <div class="frm-group">
                                                                    <div class="row col-md-8">
                                                                        <label for="inputEmail3"
                                                                            class="col-sm-3 col-form-label">
                                                                            Remarks<span
                                                                                class="text-danger"></span></label><br>
                                                                        <div class="col-lg-6">

                                                                            <textarea rows="4" cols="50" name="remarks" id="patient_remarks">
                                                                                    </textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <input type="hidden" name="doctor_id"
                                                                    value="{{ $key->doctor->id }}">
                                                                <input type="hidden" name="schedule_id"
                                                                    value="{{ $key->id }}">
                                                                <input type="hidden" name="book_date_bs"
                                                                    value="{{ $key->nepali_date }}">
                                                                <input type="hidden" name="book_date_ad"
                                                                    value="{{ $key->english_date }}">
                                                                <input type="hidden" name="start_time"
                                                                    value="{{ $key->start_time }}">
                                                                <input type="hidden" name="end_time"
                                                                    value="{{ $key->end_time }}">
                                                                <input type="hidden" name="status" value="pending">

                                                        </div>
                                                        <div class="modal-footer justify-content-between">
                                                            <button type="button" class="btn btn-default"
                                                                data-dismiss="modal">Close</button>
                                                            <button type="submit"
                                                                class="btn btn"style="background-color:#17a2b8;color:white">Book
                                                                Now</button>
                                                        </div>
                                                        </form>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>

                                            <script>
                                                $(document).ready(function() {
                                                    //   Initialize Nepali Date Picker
                                                    var date = {{ $key->id }};

                                                    // Initialize Nepali Date Picker for Modal
                                                    $("#modal-nepali-datepicker" + date).nepaliDatePicker({
                                                        container: "#modal-lg" + date,
                                                    });

                                                    function datechange() {
                                                        var bsDate = document.getElementById("modal-nepali-datepicker" + date).value;
                                                        var englishdate = document.getElementById("date_of_birth_ad" + date);
                                                        var adDate = NepaliFunctions.BS2AD(bsDate)
                                                        englishdate.value = adDate
                                                    }
                                                    setInterval(() => {
                                                        datechange();

                                                    }, 30);
                                                });
                                            </script>
                                        @empty
                                            <p>No time available</p>
                                        @endforelse
                                    </td>

                                </tr>

                                <div hidden>

                                    {{ $rowspan = count($schedulesByDate) }}
                                </div>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>

        </div>
        {{-- </div> --}}
    @endforeach
@endsection
