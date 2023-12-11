@extends('layout.app')
@section('content')
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-10 ml-5">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <!-- /.card-header -->
                            <!-- form start -->
                            {!! Form::open(['route' => ['page.update', 'page' => $page],'method' => 'put']) !!}
                            {!! csrf_field() !!}
                            <div class=" card-info">
                                <div class="card-header">
                                    <h3 class="card-title">Add Page</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row d-flex ">
                                        <button type="button" class="btn btn-info mr-2"
                                            onclick="toggle('englishdata',event,'nepalidata')">English</button>
                                        <button type="button" class="btn btn-info "
                                            onclick="toggle('nepalidata',event,'englishdata')">Nepali</button>
                                    </div>
                                    <div id="englishdata">


                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                {!! Form::label('title[en]', 'English Title', ['class' => 'col-sm-8 col-form-label']) !!}
                                                {!! Form::text('title[en]', $page->title['en'], ['class' => 'form-control col-sm-8', 'placeholder' => 'title']) !!}
                                            </div>
                                            @error('title[en]')
                                                <span class="text-danger "
                                                    style="padding-left:100px; margin-left:100px;">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                {!! Form::label('content[en]', 'English Description', ['class' => 'col-sm-8 col-form-label']) !!}
                                                {!! Form::textarea('content[en]', $page->content['en'], [
                                                    'class' => 'form-control ',
                                                    'placeholder' => 'Description',
                                                    'rows' => 4,
                                                    'cols' => 100,
                                                ]) !!}
                                            </div>
                                            @error('content[en]')
                                                <span class="text-danger "
                                                    style="padding-left:100px; margin-left:100px;">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div id="nepalidata" style="display:none;">
                                        <div class="row">
                                            <div class="form-group  col-md-6">
                                                {!! Form::label('title[np]', 'Nepali Title', ['class' => 'col-sm-8 col-form-label']) !!}
                                                {!! Form::text('title[np]', $page->title['np'], ['class' => 'form-control col-sm-8', 'placeholder' => 'title']) !!}
                                            </div>
                                            @error('title[np]')
                                                <span class="text-danger "
                                                    style="padding-left:100px; margin-left:100px;">{{ $message }}</span>
                                            @enderror
                                        </div>


                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                {!! Form::label('content[np]', 'Nepali Description', ['class' => 'col-sm-8 col-form-label']) !!}
                                                {!! Form::textarea('content[np]', $page->content['np'], [
                                                    'class' => 'form-control ',
                                                    'placeholder' => 'Description',
                                                    'rows' => 4,
                                                    'cols' => 100,
                                                ]) !!}
                                            </div>
                                            @error('content[en]')
                                                <span class="text-danger "
                                                    style="padding-left:100px; margin-left:100px;">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                {!! Form::hidden('status', '1') !!}
                                <div class="card-footer">
                                    {!! Form::submit('Update', ['class' => 'btn btn-info float-right']) !!}
                                </div>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
    </div>
    </div>
    <script>
        function toggle(form1, event, form2) {
            event.preventDefault();
            var form1 = document.getElementById(form1);
            var form2 = document.getElementById(form2);
            form1.style.display = 'block';
            form2.style.display = 'none';
        }
    </script>
@endsection
