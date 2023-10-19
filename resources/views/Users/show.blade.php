@extends('layout.app');
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
                            <div class="card-header">
                                User Information
                            </div>
                            <div class="card-body">
                                
                                <p class="card-text">
                                    <strong>Name:</strong> {{ $user->name }}<br>
                                    <strong>Email:</strong> {{ $user->email }}<br>
                                    <strong>Role:</strong>
                                    @if ($user->role == 1)
                                        <td>Admin</td>
                                    @elseif($user->role == 2)
                                        <td>Doctor</td>
                                    @else
                                        <td>User</td>
                                    @endif
                                    <br/>
                                    <strong>Status:</strong>
                                    {{ $user->status == 1 ? 'Active' : 'Inactive' }}
                                    <br>
                                    <!-- Add more user attributes as needed -->
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
