@extends('layout.app')
@section('content')
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1>Add Doctors</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active">General Form</li>
                                </ol>
                            </div>
                        </div>
                    </div><!-- /.container-fluid -->
                </section>

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
                                    <form role="form">
                                        @csrf
                                        <!-- Horizontal Form -->
                                        <div class="card card-info">
                                            <div class="card-header">
                                                <h3 class="card-title">Add Doctors</h3>
                                            </div>
                                            <!-- /.card-header -->
                                            <!-- form start -->
                                            <form class="form-horizontal col-lg-6">
                                                <div class="card-body">
                                                    <div class="form-group row">
                                                        <label for="inputEmail3" class="col-sm-2 col-form-label">License
                                                            No.</label>
                                                        <div class="col-sm-10">
                                                            <input type="number" class="form-control" id="inputEmail3"
                                                                placeholder="Email">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputEmail3" class="col-sm-2 col-form-label"> First
                                                            Name</label>
                                                        <div class="col-sm-4">
                                                            <input type="text" class="form-control" id="inputEmail3"
                                                                placeholder="First Name">
                                                        </div>
                                                        <label for="inputEmail3" class="col-sm-2 col-form-label"> Last
                                                            Name</label>
                                                        <div class="col-sm-4">
                                                            <input type="text" class="form-control" id="inputEmail3"
                                                                placeholder="Last Name">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                    </div>

                                                    <div class="form-group row">
                                                        <label for="inputEmail3"
                                                            class="col-sm-2 col-form-label">Contact</label>
                                                        <div class="col-sm-10">
                                                            <input type="nuber" class="form-control" id="inputEmail3"
                                                                placeholder="Contact">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputEmail3"
                                                            class="col-sm-2 col-form-label">Department</label>
                                                        <div class="col-sm-10">
                                                            <input type="nuber" class="form-control" id="inputEmail3"
                                                                placeholder="Department">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <!-- radio -->
                                                        <div class="form-group">
                                                            <label class="col-sm-4 col-form-label"
                                                                for="exampleInputEmail1">Gender</label>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input mt-1" type="radio"
                                                                    name="inlineRadioOptions" id="inlineRadio1"
                                                                    value="option1">
                                                                <label class="form-check-label"
                                                                    for="inlineRadio1">Male</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input mt-1" type="radio"
                                                                    name="inlineRadioOptions" id="inlineRadio2"
                                                                    value="option2">
                                                                <label class="form-check-label"
                                                                    for="inlineRadio2">Female</label>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label for="inputEmail3"
                                                            class="col-sm-2 col-form-label">Specialization</label>
                                                        <div class="col-sm-10">
                                                            <input type="nuber" class="form-control" id="inputEmail3"
                                                                placeholder="Specialization">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="exampleInputFile">Upload Image</label>
                                                        <div class="input-group">
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input"
                                                                    id="exampleInputFile">
                                                                <label class="custom-file-label"
                                                                    for="exampleInputFile">Choose file</label>
                                                            </div>
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">Upload</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-info">
                                        <a href="{{url('/dashboard/educationdetail')}}">Next</a> </button>
                                    <button type="submit" class="btn btn-default float-right">Cancel</button>
                                </div>
                                <!-- /.card-footer -->
                                </form>
                            </div>
                            <!-- /.card -->


                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    </form>
            </div>
            <!-- /.card-body -->
        
        @endsection
        