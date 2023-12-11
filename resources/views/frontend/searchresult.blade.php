@extends('frontend.app')
@section('content')
    @if ($doctors)
        <ul>
            @foreach ($doctors as $doctor)
            <div class="col-md-4">
                <div class="card" style="background-color: #81c5d2">
                    <div class="card-header  border-bottom-0">
                        <h2>
                            {{ $doctor->fname . ' ' . $doctor->lname }}
                        </h2>
                    </div>
                    <div class="card-body pt-0 text-center">
                        @if ($doctor->image)
                            <img class="profile-user-img img-fluid img-circle" src="{{ asset($doctor->image) }}"
                                alt="profile">
                        @else
                            <img class="profile-user-img img-fluid img-circle"
                                src="{{ asset('storage/images/avatar.webp') }}" alt="profile">
                        @endif

                        <br>
                        <div class="text-center">
                            License No: {{ $doctor->license_no }}
                            <br>
                            Specialization:{{ $doctor->specialization }}
                        </div>
                        <br>
                    </div>
                </div>
            </div>
          
            @endforeach
        </ul>
    @else
        <p>No doctors found.</p>
    @endif
@endsection
