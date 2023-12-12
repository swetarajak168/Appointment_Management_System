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
                                        <h1 class="card-title w-30">FAQ</h1>
                                        <div class="card-tools">
                                            <div class="input-group input-group-sm" style="width: 150px;">
                                                <a href={{ route('faq.create') }}
                                                    class="btn btn-primary btn-md mr-2 w-20px"> <i
                                                        class="fa fa-plus-circle" aria-hidden="true"></i> Add FAQ</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body table-responsive p-0">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>S.N</th>
                                                <th>Question</th>
                                               
                                                <th>Answer</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                            @foreach ($faqs as $faq)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $faq->question }}</td>
                                                    <td>{{ $faq->answer }}</td>                                                        
                                                    <td class="d-flex mr-2">
                                                        <a href="{{ route('faq.edit', ['faq' => $faq]) }}"
                                                            class="btn btn-primary btn-sm mr-2">
                                                            <i class="fa fa-edit" aria-hidden="true"></i> Edit
                                                        </a>                           

                                                        <form method="POST"
                                                            action="{{ route('faq.destroy', ['faq'=>$faq]) }}" id="delete-form">
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