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
                    <table class="table  table-hover table-bordered">
                        <tr>
                            <td><label for="">Image</label></td>
                            <td>
                                <img src="{{ asset($doctor->image) }}" alt="" width="100px" height="10">
                            </td>
                        </tr>
                        <tr>
                            <td><label for="">License No</label></td>
                            <td>{{ $doctor->license_no }}</td>
                        </tr>
                        <tr>
                            <td><label for="">First Name</label></td>
                            <td>{{ $doctor->fname }}</td>
                        </tr>

                        <tr>
                            <td><label for="Last Name">Last Name</label></td>
                            <td>{{ $doctor->lname }}</td>
                        </tr>
                        <tr>
                            <td><label for="Email">Email</label></td>
                            <td>{{ $doctor->email }}</td>
                        </tr>
                        <tr>
                            <td><label for="Contact">Contact</label></td>
                            <td>{{ $doctor->Contact }}</td>
                        </tr>
                        <tr>
                            <td><label for="Province">Province</label></td>
                            <td>{{ $doctor->Province }}</td>
                        </tr>
                        <tr>
                            <td><label for="District">District</label></td>
                            <td>{{ $doctor->District }}</td>
                        </tr>
                        <tr>
                            <td><label for="Municipality">Municipality</label></td>
                            <td>{{ $doctor->Municipality }}</td>
                        </tr>
                        <tr>
                            <td><label for="Ward">Ward</label></td>
                            <td>{{ $doctor->Ward }}</td>
                        </tr>
                        <tr>
                            <td><label for="Contact">Contact</label></td>
                            <td>{{ $doctor->Contact }}</td>
                        </tr>
                        <tr>
                            <td><label for="tole">tole</label></td>
                            <td>{{ $doctor->tole }}</td>
                        </tr>
                        <tr>
                            <td><label for="gender">Gender</label></td>
                            <td>{{ $doctor->gender }}</td>
                        </tr>
                        <tr>
                            <td><label for="dob">dob</label></td>
                            <td>{{ $doctor->dob }}</td>
                        </tr>
                        <tr>
                            <td><label for="english_dob">english_dob</label></td>
                            <td>{{ $doctor->english_dob }}</td>
                        </tr>
                        <tr>
                            <td><label for="specialization">specialization</label></td>
                            <td>{{ $doctor->specialization }}</td>
                        </tr>

                        <tr>
                            <td><label for="Department">Department</label></td>
                            <td>{{ $doctor->Department }}</td>
                        </tr>
                    </table>
                </div>

            </div>
        </div>
        </section>
    </div>
@endsection
