@extends('layout.base')

@section('styles')
    <style>
        body {
            padding-top: 5rem;
        }

        p {
            text-align: justify;
        }

    </style>
@stop

@section('content')
    <div class="container p-4">
        <div class="card mb-4 zoom-it">
            <div class="card-header bg-dark text-light">
                <h1 style="margin: auto;">
                    <i class="fas fa-circle fa-fw text-info"></i><b> Fabricación de Losetas:</b>
                </h1>
            </div>
            <div class="card-body">
                <p>
                    Nuestras Losetas están fabricadas de acuerdo a normas nacionales e internacionales <b>ISO 9001</b> según
                    el requerimiento del cliente, la fabricación se las realiza a partir del uso del cemento, áridos
                    seleccionados (Grava y Arena) de alto peso especifico (denso) además agregando el color.
                </p>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-center">
                <img src="{{ asset('img/fabricacion-losetas.jpg') }}" alt="">
            </div>
        </div>
        <div class="card mb-4 zoom-it">
            <div class="card-header bg-dark text-light">
                <h1 style="margin: auto;">
                    <i class="fas fa-circle fa-fw text-info"></i><b> Losetas Tipo "S":</b>
                </h1>
            </div>
            <div class="card-body">
                <p>
                    Nuestras losetas tienen forma y dimensiones muy variadas, por lo regular las producimos en moldes de
                    aluminio, concreto, metal, fibra de vidrio, etc. Pudiéndose agrupar en <b>grupos de losetas</b>.
                </p>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-center">
                <div class="rounded-circle overflow-hidden shadow-lg" style="width: max-content;">
                    <img src="{{ asset('img/loseta-s.jpg') }}" alt="">
                </div>
            </div>
        </div>
        <div class="card zoom-it">
            <div class="card-header bg-dark text-light">
                <h1 style="margin: auto;">
                    <i class="fas fa-circle fa-fw text-info"></i><b> Grupos de Losetas:</b>
                </h1>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12 col-lg-4">
                        <div class="list-group" id="list-tab" role="tablist">
                            <a class="list-group-item list-group-item-action active" id="kastrup" data-bs-toggle="list"
                                href="#kestrup" role="tab" aria-controls="kestrup">Kastrup</a>
                            <a class="list-group-item list-group-item-action" id="rectangular-list" data-bs-toggle="list"
                                href="#rectangular" role="tab" aria-controls="rectangular">Rectangular</a>
                            <a class="list-group-item list-group-item-action" id="ondulada-s-list" data-bs-toggle="list"
                                href="#ondulada-s" role="tab" aria-controls="ondulada-s">Ondulada "S"</a>
                            <a class="list-group-item list-group-item-action" id="hexagonal-list" data-bs-toggle="list"
                                href="#hexagonal" role="tab" aria-controls="hexagonal">Hexagonal - Tipo 1</a>
                            <a class="list-group-item list-group-item-action" id="hexagonal-list" data-bs-toggle="list"
                                href="#hexagonal-2" role="tab" aria-controls="hexagonal-2">Hexagonal - Tipo 2</a>
                            <a class="list-group-item list-group-item-action" id="venus-list" data-bs-toggle="list"
                                href="#venus" role="tab" aria-controls="venus">Venus</a>
                            <a class="list-group-item list-group-item-action" id="tipo1-list" data-bs-toggle="list"
                                href="#tipo1" role="tab" aria-controls="venus">Tipo - 1</a>
                        </div>
                    </div>
                    <div class="col-sm-12  col-lg-8">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="kestrup" role="tabpanel" aria-labelledby="kastrup">
                                <div class="card">
                                    <div class="card-body d-flex align-items-center justify-content-center">
                                        <img src="{{ asset('img/recursos/adoquines/kastrup.jpg') }}"
                                            class="shadow-lg border-bottom border-2 border-primary" alt="">
                                    </div>
                                    <div class="card-footer">
                                        <ul>
                                            <li>Rendimiento: 12 Pzas/m2</li>
                                            <li>Altura: 10 cm.</li>
                                            <li>Peso aprox. C/Pza. 16kg.</li>
                                            <li>Resistencia característica a la compresión 22 MPa.</li>
                                            <li>Resistencia característica a la flexión 3.6 MPa.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="rectangular" role="tabpanel" aria-labelledby="rectangular-list">
                                <div class="card">
                                    <div class="card-body d-flex align-items-center justify-content-center">
                                        <img src="{{ asset('img/recursos/adoquines/rectangular.jpg') }}"
                                            class="shadow-lg border-bottom border-2 border-primary" alt="">
                                    </div>
                                    <div class="card-footer">
                                        <ul>
                                            <li>Rendimiento: 20 Pzas/m2</li>
                                            <li>Altura: 10 cm.</li>
                                            <li>Peso aprox. C/Pza. 10 kg.</li>
                                            <li>Resistencia característica a la compresión 22 MPa.</li>
                                            <li>Resistencia característica a la flexión 3.6 MPa.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="ondulada-s" role="tabpanel" aria-labelledby="ondulada-s-list">
                                <div class="card">
                                    <div class="card-body d-flex align-items-center justify-content-center">
                                        <img src="{{ asset('img/recursos/adoquines/ondulada-s.jpg') }}"
                                            class="shadow-lg border-bottom border-2 border-primary" alt="">
                                    </div>
                                    <div class="card-footer">
                                        <ul>
                                            <li>Rendimiento: 32 Pzas/m2</li>
                                            <li>Altura: 10 cm.</li>
                                            <li>Peso aprox. C/Pza. 7kg.</li>
                                            <li>Resistencia característica a la compresión 22 MPa.</li>
                                            <li>Resistencia característica a la flexión 3.6 MPa.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="hexagonal" role="tabpanel" aria-labelledby="hexagonal-list">
                                <div class="card">
                                    <div class="card-body d-flex align-items-center justify-content-center">
                                        <img src="{{ asset('img/recursos/adoquines/exagonal.jpg') }}"
                                            class="shadow-lg border-bottom border-2 border-primary" alt="">
                                    </div>
                                    <div class="card-footer">
                                        <ul>
                                            <li>Rendimiento: 12 Pzas/m2</li>
                                            <li>Altura: 10 cm.</li>
                                            <li>Peso aprox. C/Pza. 17kg.</li>
                                            <li>Resistencia característica a la compresión 22 MPa.</li>
                                            <li>Resistencia característica a la flexión 3.6 MPa.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="hexagonal-2" role="tabpanel" aria-labelledby="hexagonal-2-list">
                                <div class="card">
                                    <div class="card-body d-flex align-items-center justify-content-center">
                                        <img src="{{ asset('img/recursos/adoquines/exagonal-2.jpg') }}"
                                            class="shadow-lg border-bottom border-2 border-primary" alt="">
                                    </div>
                                    <div class="card-footer">
                                        <ul>
                                            <li>Rendimiento: 12 Pzas/m2</li>
                                            <li>Altura: 10 cm.</li>
                                            <li>Peso aprox. C/Pza. 9kg.</li>
                                            <li>Resistencia característica a la compresión 22 MPa.</li>
                                            <li>Resistencia característica a la flexión 3.6 MPa.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="venus" role="tabpanel" aria-labelledby="venus-list">
                                <div class="card">
                                    <div class="card-body d-flex align-items-center justify-content-center">
                                        <img src="{{ asset('img/recursos/adoquines/venus.jpg') }}"
                                            class="shadow-lg border-bottom border-2 border-primary" alt="">
                                    </div>
                                    <div class="card-footer">
                                        <ul>
                                            <li>Rendimiento: 12 Pzas/m2</li>
                                            <li>Altura: 10 cm.</li>
                                            <li>Peso aprox. C/Pza. 18kg.</li>
                                            <li>Resistencia característica a la compresión 22 MPa.</li>
                                            <li>Resistencia característica a la flexión 3.6 MPa.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tipo1" role="tabpanel" aria-labelledby="tipo1-list">
                                <div class="card">
                                    <div class="card-body d-flex align-items-center justify-content-center">
                                        <img src="{{ asset('img/recursos/adoquines/tipo1.jpg') }}"
                                            class="shadow-lg border-bottom border-2 border-primary" alt="">
                                    </div>
                                    <div class="card-footer">
                                        <ul>
                                            <li>Rendimiento: 24 Pzas/m2</li>
                                            <li>Altura: 10 cm.</li>
                                            <li>Peso aprox. C/Pza. 6kg.</li>
                                            <li>Resistencia característica a la compresión 22 MPa.</li>
                                            <li>Resistencia característica a la flexión 3.6 MPa.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">

            </div>
        </div>
    </div>
@stop
