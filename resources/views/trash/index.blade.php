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
                                    <div class="card-body table-responsive p-0">
                                        {{-- {{ dd($softDeletedItems) }} --}}
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>S.N</th>
                                                    <th>Doctor Name</th>
                                                    <th>Contact</th>
                                                    <th>Department</th>

                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($softDeletedItems as $doctor)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $doctor->fname }}</td>
                                                        <td>{{ $doctor->contact }}</td>
                                                        <td>{{ $doctor->department }}</td>
                                                        <td class="d-flex mr-2">
                                                            <form action="{{ route('trash.restore', ['trash' => $doctor]) }}" method="post">
                                                                @csrf                                                                
                                                                <button type="submit" class="btn btn-success btn-sm mr-2"
                                                                id="restore-form"
                                                                onclick="return deleteConfirm('Restore this doctor?')"> <i
                                                                    class="fa fa-trash" aria-hidden="true"></i> Restore
                                                            </button>
                                                            </form>
                                                            
                                                            <form method="POST"
                                                            action="{{ route('trash.destroy', ['trash' => $doctor]) }}"
                                                           >
                                                            @csrf
                                                            @method('DELETE')
                                                            {{-- <button  class="btn btn-danger btn-sm mr-2" id="delete-form" onclick="return confirm('Are u sure to delete')"> <i class="fa fa-trash" aria-hidden="true"></i> Delete </button> --}}
                                                            <button type="submit" class="btn btn-danger btn-sm mr-2"
                                                                id="delete-form"
                                                                onclick="return deleteConfirm('Delete this doctor permanently')"> <i
                                                                    class="fa fa-trash" aria-hidden="true"></i> Delete
                                                            </button>
                                                        </form>
                                                        </td>


                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
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
