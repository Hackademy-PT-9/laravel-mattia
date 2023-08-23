<!-- Navigation-->
<nav class="container-fluid px-4 fixed-top">
    <div
        class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <div class="col-md-3 mb-2 mb-md-0 justify-content-md-center d-none d-md-flex">
            <a href="{{ route('homepage') }}" class="d-inline-flex  text-decoration-none fs-4 font-barlow">
                MC
            </a>
        </div>

        <ul class="nav col-12 col-md-auto mb-2 justify-content-center align-items-center mb-md-0">
            <li><a href="{{ route('homepage') }}"
                    class="@if (Route::currentRouteName() == 'homepage') text-primary disabled @endif nav-link px-3 color-link-nav d-none d-md-flex">Home</a>
            </li>
            <li><a href="{{ route('homepage') }}"
                    class="d-inline-flex  text-decoration-none fs-4 font-barlow d-flex d-md-none">
                    MC
                </a></li>
            <li><a href="{{ route('service') }}" class="@if (Route::currentRouteName() == 'service') text-primary disabled @endif nav-link px-3 color-link-nav">Services</a></li>
            <li><a href="{{ route('about') }}" class="@if (Route::currentRouteName() == 'about') text-primary disabled @endif nav-link px-3 color-link-nav">About</a></li>
            <li><a href="{{ route('contact') }}" class="@if (Route::currentRouteName() == 'contact') text-primary disabled @endif nav-link px-3 color-link-nav">Contact</a></li>
        </ul>

        <div class="col-md-3 text-end d-none d-md-flex">
            <button type="button" class="btn btn-outline-primary rounded-pill me-2">Get started</button>
        </div>
    </div>
</nav>
