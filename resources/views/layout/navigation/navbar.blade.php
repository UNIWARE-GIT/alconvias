<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container-fluid">
        <div>
            <a class="navbar-brand" href="/">
                <img src="{{ asset('img/alconvias-logo-no-bg.png') }}" height="45" width="45" alt="">
                <span>{{ config('app.name') }}</span>
            </a>
        </div>
        <!-- RIGHTSIDE HAMBURGUER -->
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item p-3">
                        <a class="nav-link
                            @if (Request::url() == route('home')) active
                                text-center
                                bg-dark
                                text-light
                                rounded
                                border-top
                                border-bottom
                                border-dark @endif"
                            href="/">
                            <i class="fa fa-home text-danger"></i> Inicio
                        </a>
                    </li>
                    <li class="nav-item p-3">
                        <a class="nav-link
                        @if (Request::url() == route('services')) active
                            text-center
                            bg-dark
                            text-light
                            rounded
                            border-top
                            border-bottom
                            border-dark @endif"
                            href="{{ route('services') }}">
                            <i class="fa-solid fa-person-digging text-warning"></i> Servicios
                        </a>
                    </li>
                    <li class="nav-item p-3">
                        <a class="nav-link
                        @if (Request::url() == route('products')) active
                            text-center
                            bg-dark
                            text-light
                            rounded
                            border-top
                            border-bottom
                            border-dark @endif"
                            href="{{ route('products') }}">
                            <i class="fa fa-toolbox text-success"></i> Productos
                        </a>
                    </li>
                    <li class="nav-item p-3">
                        <a class="nav-link
                        @if (Request::url() == route('contacts')) active
                            text-center
                            bg-dark
                            text-light
                            rounded
                            border-top
                            border-bottom
                            border-dark @endif"
                            href="{{ route('contacts') }}">
                            <i class="fa-solid fa-headset text-primary ml-4"></i> Contáctanos
                        </a>
                    </li>
                </ul>
                <hr class="my-2" />
            </div>
        </div>
    </div>
</nav>
