@extends('frontend.app')
@section('content')
    <div class="container">
        <div class="col-sm-6 mb-4">
            <form action="{{ route('searchdoctor') }}" method="POST" role="search">
                @csrf
                <div class="input-group">
                    <select name="department_id">
                        <option value="">Select Department</option>
                        @foreach($departments as $department)
                            <option value="{{ $department->id }}">{{ $department->department_name }}</option>
                        @endforeach
                    </select>
                    <input type="text" class="form-control" name="search" placeholder="Search Doctor"> <span
                        class="input-group-btn">
                        <button type="submit" class="btn btn-default">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                    </span>
                </div>
            </form>
            <div>

            </div>
            

        </div>
        <div class="form-group row">
            <div class="col-sm-4">
            <select name="department_id" id="department" class="form-control">
                <option value="">Select Department</option>
                @foreach($departments as $dept)
                    <option value="{{ $dept->id }}">
                        {{ $dept->department_name }}</option>
                @endforeach
                </select>
                </div>
            <input type="text" class="form-controller" id="search" name="search" placeholder="Doctor Name"/>
            </div>
            <div id="search-results">
                <!-- Results will be displayed here -->
            </div>
        <h2 class="mb-4">Book Appointment according to departments</h2>
        <div class="d-flex flex-wrap mb-4">
            @foreach ($departments as $department)
                <div class="card  rounded-4 w-25  mr-5 text-center" style="background-color: #81c5d2;color:#666666; text-decoration:none">
                    <div class="card-header rounded-border text-muted border-bottom-0 ">
                        <h1 class="lead" style="text-decoration: none">
                            <a style="color:#666666; text-decoration: none"  href="{{ route('booking.show', ['booking' => $department->id]) }}">
                                <h2>{{ $department->department_name }}
                                </h2>
                            </a>
                        </h1>
                    </div>
                    <div class="card-body pt-0">
                        <h4>Available Doctors</h4>
                        <br>
                        <div>
                            <h1>
                                {{ $department->doctor_count }}
                            </h1>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="text-center">
                            <a style="color:#666666; text-decoration: none" href="{{ route('booking.show', ['booking' => $department->id]) }}">
                                <button class="btn btn-info btn-sm mr-2">Proceed <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
                            </a>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function () {
        $('#department, #search').on('change keyup', function () {
            performLiveSearch();
        });

        function performLiveSearch() {
            var departmentId = $('#department').val();
            var searchQuery = $('#search').val();

            $.ajax({
                url: '{{ route("liveSearch.doctors") }}',
                type: 'GET',
                data: {
                    department_id: departmentId,
                    search: searchQuery,
                },
                success: function (data) {
                    $('#search-results').html(data);
                },
            });
        }
    });
</script>
@endsection
