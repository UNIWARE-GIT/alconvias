@extends('layout.base')

@section('styles')
    <style>
        body {
            padding-top: 5rem;
        }

        p {
            text-align: justify;
        }

        ul {
            list-style: none;
        }

    </style>
@stop

@section('content')
    <div class="container p-4">
        <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-center">
                <img src="https://www.lapaz.bo/wp-content/uploads/2021/10/logo_gamlp_2021.jpg" class="img-fluid" alt="">
            </div>
            <div class="card-body">
                <div>
                    <ul class="fs-3">
                        <li>
                            <i class="fas fa-hammer text-warning"></i> <span>Plaza Peñas</span>
                        </li>
                        <li>
                            <i class="fas fa-hammer text-warning"></i> Plaza Chigmuni
                        </li>
                        <li>
                            <i class="fas fa-hammer text-warning"></i> Acera J&l
                        </li>
                        <li>
                            <i class="fas fa-hammer text-warning"></i> Acera Calle México
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <img src="https://www.elaltoesnoticia.com/wp-content/uploads/2017/06/Banner-GAMEA.jpg" class="img-fluid"
                    alt="">
            </div>
            <div class="card-body">
                <div>
                    <ul class="fs-3">
                        <li>
                            <i class="fas fa-hammer text-warning"></i> Av. Tihuanacu
                        </li>
                        <li>
                            <i class="fas fa-hammer text-warning"></i> Unidad Radio Patrulla 110 Villa Tunari
                        </li>
                        <li>
                            <i class="fas fa-hammer text-warning"></i> Calle L. de la Vega
                        </li>
                        <li>
                            <i class="fas fa-hammer text-warning"></i> Patio de la Alcaldía de El Alto
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-center">
                <img src="https://www.lostiempos.com/sites/default/files/media_imagen/2021/10/13/okkkkgamc.jpg"
                    class="img-fluid" alt="">
            </div>
            <div class="card-body">
                <div>
                    <ul class="fs-3">
                        <li>
                            <i class="fas fa-hammer text-warning"></i> Hospital del niño en Cochabamba
                        </li>
                        <li>
                            <i class="fas fa-hammer text-warning"></i> Estación de servicios Cochabamba
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@stop
