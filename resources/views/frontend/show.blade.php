@extends('frontend.app')
@section('content')
    <div class="row p-3 m-2">

        <div class="mx-auto">
          <h4>
            <a class="changelanguage " id="en" data-route="{{ route('language') }}" style=" cursor: pointer;">
                English
            </a>
            <span>||</span>
            <a class="changelanguage " id="np" data-route="{{ route('language') }}" style=" cursor: pointer;">
                नेपाली
            </a>
        </h4>
        </div>
    </div>
    <div class="text-center">
        <h1 style="color:#20475b">
            @if (session()->get('lang') == 'en')
            {{ $page->title['en'] }}
            @else
                {{ $page->title['np'] }}
            @endif


        </h1>
    </div>
    <div class="container">
        <div class="row">
                <!-- Your text goes here -->

                <h5 class="pt-4">
                    @if (session()->get('lang') == 'en')
                        {{ $page->content['en'] }}
                    @else
                        {{ $page->content['np'] }}
                    @endif
                </h5>
           
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get the select element

            var links = document.querySelectorAll('.changelanguage');

            // Iterate over each link
            links.forEach(function(link) {
                link.addEventListener('click', function(event) {
                    event.preventDefault(); // Prevent the default behavior of the anchor element
                    // Get the URL from the data-route attribute
                    var url = this.getAttribute('data-route');

                    // Get the selected language from the data-lang attribute
                    var selectedLang = this.id;
                    console.log(selectedLang);
                    // Update the URL with the selected language as a parameter
                    window.location.href = url + '?lang=' + selectedLang;
                });
            });
        });
    </script>
@endsection
