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
                          <h1 class="card-title w-30">List of Doctor </h1>                           
                          <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">                           
                                <a href={{route('doctor.create')}} class="btn btn-primary btn-md mr-2"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add Doctor</a>
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
                                <th>License No.</th>
                                <th>First Name</th>
                                <th>Last Name</th>                                                         
                                <th>Department</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach($doctors as $doctor)
                              <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $doctor->license_no }}</td>
                                <td>{{ $doctor->fname }}</td>
                                <td>{{ $doctor->lname }}</td>                                
                                                              
                                <td>{{ $doctor->Department }}</td>
                                <td class="d-flex mr-2">
                                 {{-- {{ $id = $doctor->user->id ; }} --}}
                                 <a href="{{ route('doctor.show',['id'=>$doctor->id]) }}" class = "btn btn-success btn-sm mr-2"><i class="fa fa-eye" aria-hidden="true"></i> View</a>
                                  <a href="{{route('doctor.edit',['doctor'=>$doctor])}}" class="btn btn-primary btn-sm mr-2">
                                    <i class="fa fa-edit" aria-hidden="true"></i>  Edit
                                  </a>                               
                                  <form  method="POST" action="{{route('doctor.delete',['doctor'=>$doctor])}}" id="delete-form" >
                                    @csrf
                                    @method('DELETE')                                    
                                    {{-- <button  class="btn btn-danger btn-sm mr-2" id="delete-form" onclick="return confirm('Are u sure to delete')"> <i class="fa fa-trash" aria-hidden="true"></i> Delete </button> --}}
                                    <button type="submit"  class="btn btn-danger btn-sm mr-2" id="delete-form" onclick="return deleteConfirm('Delete this doctor')"> <i class="fa fa-trash" aria-hidden="true"></i> Delete </button>
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
