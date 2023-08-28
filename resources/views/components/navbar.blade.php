<!-- Navigation-->
<nav class="container-fluid px-4 fixed-top">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4">
        <div class="col-md-3 mb-2 mb-md-0 justify-content-md-center d-none d-md-flex">
            <a href="{{ route('homepage') }}" class="d-inline-flex  text-decoration-none fs-4 font-barlow">
                MC
            </a>
        </div>

        <ul class="nav col-12 col-md-auto mb-2 justify-content-center align-items-center mb-md-0">
            {{-- visible link from md --}}
            <li><a href="{{ route('homepage') }}"
                    class="@if (Route::currentRouteName() == 'homepage') active-link disabled @endif nav-link px-3 color-link-nav d-none d-md-flex">Home</a>
            </li>
            {{-- visible link only on sm --}}
            <li><a href="{{ route('homepage') }}"
                    class="d-inline-flex  text-decoration-none fs-4 font-barlow d-flex d-md-none">
                    MC
                </a></li>
            <li><a href="{{ route('service') }}"
                    class="@if (Route::currentRouteName() == 'service') active-link disabled @endif nav-link px-3 color-link-nav">Services</a>
            </li>
            <li><a href="{{ route('about') }}"
                    class="@if (Route::currentRouteName() == 'about') active-link disabled @endif nav-link px-3 color-link-nav">About</a>
            </li>
            <li><a href="{{ route('contact') }}"
                    class="@if (Route::currentRouteName() == 'contact') active-link disabled @endif nav-link px-3 color-link-nav">Contact</a>
            </li>
        </ul>
        {{-- hidden d-sd --}}
        <div class="col-md-3 text-end d-none d-md-flex">
            <a type="button" href="{{ route('service') }}" class="btn btn-outline-primary rounded-pill me-2">Get
                started</a>
        </div>
    </div>
</nav>
