@extends('frontend.app')
@section('content')
    <div class="col-md-4">
        <select class="form-control languagechange" data-route="{{ route('changelanguage') }}">
            <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English
            </option>
            <option value="np" {{ session()->get('locale') == 'np' ? 'selected' : '' }}>Nepali
            </option>
        </select>
    </div>
    <div class="text-center">
        <h1 style="color:#20475b">
                {{ $page->title['en'] }}


        </h1>

    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <!-- Your text goes here -->
             
                <h5 class="pt-4">
                    {{ $page->content['en'] }}

                </h5>
            </div>
            <div class="col-md-6">
                <!-- Your image goes here -->
                <img src="{{ asset('image/aboutbuilding.jpg') }}" class="img-fluid float-right" alt="Your Image">
            </div>
        </div>
        
    </div>
</div @endsection
