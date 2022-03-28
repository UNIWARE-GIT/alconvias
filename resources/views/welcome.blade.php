@extends('layout.base')

@section('styles')
    <style>
        /* GLOBAL STYLES
                                                -------------------------------------------------- */
        /* Padding below the footer and lighter body text */

        body {
            padding-top: 3rem;
            color: #363636;
        }


        /* CUSTOMIZE THE CAROUSEL
                                                -------------------------------------------------- */

        /* Carousel base class */
        .carousel {
            margin-bottom: 4rem;
        }

        /* Since positioning the image, we need to help out the caption */
        .carousel-caption {
            bottom: 3rem;
            z-index: 10;
        }

        /* Declare heights because of positioning of img element */
        .carousel-item {
            height: 32rem;
        }

        .carousel-item>img {
            position: absolute;
            top: 0;
            right: 0;
            min-width: 100%;
            height: 32rem;
        }


        /* MARKETING CONTENT
                                                -------------------------------------------------- */

        /* Center align the text within the three columns below the carousel */
        .marketing .col-lg-4 {
            margin-bottom: 1.5rem;
            text-align: center;
        }

        .marketing h2 {
            font-weight: 400;
        }

        .marketing .col-lg-4 p {
            margin-right: .75rem;
            margin-left: .75rem;
        }


        /* Featurettes
                                                ------------------------- */

        .featurette-divider {
            margin: 5rem 0;
            /* Space out the Bootstrap <hr> more */
        }

        /* Thin out the marketing headings */
        .featurette-heading {
            font-weight: 300;
            line-height: 1;
        }


        /* RESPONSIVE CSS
                                                -------------------------------------------------- */

        @media (min-width: 40em) {

            /* Bump up size of carousel content */
            .carousel-caption p {
                margin-bottom: 1.25rem;
                font-size: 1.25rem;
                line-height: 1.4;
            }

            .featurette-heading {
                font-size: 50px;
            }
        }

        @media (min-width: 62em) {
            .featurette-heading {
                margin-top: 7rem;
            }
        }

        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

    </style>
@stop

@section('content')
    <main>
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators bg-wine-footer">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner bg-light">
                <div class="carousel-item active">
                    <img class="bd-placeholder-img d-none d-sm-block" src="{{ asset('img/alconvias-logo-wfl.jpeg') }}"
                        aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false" style="margin-top: 2rem;" />
                    <div style="margin-top: 7rem;">
                        <div class="ratio ratio-21x9">
                            <img class="bd-placeholder-img d-block d-sm-none img-fluid"
                                src="{{ asset('img/alconvias-logo.jpeg') }}" aria-hidden="true"
                                preserveAspectRatio="xMidYMid slice" focusable="false" />
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="bd-placeholder-img d-none d-sm-block"
                        src="{{ asset('img/recursos/equipo-de-trabajores/equipo-personal (1).jpeg') }}" width="100%"
                        height="100%" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false" />
                    <rect width="100%" height="100%" fill="#777" />
                    <img class="bd-placeholder-img d-block d-sm-none"
                        src="{{ asset('img/recursos/adoquinados-carreteras/adoquinados-carreteras (55).jpeg') }}"
                        width="100%" height="100%" aria-hidden="true" preserveAspectRatio="xMidYMid slice"
                        focusable="false" />
                    <rect width="100%" height="100%" fill="#777" />
                    <div class="container">
                        <div class="carousel-caption text-start rounded bg-gray-500">
                            <div class="d-flex">
                                <h1 class="rounded p-3" style="width: max-content">
                                    Trabajos Impecables.
                                </h1>
                                <i class="my-auto p-1 rounded far fa-handshake fs-1"></i>
                            </div>
                            <p class="rounded p-3">
                                Amámos nuestro trabajo y eso nos hace eficientes, cumplidos e impecables.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="bd-placeholder-img d-none d-sm-block"
                        src="{{ asset('img/recursos/provincia/trabajos-provincia (4).jpeg') }}" width="100%" height="100%"
                        aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false" />
                    <rect width="100%" height="100%" fill="#777" />
                    <img class="bd-placeholder-img d-block d-sm-none"
                        src="{{ asset('img/recursos/provincia/trabajos-provincia (6).jpeg') }}" width="100%" height="100%"
                        aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false" />
                    <rect width="100%" height="100%" fill="#777" />
                    <div class="container">
                        <div class="carousel-caption text-start rounded bg-gray-500">
                            <div class="d-flex">
                                <h1 class="rounded p-3" style="width: max-content">
                                    Estamos en Todos Lados.
                                </h1>
                                <i class="my-auto p-1 rounded fas fa-map-marked-alt fs-1"></i>
                            </div>
                            <p class="rounded p-3">
                                Ciudad, Provincia, no importa, nosotros llegamos a donde nos necesiten.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="bd-placeholder-img d-none d-sm-block"
                        src="{{ asset('img/recursos/preparacion-caminos-tierra/Contrafuerte-48792.jpg') }}" width="100%"
                        height="100%" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false" />
                    <rect width="100%" height="100%" fill="#777" />
                    <img class="bd-placeholder-img d-block d-sm-none"
                        src="{{ asset('img/recursos/preparacion-caminos-tierra/Contrafuerte-48792.jpg') }}" width="100%"
                        height="100%" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false" />
                    <rect width="100%" height="100%" fill="#777" />
                    <div class="container">
                        <div class="carousel-caption text-start rounded bg-gray-500">
                            <div class="d-flex">
                                <h1 class="rounded p-3" style="width: max-content">
                                    Arquitectura e Ingenieria Inteligente.
                                </h1>
                                <i class="my-auto p-1 rounded fas fa-brain fs-1"></i>
                            </div>
                            <p class="rounded p-3">
                                Planificación e ingenio profesional, para los mejores resultados.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bg-dark rounded" aria-hidden="true"></span>
                <span class="visually-hidden">-</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon bg-dark rounded" aria-hidden="true"></span>
                <span class="visually-hidden"></span>
            </button>
        </div>


        <!-- Marketing messaging and featurettes
                                                        ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->

        <div class="container-fluid border-top border-2 border-primary">
            <div class="row bg-white rounded">
                <div class="col-lg-4">
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4 p-4">
                    <h1 class="fs-1 text-center text-dark">¿Quienes Somos?</h1>
                    <p class="text-center">
                        Somos una empresa que pertenece a una Sociedad Empresarial , Nuestra oficina central se encuentra en
                        la ciudad de El Alto - La Paz
                    </p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                </div><!-- /.col-lg-4 -->
            </div>
        </div>

        <div class="container marketing">

            <!-- Three columns of text below the carousel -->
            <div class="row bg-white border-bottom border-2 border-primary">
                <div class="col-lg-4">
                    <img src="{{ asset('img/mision.png') }}" width="250" height="150" alt="">
                    <h2 class="fs-1 text-center text-dark">Misión</h2>
                    <p class="text-center">
                        Producir, comercializar e innovar productos prefabricados para la construcción, aportando con
                        excelencia al desarrollo del país
                    </p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img src="{{ asset('img/vision.png') }}" width="250" height="150" alt="">
                    <h2 class="fs-1 text-center text-dark">Visión</h2>
                    <p class="text-center">Ser la primera, la mejor y más grande empresa en la producción,
                        comercialización e innovación de productos prefabricados </p>
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->


            <!-- START THE FEATURETTES -->

            <hr class="featurette-divider">

            <div class="row featurette g-2 g-sm-4">
                <div>
                    <h1 class="text-center fs-1 text-dark mb-4"><u>Nuestros Productos</u></h1>
                </div>
                <div class="col-md-7">
                    <ul class="list-group list-group-flush rounded shadow border-end border-start border-2 border-primary">
                        <li class="list-group-item p-4">
                            <h2 class="featurette-heading">Losetas Dentadas</h2>
                            <p class="lead" style="text-align: justify;">
                                Losetas dentadas que se entrelazan entre si en los cuatro costados que al unirse resisten el
                                desplazamiento relativo tanto en sentido longitudinal como transversal.
                            </p>
                        </li>
                        <li class="list-group-item p-4">
                            <h2 class="featurette-heading">Losetas Dentadas en Dos Lados</h2>
                            <p class="lead" style="text-align: justify;">
                                Losetas dentadas que se entrelazan entre si en dos costados de manera que resisten
                                desplazamientos relativos solo en las caras paralelas a los ejes longitudinales.
                            </p>
                        </li>
                        <li class="list-group-item p-4">
                            <h2 class="featurette-heading">Losetas Geometricas</h2>
                            <p class="lead" style="text-align: justify;">
                                Losetas rectangulares u otras formas geométricas (Hexagonal, trapecio, cuadrado, etc.).
                                Debido a la gran variedad de formas y aplicaciones durante su proceso de fabricación se
                                emplean diferentes métodos que van del manual, hasta la utilización de la mas sofisticada
                                maquinaria, en la cual lo dosificación de los materiales se aplica por medio de
                                computadoras.
                            </p>
                        </li>
                        <li class="list-group-item p-4">
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <a class="btn btn-outline-primary" type="button" href="{{ route('products') }}">Ver
                                    Todo</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-5 d-flex align-items-center justify-content-center">
                    <div class="p-4 bg-white rounded-circle shadow-lg">
                        <img class="img-fluid" src="http://www.preconalbolivia.com/1/images/grupos-de-losetas.gif" />
                    </div>
                </div>
            </div>
            <hr class="featurette-divider">
            <!-- /END THE FEATURETTES -->

        </div><!-- /.container -->
    </main>
@stop
