@extends('frontend.app')
@section('content')
    @if ($doctors)
        <ul>
            @foreach ($doctors as $doctor)
                <li>{{ $doctor->fname . ' ' . $doctor->lname }} </li>
            @endforeach
        </ul>
    @else
        <p>No doctors found.</p>
    @endif
@endsection
