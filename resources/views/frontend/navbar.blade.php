@inject('dynamic_menu', 'App\Helpers\DynamicMenuHelper')
<nav class=" navbar navbar-expand  navbar-light mb-3" style="background-color: #81c5d2">
    <!-- Left navbar links -->
    <ul class="navbar-nav" style="padding-left: 200px;">
        <li class="nav-item " style="padding-right: 100px">
            <a href="/" class="nav-link"><i class="fa fa-stethoscope" aria-hidden="true"></i> {{ __('AMS') }}</a>
        </li>
        @foreach ($dynamic_menu->menuList() as $menu)
     
            @if ($menu->parent_id == null)
                @if ($menu->children->isNotEmpty())
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle"
                            data-bs-toggle="dropdown">{{ $menu->Name }}</a>
                        <div class="dropdown-menu bg-light mt-2">
                            @foreach ($menu->children as $childMenu)
                                <a href="{{ $childMenu->Type == '1' ? route($childMenu->modules->link) : ($childMenu->Type == '2' ? route('dynamicpage', ['slug' => $childMenu->page->slug]) : $childMenu->external_link) }}"
                                    target="{{ $childMenu->Type == 'external_Link' ? '_blank' : '_self' }}"
                                    class="dropdown-item">{{ $childMenu->Name }}</a>
                            @endforeach
                        </div>
                    </div>
                @else
                    <li class="nav-item d-none d-sm-inline-block">
                        @if ($menu->Type === '1')
                            <a href="{{ route($menu->module->link) }}"
                                class="nav-item nav-link active">{{ $menu->Name }}</a>
                        @elseif($menu->Type === '2')
                            <a href="{{ route('dynamicpage', ['slug' => $menu->page->slug]) }}"
                                class="nav-item nav-link active">{{ $menu->Name }}</a>
                        @else
                            <a href="{{ $menu->external_link }}" class="nav-item nav-link active"
                                target="blank">{{ $menu->Name }}</a>
                        @endif
                    </li>
                    @endif
                @endif
            @endforeach


            {{-- @foreach ($dynamic_menu->menuList() as $menu)
        @if ($menu->parent_id == null)
            @if ($menu->children->isNotEmpty())
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle"
                        data-bs-toggle="dropdown">{{ $menu->Name }}</a>
                    <div class="dropdown-menu bg-light mt-2">
                        @foreach ($menu->children as $childMenu)
                            <a href="{{ $childMenu->type == '1' ? route($childMenu->modules->link) : ($childMenu->type == '2' ? route('dynamicpage', ['slug' => $childMenu->page->slug]) : $childMenu->external_link) }}"
                                target="{{ $childMenu->type == 'ExternalLink' ? '_blank' : '_self' }}"
                                class="dropdown-item">{{ $childMenu->name }}</a>
                        @endforeach
                    </div>
                </div>
            @else
                @if ($menu->type == '1')
                    <a href="{{ route($menu->modules->link) }}"
                        class="nav-item nav-link active">{{ $menu->name }}</a>
                @elseif($menu->Type === '2')
                    <a href="{{ route('dynamicpage', ['slug' => $menu->page->slug]) }}"
                        class="nav-item nav-link active">{{ $menu->Name }}</a>
                @else
                    <a href="{{ $menu->external_link }}" class="nav-item nav-link active"
                        target="_blank">{{ $menu->name }}</a>
                @endif
            @endif
        @endif
    @endforeach --}}

    </ul>
    {{-- <ul class="navbar-nav " style="padding-left: 200px">
        @auth
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ route('dashboard') }}" class="nav-link">{{ auth()->user()->name }}</a>
            </li>
        @else
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ route('login') }}" class="nav-link">
                    <button type="button" class="btn btn-info">
                        {{ __('LogIn') }}
                    </button>
                </a>
            </li>
        @endauth
    </ul> --}}
    <!-- SEARCH FORM -->

    <!-- Right navbar links -->

</nav>
