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
                          <h1 class="card-title w-30">Doctor Detail</h1>                           
                          <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">                           
                                <a href={{route('doctor.create')}} class="btn btn-primary btn-md mr-2">Add New Doctor</a>
                              </div>
                          </div>
                        </div>
                      </div>

                        <!-- /.card-header -->
                        @if(session('success'))
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
                                <th>Email</th>
                                <th>Role</th>
                                <th>Status</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach($doctors as $doctor)
                              <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $doctor->name }}</td>
                                <td>{{ $doctor->email }}</td>
                                <td>{{ $doctor->role }}</td>                                
                                <td>{{ $doctor->status }}</td>
                                <td class="d-flex mr-2">
                                  <a href="doctor/{{ $doctor->id }}/edit" class="btn btn-primary btn-md mr-2">
                                    Edit
                                  </a>                               
                                  <form method="POST" action="doctor/{{ $doctor->id }}/delete">
                                    @csrf
                                    @method('DELETE')                                    
                                    <button type="submit" class="btn btn-danger btn-md mr-2">Delete </button>
                                  </form>                                  
                                </td>
                              </tr>                              
                              @endforeach
                            </tbody>
                          </table>
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
