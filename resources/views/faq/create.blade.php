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
                        {!! Form::open(['route' => 'faq.store']) !!}
                        {!! csrf_field() !!}
                        <div class=" card-info">
                            <div class="card-header">
                                <h3 class="card-title">Add Page</h3>
                            </div>
                            <div class="card-body">
                           


                                <div class="row">
                                    <div class="form-group col-md-6">
                                        {!! Form::label('question', 'Question', ['class' => 'col-sm-8 col-form-label']) !!}
                                        {!! Form::textarea('question', null, ['class' => 'form-control ', 'placeholder' => 'Question', 'rows' => 4,
                                        'cols' => 100,]) !!}
                                    </div>
                                    @error('question')
                                    <span class="text-danger " style="padding-left:100px; margin-left:100px;">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        {!! Form::label('answer', 'Answer', ['class' => 'col-sm-8 col-form-label']) !!}
                                        {!! Form::textarea('answer', null, [
                                            'class' => 'form-control ',
                                            'placeholder' => 'Description',
                                            'rows' => 4,
                                            'cols' => 100,
                                        ]) !!}
                                    </div>
                                </div>
                         
                        </div>
                        <div class="card-footer">
                        {!! Form::submit('Create',['class'=>'btn btn-info float-right']) !!}
                    </div>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
            <!-- /.card-body -->
        </div>
</div>
@endsection