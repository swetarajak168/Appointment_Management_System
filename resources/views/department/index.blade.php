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
                                            <h1 class="card-title w-30">List of Department </h1>
                                            <div class="card-tools flex">
                                                <a href={{ route('department.create') }}
                                                    class="btn btn-primary btn-md mr-2">
                                                    <i class="fa fa-plus-circle " aria-hidden="true"></i> Add Department
                                                </a>

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
                                                    <th>Department Name</th>
                                                    <th>Members</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($department as $dep)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $dep->department_name }}</td>
                                                        <td>{{ $dep->doctor_count }}</td>
                                                        <td class="d-flex mr-2">
                                                            <a href="{{ route('department.edit', ['department'=>$dep]) }}"
                                                                class="btn btn-primary btn-sm mr-2">
                                                                <i class="fa fa-edit" aria-hidden="true"></i> Edit
                                                            </a>

                                                            <form method="POST"
                                                                action="{{ route('department.destroy', ['department'=>$dep]) }}" id="delete-form">
                                                                @csrf
                                                                @method('DELETE')                                                                
                                                                <button                                                                     
                                                                    class="btn btn-danger btn-sm mr-2" onclick="return deleteConfirm('Delete this department')"><i
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
