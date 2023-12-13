@extends('layout.app')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="row">
                            <div class="col-12">

                                <div class="card">
                                    <div class="card-header">
                                        <h1 class="card-title w-30">Patient Detail</h1>
                                        <div class="card-tools">
                                           
                                        </div>
                                    </div>
                                </div>

                                <!-- /.card-header -->
                                @if (session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                <div class="card-body table-responsive p-0">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>S.N</th>
                                                <th>Name</th>
                                                <th>Contact</th>
                                                <th>Address</th>
                                                <th>Gender</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                            @foreach ($patients as $patient)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $patient->name }}</td>
                                                    <td>{{ $patient->contact }}</td>                                                        
                                                    <td>{{ $patient->address }}</td>                                                        
                                                    <td>{{ $patient->gender }}</td>                                                        
                                                   
                                                    <td class="d-flex mr-2">
                                                        <a href="{{ route('patient.show', ['patient'=>$patient]) }}" class = "btn btn-success btn-sm mr-2">
                                                          <i class="fa fa-eye" aria-hidden="true"></i> 
                                                          View
                                                        </a>                                                     

                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <div class= "mt-3 ">
                                        {{ $patients->links() }}
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection