@extends('layout.base')
@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <style>
        html {
            scroll-behavior: smooth;
        }

        body {
            padding-top: 5rem;
        }

        .lightbox-gallery {
            background-image: linear-gradient(#800f2f, #227c9d);
            background-repeat: no-repeat;
            color: #000;
            overflow-x: hidden
        }

        .lightbox-gallery p {
            color: #fff
        }

        .lightbox-gallery h2 {
            font-weight: bold;
            margin-bottom: 40px;
            padding-top: 40px;
            color: #fff
        }

        @media (max-width:767px) {
            .lightbox-gallery h2 {
                margin-bottom: 25px;
                padding-top: 25px;
                font-size: 24px
            }
        }

        .lightbox-gallery .intro {
            font-size: 16px;
            max-width: 500px;
            margin: 0 auto 40px
        }

        .lightbox-gallery .intro p {
            margin-bottom: 0
        }

        .lightbox-gallery .photos {
            padding-bottom: 20px
        }

        .lightbox-gallery .item {
            padding-bottom: 30px
        }

        #btnScrollTop {
            display: none;
            position: fixed;
            bottom: 20px;
            right: 30px;
            z-index: 99;
            font-size: 18px;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 15px;
            border-radius: 4px;
            transition: .3s all;
        }

        #btnScrollTop:hover {
            background-color: #b90035;
        }

    </style>
@stop
@section('content')

    <div>
        <div class="container" id="adoquinadosCarreteras">
            <div class="lightbox-gallery">
                <div class="container">
                    <div class="intro">
                        <h2 class="text-center">Galeria de {{ config('app.name') }}:</h2>
                        <p class="text-center">
                            Observa un poco de nuestro trabajo.
                        </p>
                    </div>
                    <div class="list-group mb-4" id="list-tab" role="tablist">
                        <a class="list-group-item list-group-item-action active" id="gallery1-list" data-bs-toggle="list"
                            href="#gallery1" role="tab" aria-controls="gallery1">Enlosetados</a>
                        <a class="list-group-item list-group-item-action" id="gallery2-list" data-bs-toggle="list"
                            href="#gallery2" role="tab" aria-controls="gallery2">Adoquines</a>
                        <a class="list-group-item list-group-item-action" id="gallery3-list" data-bs-toggle="list"
                            href="#gallery3" role="tab" aria-controls="gallery3">Asfaltos (parte 1)</a>
                        <a class="list-group-item list-group-item-action" id="gallery4-list" data-bs-toggle="list"
                            href="#gallery4" role="tab" aria-controls="gallery4">Asfaltos (parte 2)</a>
                        <a class="list-group-item list-group-item-action" id="gallery5-list" data-bs-toggle="list"
                            href="#gallery5" role="tab" aria-controls="gallery5">Maquinaria en Caminos</a>
                        <a class="list-group-item list-group-item-action" id="gallery6-list" data-bs-toggle="list"
                            href="#gallery6" role="tab" aria-controls="gallery6">Preparación de Caminos</a>
                        <a class="list-group-item list-group-item-action" id="gallery7-list" data-bs-toggle="list"
                            href="#gallery7" role="tab" aria-controls="gallery7">Trabajos en Provincia</a>
                    </div>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="gallery1" role="tabpanel"
                            aria-labelledby="gallery1-list">
                            <div class="row photos">
                                @foreach (File::glob(public_path('img/recursos/adoquinados-carreteras') . '/*') as $img)
                                    <div class="col-sm-6 col-md-4 col-lg-3 item">
                                        <a href="{{ str_replace(public_path(), '', $img) }}" data-lightbox="photos">
                                            <img class="img-fluid" src="{{ str_replace(public_path(), '', $img) }}">
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane fade" id="gallery2" role="tabpanel" aria-labelledby="gallery2-list">
                            <div class="row photos">
                                @foreach (File::glob(public_path('img/recursos/adoquines') . '/*') as $img)
                                    <div class="col-sm-6 col-md-4 col-lg-3 item">
                                        <a href="{{ str_replace(public_path(), '', $img) }}" data-lightbox="photos">
                                            <img class="img-fluid" src="{{ str_replace(public_path(), '', $img) }}">
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane fade" id="gallery3" role="tabpanel" aria-labelledby="gallery3-list">
                            <div class="row photos">
                                @foreach (File::glob(public_path('img/recursos/asfaltos') . '/*') as $img)
                                    <div class="col-sm-6 col-md-4 col-lg-3 item">
                                        <a href="{{ str_replace(public_path(), '', $img) }}" data-lightbox="photos">
                                            <img class="img-fluid" src="{{ str_replace(public_path(), '', $img) }}">
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane fade" id="gallery4" role="tabpanel" aria-labelledby="gallery4-list">
                            <div class="row photos">
                                @foreach (File::glob(public_path('img/recursos/asfaltos-2') . '/*') as $img)
                                    <div class="col-sm-6 col-md-4 col-lg-3 item">
                                        <a href="{{ str_replace(public_path(), '', $img) }}" data-lightbox="photos">
                                            <img class="img-fluid" src="{{ str_replace(public_path(), '', $img) }}">
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane fade" id="gallery5" role="tabpanel" aria-labelledby="gallery5-list">
                            <div class="row photos">
                                @foreach (File::glob(public_path('img/recursos/maquinaria-asfaltos') . '/*') as $img)
                                    <div class="col-sm-6 col-md-4 col-lg-3 item">
                                        <a href="{{ str_replace(public_path(), '', $img) }}" data-lightbox="photos">
                                            <img class="img-fluid" src="{{ str_replace(public_path(), '', $img) }}">
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane fade" id="gallery6" role="tabpanel" aria-labelledby="gallery6-list">
                            <div class="row photos">
                                @foreach (File::glob(public_path('img/recursos/preparacion-caminos-tierra') . '/*') as $img)
                                    <div class="col-sm-6 col-md-4 col-lg-3 item">
                                        <a href="{{ str_replace(public_path(), '', $img) }}" data-lightbox="photos">
                                            <img class="img-fluid" src="{{ str_replace(public_path(), '', $img) }}">
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane fade" id="gallery7" role="tabpanel" aria-labelledby="gallery7-list">
                            <div class="row photos">
                                @foreach (File::glob(public_path('img/recursos/provincia') . '/*') as $img)
                                    <div class="col-sm-6 col-md-4 col-lg-3 item">
                                        <a href="{{ str_replace(public_path(), '', $img) }}" data-lightbox="photos">
                                            <img class="img-fluid" src="{{ str_replace(public_path(), '', $img) }}">
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <button onclick="topFunction()" id="btnScrollTop" title="Go to top" class="bg-wine">
        <i class="fa fa-arrow-circle-up fa-2x text-white"></i>
    </button>
@stop

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
    <script>
        //Get the button
        var mybutton = document.getElementById("btnScrollTop");
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
@stop
