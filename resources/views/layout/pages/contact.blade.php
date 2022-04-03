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
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <img src="{{asset('img/gerente.png')}}" class="img-fluid" alt="">
                    </div>
                    <div class="card-body">
                        <h2 class="text-center">Gerente General</h2>
                        <h3 class="text-center">Propietario</h3>
                        <hr/>
                        <ul class="fs-4">
                            <li>
                                Ing. Alanoca
                            </li>
                            <li>
                                Nro. de Celular. 69951459
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <img src="{{asset('img/rep-legal.jpg')}}" class="img-fluid" alt="">
                    </div>
                    <div class="card-body">
                        <h2 class="text-center">Representante Legal</h2>
                        <h3 class="text-center">Propietario</h3>
                        <hr/>
                        <ul class="fs-4">
                            <li>
                                Lic. Durán
                            </li>
                            <li>
                                Nro. de Celular. 76597147
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
