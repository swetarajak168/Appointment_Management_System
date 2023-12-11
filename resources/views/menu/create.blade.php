@extends('layout.app')
@inject('page_helper', 'App\Helpers\PageHelper')
@inject('module_helper', 'App\Helpers\ModuleHelper')

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
                            {{ $errors }}
                            <!-- /.card-header -->
                            <!-- form start -->
                            {!! Form::open(['route' => 'menu.store']) !!}
                            {!! csrf_field() !!}
                            <div class=" card-info">
                                <div class="card-header">
                                    <h3 class="card-title">Add Page</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            {!! Form::label('name', 'Name', ['class' => 'col-sm-8 col-form-label']) !!}
                                            {!! Form::text('Name', null, ['class' => 'form-control col-sm-8', 'placeholder' => 'Menu Name']) !!}
                                        </div>
                                        @error('Name')
                                            <span class="text-danger "
                                                style="padding-left:100px; margin-left:100px;">{{ $message }}</span>
                                        @enderror
                                        <div class="form-group col-md-6">
                                            {!! Form::label('order', 'Order', ['class' => 'col-sm-8 col-form-label']) !!}
                                            {!! Form::number('Order', null, ['class' => 'form-control col-sm-8', 'placeholder' => 'Menu Name']) !!}
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        {!! Form::label('type', 'Selct  a type ', ['class' => 'col-sm-8 col-form-label']) !!}

                                        {!! Form::select('Type', config('dropdown.menuType'), null, [
                                            'class' => 'form-control col-sm-8',
                                            'placeholder' => 'Select a type',
                                            'id' => 'typeDropdown',
                                        ]) !!}
                                    </div>
                                        <div id="pageColumn" style="display:none" class="form-group col-md-6">
                                            {!! Form::label('page', 'Select page ', ['class' => 'col-sm-8 col-form-label']) !!}

                                            {!! Form::select('page_id', $page_helper->pageList(), null, [
                                                'class' => 'form-control  col-sm-8',
                                                'placeholder' => 'Select Page',
                                            ]) !!}
                                        </div>
                                    <div id="moduleColumn"  style="display:none" class="form-group col-md-6">
                                        {!! Form::label('module', 'Select Module ', ['class' => 'col-sm-8 col-form-label']) !!}

                                        {!! Form::select('module_id', $module_helper->moduleList(), null, [
                                            'class' => 'form-control col-sm-8',
                                            'placeholder' => 'Select Module',
                                        ]) !!}
                                    </div>
                                    <div id="externalLinkColumn"  style="display:none" class="form-group col-md-6"> 
                                        {!! Form::label('link', 'Enter a link', ['class' => 'col-sm-8 col-form-label']) !!}
                                        {!! Form::text('external_link', null, ['class' => 'form-control col-sm-8', 'placeholder' => 'Enter External Link']) !!}
                                    </div>
                                    <div class="row">
                                        {!! Form::label('children', 'Is it a child menu?', ['class' => 'col-sm-4 col-form-label']) !!}
                                        <div class="form-check">
                                            {!! Form::radio('parent_id', '1', false, ['class' => 'form-check-input mr-2', 'id' => 'has_parent']) !!}
                                            {!! Form::label('type_1', 'Yes', ['class' => 'form-check-label']) !!}
                                        </div>
                                        <div class="form-check">
                                            {!! Form::radio('radio', null, false, ['class' => 'form-check-input', 'id' => 'no_parent']) !!}
                                            {!! Form::label('type_2', 'No', ['class' => 'form-check-label']) !!}
                                        </div>
                                    </div>

                                </div>
                                {!! Form::hidden('status', '1') !!}
                                <div class="card-footer">
                                    {!! Form::submit('Create', ['class' => 'btn btn-info float-right']) !!}
                                  
                                </div>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var typeDropdown = document.getElementById('typeDropdown');
            var moduleColumn = document.getElementById('moduleColumn');
            var pageColumn = document.getElementById('pageColumn');
            var externalLinkColumn = document.getElementById('externalLinkColumn');

            // Event handler for the "Type" dropdown change
            typeDropdown.addEventListener('change', function() {
                // Get the selected option value
                var selectedOption = typeDropdown.value;

                // Hide all columns
                moduleColumn.style.display = 'none';
                pageColumn.style.display = 'none';
                externalLinkColumn.style.display = 'none';

                // Show the selected column
                if (selectedOption === '1') {
                    moduleColumn.style.display = 'block';
                } else if (selectedOption === '2') {
                    pageColumn.style.display = 'block';
                } else if (selectedOption === '3') {
                    externalLinkColumn.style.display = 'block';
                }
            });

            // Trigger the change event to set the initial visibility based on the default selected option
            typeDropdown.dispatchEvent(new Event('change'));
        });
    </script>
@endsection
