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
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>S.N</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Subject</th>
                                                <th>Message</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                            @foreach ($contacts as $contact)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $contact->name }}</td>
                                                    <td>{{ $contact->email }}</td>                                                        
                                                    <td>{{ $contact->subject }}</td>                                                        
                                                    <td>{{ $contact->message }}</td>                                                        
                                                    <td class="d-flex mr-2">
                                                                                        

                                                        <form method="POST"
                                                            action="{{ route('contactDetail.destroy', ['contactDetail'=>$contact->id]) }}" id="delete-form">
                                                            @csrf
                                                            @method('DELETE')                                                                
                                                            <button                                                                     
                                                                class="btn btn-danger btn-sm mr-2" onclick="return deleteConfirm('Delete this information')"><i
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