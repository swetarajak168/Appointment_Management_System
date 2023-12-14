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
                                            <h1 class="card-title w-30">Page Detail</h1>

                                            <div class="card-tools">
                                                <div class="input-group input-group-sm" style="width: 150px;">
                                                    <a href={{ route('page.create') }}
                                                        class="btn btn-primary btn-md mr-2 w-20px"> <i
                                                            class="fa fa-plus-circle" aria-hidden="true"></i> Add
                                                        Page</a>
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
                                        <div class="row p-3">
                                            <h5 class="">Select Language: </h5>

                                            <div class="col-md-4">
                                                <select class="form-control languagechange"
                                                    data-route="{{ route('changelanguage') }}">
                                                    <option value="en"
                                                        {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English
                                                    </option>
                                                    <option value="np"
                                                        {{ session()->get('locale') == 'np' ? 'selected' : '' }}>Nepali
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>S.N</th>
                                                    <th>Name</th>
                                                    <th>Content</th>
                                                    <th>Slug</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach ($pages as $page)
                                                    @if ($page)
                                                        @if (session()->get('locale') == 'en')
                                                            <tr>
                                                                <td>{{ $loop->iteration }}</td>

                                                                <td>
                                                                    {{ $page->title['en'] }}
                                                                </td>
                                                                <td>
                                                                    {{ $page->content['en'] }}
                                                                </td>
                                                                <td>{{ $page->slug }}</td>

                                                                <td>{{ $page->status == 1 ? 'Active' : 'Inactive' }}</td>
                                                                <td class="d-flex mr-2">
                                                                    <a href="{{ route('page.show', ['page' => $page]) }}"
                                                                        class = "btn btn-success btn-sm mr-2">
                                                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                                                        View
                                                                    </a>

                                                                    <a href="{{ route('page.edit', ['page' => $page]) }}"
                                                                        class="btn btn-primary btn-sm mr-2">
                                                                        <i class="fa fa-edit" aria-hidden="true"></i> Edit
                                                                    </a>

                                                                    <form method="POST"
                                                                        action="{{ route('page.destroy', ['page' => $page]) }}"
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
                                                        @else
                                                            <tr>
                                                                <td>{{ $loop->iteration }}</td>

                                                                <td>
                                                                    {{ $page->title['np'] }}
                                                                </td>
                                                                <td>
                                                                    {{ $page->content['np'] }}
                                                                </td>
                                                                <td>{{ $page->slug }}</td>

                                                                <td>{{ $page->status == 1 ? 'Active' : 'Inactive' }}</td>
                                                                <td class="d-flex mr-2">
                                                                    <a href="{{ route('page.show', ['page' => $page]) }}"
                                                                        class = "btn btn-success btn-sm mr-2">
                                                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                                                        View
                                                                    </a>

                                                                    <a href="{{ route('page.edit', ['page' => $page]) }}"
                                                                        class="btn btn-primary btn-sm mr-2">
                                                                        <i class="fa fa-edit" aria-hidden="true"></i> Edit
                                                                    </a>

                                                                    <form method="POST"
                                                                        action="{{ route('page.destroy', ['page' => $page]) }}"
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
                                                        @endif
                                                    @else
                                                        {{-- Handle the case when $page is null --}}
                                                        Page not found
                                                    @endif
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
