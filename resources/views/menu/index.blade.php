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
                                        <h1 class="card-title w-30">Menu Detail</h1>

                                        <div class="card-tools">
                                            <div class="input-group input-group-sm" style="width: 150px;">
                                                <a href={{ route('menu.create') }}
                                                    class="btn btn-primary btn-md mr-2 w-20px"> <i
                                                        class="fa fa-plus-circle" aria-hidden="true"></i> Add
                                                    Menu</a>
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
                                {{-- {{ dd($pages)}} --}}
                                <div class="card-body table-responsive p-0">
                                    

                                      
                                    </div>
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>S.N</th>
                                                <th>Name</th>
                                                <th>Type</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                               
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($menus as $menu)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>

                                                        <td>
                                                            {{ $menu->Name }}
                                                        </td>
                                                        @if($menu->Type == 1)
                                                        <td>Module
                                                              
                                                        </td>
                                                        @elseif($menu->Type == 2)
                                                         <td>Page
                                                              
                                                        </td>
                                                        @else
                                                            <td>External Link
                                                              
                                                        </td>
                                                        @endif

                                                        <td>{{ $menu->status == 1 ? 'Active' : 'Inactive' }}</td>
                                                        <td class="d-flex mr-2">
                                                            <a href="{{ route('menu.show', ['menu' => $menu]) }}"
                                                                class = "btn btn-success btn-sm mr-2">
                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                View
                                                            </a>

                                                            <a href="{{ route('menu.edit', ['menu' => $menu]) }}"
                                                                class="btn btn-primary btn-sm mr-2">
                                                                <i class="fa fa-edit" aria-hidden="true"></i> Edit
                                                            </a>

                                                            <form method="POST"
                                                                action="{{ route('menu.destroy', ['menu' => $menu]) }}"
                                                                id="delete-form">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn btn-danger btn-sm mr-2"
                                                                    onclick="return deleteConfirm('Delete this page')"><i
                                                                        class="fa fa-trash" aria-hidden="true"></i>
                                                                    Delete
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