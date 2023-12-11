@extends('layout.app')
@section('content')
{{-- {{ dd($page) }} --}}
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            {{-- <h3 class=>User Profile</h3> --}}

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header" style="background-color: #2F6B73">
                            <h3 class="card-title text-white ">Page Information</h3>
                        </div>
                        <!-- /.card-header -->

                       
                        <div class="d-flex  ">
                            <ul class="list-group list-group-unbordered mb-3 mr-5 p-2">

                                <li class="">
                                    <b>English Name:</b> {{ $page->title['en'] }}
                                </li>
                                <li class="">
                                    <b>Content:</b> {{ $page->content['en'] }}
                                </li>
                                <br>
                                <li class="">
                                    <b>Slug:</b> {{ $page->slug }}
                                </li>
                                
                                <li class="">
                                    <b>Status:</b>
                                    @if ($page->status == 1)
                                        Active
                                    @else
                                        Inactive
                                    @endif
                                </li>

                            </ul>

                            <ul class="list-group list-group-unbordered mb-3 mr-5 p-2">

                                <li class="">
                                    <b>Nepali Name:</b> {{ $page->title['np'] }}
                                </li>
                                <li class="">
                                    <b>Content:</b> {{ $page->content['np'] }}
                                </li>
                               
                                
                                

                            </ul>
                        </div>

                    </div>
                    <!-- /.card-body -->


                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>

    </section>
</div>
@endsection