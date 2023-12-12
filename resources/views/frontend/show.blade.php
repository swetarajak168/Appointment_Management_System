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
            @if (session()->get('locale') == 'en')
                {{ $page->title['en'] }}
            @else
                {{ $page->title['np'] }}
            @endif


        </h1>

    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <!-- Your text goes here -->
             
                <h5 class="pt-4">
                    @if (session()->get('locale') == 'en')
                    {{ $page->content['en'] }}
                    @else
                    {{ $page->content['np'] }}

                    @endif
                </h5>
            </div>
            <div class="col-md-6">
                <!-- Your image goes here -->
                <img src="{{ asset('image/aboutbuilding.jpg') }}" class="img-fluid float-right" alt="Your Image">
            </div>
        </div>
        
    </div>
</div @endsection
