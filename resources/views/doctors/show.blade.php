@extends('layout.app');
@section('content')
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-10 ml-5">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                User Information
                            </div>
                            <div class="card-body">
                                
                                <p class="card-text">
                                    <strong>license_no:</strong> {{ $doctor->license_no }}<br>
                                    <strong>First Name:</strong> {{ $doctor->fname }}<br>
                                    <strong>Last Name:</strong> {{ $doctor->lname }}<br>
                                    <strong>Email:</strong> {{ $doctor->email }}<br>
                                    <strong>Contact:</strong> {{ $doctor->Contact }}<br>
                                    <strong>Province:</strong> {{ $doctor->Province }}<br>
                                    <strong>District:</strong> {{ $doctor->District }}<br>
                                    <strong>Municipality:</strong> {{ $doctor->Municipality }}<br>
                                    <strong>Ward:</strong> {{ $doctor->Ward }}<br>
                                    <strong>Tole:</strong> {{ $doctor->tole }}<br>
                                    <strong>gender:</strong> {{ $doctor->gender }}<br>
                                    <strong>Specialization:</strong> {{ $doctor->specialization }}<br>
                                    <strong>Department:</strong> {{ $doctor->Department }}<br>
                                    
                                   
                                    <br>
                                    <!-- Add more user attributes as needed -->
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
