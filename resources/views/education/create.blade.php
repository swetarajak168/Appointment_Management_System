@extends('layout.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
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

                            <form role="form" method="post" action="{{ route('education.store') }}">
                                @csrf
                                <!-- Horizontal Form -->
                                <div class="card card-info">
                                    <div class="card-header">
                                        <h3 class="card-title">Add Education Form</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    {{-- {{$errors}} --}}
                                    <div class="card-body">

                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-3 col-form-label">
                                                Level</label>
                                            <div class="col-sm-2">
                                                <select id="level" class="form-control" name="level">
                                                    <option value="school">School</option>
                                                    <option value="highschool">High School</option>
                                                    <option value="bachelor" selected>MBBS</option>
                                                    <option value="master">MD</option>
                                                    <option value="phd">PHD</option>
                                                </select>
                                            </div>

                                        </div>

                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-3 col-form-label">
                                                Institution</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" name="Institution"
                                                    id="Institution" placeholder="Institution">
                                            </div>

                                        </div>

                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-3 col-form-label">Completion Date</label>
                                            <div class="col-sm-4">
                                                <input type="date" class="form-control" name="Completion Date"
                                                    id="Completion Date" placeholder="Completion Date">
                                            </div>

                                        </div>

                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-3 col-form-label">Board</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" name="Board" id="Board"
                                                    placeholder="Board">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-3 col-form-label">Scores</label>
                                            <div class="col-sm-4">
                                                <input type="number" class="form-control" name="Scores" id="Scores"
                                                    placeholder="Scores">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="card-footer">
                                        <button type="submit" style="background-color: #17a2b8; color:white"
                                            class="btn btn-default float-right">Add Education</button>
                                    </div>
                                    <!-- /.card -->
                            </form>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
    </div>
    <!-- /.card-body -->
@endsection
