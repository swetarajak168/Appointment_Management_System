@extends('layout.app')
@section('content')

<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-10 ml-5">
                    <!-- general form elements -->
                    <div class=" card-primary">
                        <!-- /.card-header -->
                        <!-- form start -->

                        <form role="form" method="post" action="{{ route('department.update',['department' => $department]) }} " id="userform">
                            @csrf
                            @method('PUT')
                            <!-- Horizontal Form -->
                            <div class="card card-info">
                                <div class="card-header">
                                    <h3 class="card-title">Add Department Form</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                {{-- {{$errors}} --}}
                                <div class="card-body">
                                    
                                    <div class="form-group ">
                                        <label for="inputEmail3" class="col-sm-3 col-form-label">
                                           Department Name<span class="text-danger">*</span></label><br>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="department_name" id="name"
                                                placeholder="Enter Department Name" value={{ $department->department_name }}>
                                        </div>

                                    </div>
                                    @error('name')
                                        <span class="text-danger " style="padding-left:100px; margin-left:100px;">{{ $message }}</span>
                                    @enderror                                   
                            </div>

                            <div class="card-footer">
                                <button type="submit" style="background-color: #17a2b8; color:white"
                                    class="btn btn-default float-right">Update </button>
                            </div>
                            <!-- /.card -->
                        </form>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
</div>
@endsection