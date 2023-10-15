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
                          <h1 class="card-title w-30">User Detail</h1>                           
                          <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">                           
                                <a href={{route('user.create')}} class="btn btn-primary btn-md mr-2">Add New User</a>
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
                                @foreach($users as $user)
                              <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->role }}</td>                                
                                <td>{{ $user->status }}</td>
                                <td class="d-flex mr-2">
                                  <a href="user/{{ $user->id }}/edit" class="btn btn-primary btn-md mr-2">
                                    Edit</a>                               
                                  <form method="POST" action="user/{{ $user->id }}/delete">
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
