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
                                                    <a href={{ route('user.create') }}
                                                        class="btn btn-primary btn-md mr-2 w-20px"> <i
                                                            class="fa fa-plus-circle" aria-hidden="true"></i> Add User</a>
                                                </div>
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
                                                    <th>Email</th>
                                                    <th>Role</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($users as $user)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $user->name }}</td>
                                                        <td>{{ $user->email }}</td>                                                        
                                                        @if ($user->role == 1)
                                                            <td>Admin</td>
                                                        @elseif($user->role == 2)
                                                            <td>Doctor</td>
                                                        @else
                                                            <td>User</td>
                                                        @endif
                                                        <td>{{ $user->status == 1 ? 'Active' : 'Inactive' }}</td>
                                                        <td class="d-flex mr-2">
                                                            <a href="{{ route('user.show', ['user'=>$user]) }}" class = "btn btn-success btn-sm mr-2">
                                                              <i class="fa fa-eye" aria-hidden="true"></i> 
                                                              View
                                                            </a>

                                                            <a href="{{ route('user.edit', ['user'=>$user]) }}"
                                                                class="btn btn-primary btn-sm mr-2">
                                                                <i class="fa fa-edit" aria-hidden="true"></i> Edit
                                                            </a>

                                                            <form method="POST"
                                                                action="{{ route('user.destroy', ['user'=>$user]) }}" id="delete-form">
                                                                @csrf
                                                                @method('DELETE')                                                                
                                                                <button                                                                     
                                                                    class="btn btn-danger btn-sm mr-2" onclick="return deleteConfirm('Delete this user')"><i
                                                                        class="fa fa-trash" aria-hidden="true"></i> Delete
                                                                </button>
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
