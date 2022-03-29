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
        <div>
            <div class="card mb-4 shadow-lg zoom-it">
                <div class="card-header bg-wine text-light">
                    <h1 style="margin: auto;">
                        <i class="fas fa-circle fa-fw text-info"></i><b> Contrucciones:
                    </h1>
                </div>
                <div class="card-body">
                    <ul>
                        <li>
                            Edificios.
                        </li>
                        <li>
                            Salones.
                        </li>
                        <li>
                            Cholet.
                        </li>
                        <li>
                            Etc.
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card mb-4 shadow-lg zoom-it">
                <div class="card-header bg-wine text-light">
                    <h1 style="margin: auto;">
                        <i class="fas fa-circle fa-fw text-info"></i><b> Tratamientos Asfálticos Superficiales:
                    </h1>
                </div>
                <div class="card-body">
                    <p>
                        Consiste en la colocación de una capa de revestimiento de poco espesor, formada por riegos sucesivos
                        y alternados de material bituminoso y agregados pétreos. La que no da un refuerzo de estructura sino
                        simplemente protege la base de la acción del tiempo y del desgaste. Los tratamientos superficiales
                        no corrigen depresiones, ni deformaciones, ni agrietamientos fuertes, solamente logran una capa
                        impermeable.
                    </p>
                    <p>
                        La ventaja en el uso de estos es que permiten construir una carpeta por etapas, en forma
                        relativamente sencilla y sin el uso de equipos sofisticados.
                    </p>
                </div>
            </div>
            <div class="card mb-4 shadow-lg zoom-it">
                <div class="card-header bg-wine text-light">
                    <h1 style="margin: auto;">
                        <i class="fas fa-circle fa-fw text-info"></i><b> Tipos de Tratamientos:
                    </h1>
                </div>
                <div class="card-body shadow-lg">
                    <div class="row p-4">
                        <div class="col-md-7 col-sm-12 border-bottom border-2 border-primary p-2">
                            <div class="list-group" id="list-tab" role="tablist">
                                <a class="list-group-item list-group-item-action active" id="t1-list" data-bs-toggle="list"
                                    href="#t1" role="tab" aria-controls="t1">
                                    Tratamientos superficiales con aplicación de asfalto y distribución de agregados.
                                </a>
                                <a class="list-group-item list-group-item-action" id="t2-list" data-bs-toggle="list"
                                    href="#t2" role="tab" aria-controls="t2">
                                    Tratamientos Superficiales Simples (TSS).
                                </a>
                                <a class="list-group-item list-group-item-action" id="t3-list" data-bs-toggle="list"
                                    href="#t3" role="tab" aria-controls="t3">
                                    Tratamientos Superficiales Dobles (TSD).
                                </a>
                                <a class="list-group-item list-group-item-action" id="t4-list" data-bs-toggle="list"
                                    href="#t4" role="tab" aria-controls="t4">
                                    Riego de Imprimación.
                                </a>
                                <a class="list-group-item list-group-item-action" id="t5-list" data-bs-toggle="list"
                                    href="#t5" role="tab" aria-controls="t5">
                                    Paliativos de polvo
                                </a>
                                <a class="list-group-item list-group-item-action" id="t6-list" data-bs-toggle="list"
                                    href="#t6" role="tab" aria-controls="t6">
                                    Road rolling
                                </a>
                                <a class="list-group-item list-group-item-action" id="t7-list" data-bs-toggle="list"
                                    href="#t7" role="tab" aria-controls="t7">
                                    Riegos de liga
                                </a>
                                <a class="list-group-item list-group-item-action" id="t8-list" data-bs-toggle="list"
                                    href="#t8" role="tab" aria-controls="t8">
                                    Riego pulverizado (Fog seal)
                                </a>
                                <a class="list-group-item list-group-item-action" id="t9-list" data-bs-toggle="list"
                                    href="#t9" role="tab" aria-controls="t9">
                                    Lechadas asfálticas
                                </a>
                                <a class="list-group-item list-group-item-action" id="t10-list" data-bs-toggle="list"
                                    href="#t10" role="tab" aria-controls="t10">
                                    Telford
                                </a>
                                <a class="list-group-item list-group-item-action" id="t11-list" data-bs-toggle="list"
                                    href="#t11" role="tab" aria-controls="t11">
                                    Macadam Asfáltico
                                </a>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-12 d-flex align-items-center justify-content-center">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="t1" role="tabpanel" aria-labelledby="t1-list">
                                    <div class="card">
                                        <div class="card-body">
                                            <p>
                                                Los tratamientos asfalticos abarcan desde una simple y ligera aplicación de
                                                cemento asfáltico o emulsión bituminosa, a múltiples aplicaciones de
                                                materiales
                                                asfálticos sobre las que se distribuyen agregados pétreos.
                                                También se consideran tratamientos asfalticos superficiales algunos tipos de
                                                mezcla asfáltica-agregados. Todos los tratamientos superficiales sellan y
                                                prolongan la vida de los caminos. Cada tipo tiene una o más propósitos
                                                especiales.

                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="t2" role="tabpanel" aria-labelledby="t2-list">
                                    <div class="card">
                                        <div class="card-body">
                                            <p>
                                                Consiste en una sola aplicación uniformemente distribuida de ligante
                                                bituminoso, seguido de una aplicación de árido de tamaño tan uniforme como
                                                sea posible. Esta se realiza sobre una superficie acondicionada y con una
                                                estructura apropiada a las condiciones de so¬licitación a que va a estar
                                                expuesta.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="t3" role="tabpanel" aria-labelledby="t3-list">
                                    <div class="card">
                                        <div class="card-body">
                                            <p>
                                                Son dos riegos alternados y uniformemente distribuidos de ligante bituminoso
                                                y árido so¬bre una superficie acondicionada previamen¬te. El tamaño medio
                                                del árido de cada distribu¬ción sucesiva es la mitad o menos del tamaño
                                                medio de la capa precedente. El espesor total es aproximadamente igual al
                                                tamaño máximo nominal del árido de la primera aplicación.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="t4" role="tabpanel" aria-labelledby="t4-list">
                                    <div class="card">
                                        <div class="card-body">
                                            <p>
                                                Es una aplicación de emulsión asfáltica (de rotura media) o asfalto diluido
                                                (de endurecimiento medio) a una superficie absorbente. Se usa para
                                                preparación de una base no tratada para recibir un riego asfáltico ligante
                                                modificándola y confiriéndola.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="t5" role="tabpanel" aria-labelledby="t5-list">
                                    <div class="card">
                                        <div class="card-body">
                                            <p>
                                                Consiste en la distribución de una emulsión asfáltica de rotura lenta. El
                                                asfalto y el diluyente penetran y cubren las partículas finas, mitigando
                                                temporariamente las molestias ocasionada por el polvo. Cuando se emplean
                                                emulsiones, se debe diluir con agua en cinco o más partes, en volumen. El
                                                riego paliativo de polvo con emulsiones diluidas requiere generalmente de
                                                varias aplicaciones.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="t6" role="tabpanel" aria-labelledby="t6-list">
                                    <div class="card">
                                        <div class="card-body">
                                            El objetivo de este tipo de riego es lograr una subrasante fuerte que no se
                                            sature con el agua y pueda servir a su vez como superficie de rodamiento firme y
                                            libre de polvo.
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="t7" role="tabpanel" aria-labelledby="t7-list">
                                    <div class="card">
                                        <div class="card-body">
                                            <p>
                                                El riego de liga es una aplicación de emulsión (de rotura rápida) sobre un
                                                pavimento existente para asegurar la adherencia entre la superficie vieja y
                                                la nueva capa asfáltica. Debe ser muy delgado y cubrir uniformemente el área
                                                a pavimentar.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="t8" role="tabpanel" aria-labelledby="t8-list">
                                    <div class="card">
                                        <div class="card-body">
                                            <p>
                                                Aplicación muy ligera de emulsión diluida de rotura lenta. Se utiliza para
                                                renovar pavimentos viejos, y cerrar grietas y huecos superficiales. También
                                                se lo utiliza para sellar huecos en mezclas asfálticas nuevas y evitar la
                                                producción de polvo en tratamientos superficiales.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="t9" role="tabpanel" aria-labelledby="t9-list">
                                    <div class="card">
                                        <div class="card-body">
                                            <p>
                                                Es una mezcla compuesta por una emulsión asfáltica de quiebre lento, árido
                                                bien graduado, filler, agua y eventualmente aditivos. Es una mezcla de
                                                consistencia fluida, capaz de penetrar y sellar grietas y defectos menores.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="t10" role="tabpanel" aria-labelledby="t10-list">
                                    <div class="card">
                                        <div class="card-body">
                                            <p>
                                                Esta es otra estructura de piedras similar al macadam, diferenciándose en
                                                que en el Telford se usa grandes piedras (no trituradas) planas, las cuales
                                                se acomodan en posición de equilibrio manualmente.
                                                El Telford perdió importancia debido a que produce una superficie de
                                                rodadura incomoda para el vehículo moderno; de ahí su uso muy limitado.

                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="t11" role="tabpanel" aria-labelledby="t11-list">
                                    <div class="card">
                                        <div class="card-body">
                                            <p>
                                                Consiste en la construcción de una superficie de rodado de un camino usando
                                                3 capas de diferentes tamaños de agregados, colocando la más gruesa abajo y
                                                la más fina arriba para luego ser compactada.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-4 shadow-lg zoom-it">
                <div class="card-header bg-wine text-light">
                    <h1 style="margin: auto;">
                        <i class="fas fa-circle fa-fw text-info"></i><b> Funciones de los Tratamientos Asfálticos
                            Superficiales:
                    </h1>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center">
                            <p>
                                Un tratamiento asfaltico superficial por sí mismo no es considerado un pavimento.
                                Básicamente brinda una cubierta impermeable a la superficie existente de la calzada y
                                resistencia abrasiva del tránsito. Algunas de las funciones más comunes con:
                            </p>
                        </div>
                        <div class="col-sm-12 col-md-5">
                            <ol>
                                <li>
                                    Proveer una superficie económica y duradera para caminos con bases granulares que tienen
                                    tránsitos ligeros y de mediano volumen.
                                </li>

                                <li>
                                    Prevenir la penetración superficial de agua en bases granulares y pavimentos viejos que
                                    han comenzado a desintegrarse por el tiempo o a fisurarse.
                                </li>

                                <li>
                                    Rellanar huecos, recubrir y ligar partículas minerales desprendidas y restaurar la
                                    superficie del pavimento.
                                </li>

                                <li>
                                    Renovar superficies y restaurar la resistencia al deslizamiento de pavimentos
                                    deteriorados
                                    por el tránsito en los cuales los agregados superficiales han comenzado a pulirse.
                                </li>
                                <li>
                                    Restaurar capas de rodamientos afectadas por los agentes climáticos y dar nueva vida a
                                    superficies de pavimentos resecas.
                                </li>

                                <li>
                                    Proveer una cubierta temporaria en los casos de construcción de pavimentos incompletos y
                                    demorados o cuando se trata de una construcción por etapas.
                                </li>

                                <li>
                                    Paliar el polvo.
                                </li>
                                <li>
                                    Asegurar la adherencia de las capas asfálticas superiores con las bases granulares
                                    (riego de imprimación).
                                </li>
                                <li>
                                    Asegurar la trabazón entre la superficie que está siendo pavimentada y la capa superior
                                    (riego de liga).
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-4 shadow-lg zoom-it">
                <div class="card-header bg-wine text-light">
                    <h1 style="margin: auto;">
                        <i class="fas fa-circle fa-fw text-info"></i><b> Maquinaria:
                    </h1>
                </div>
                <div class="card-body">
                    <div class="row p-4">
                        <div class="col-sm-12 col-md-6">
                            <div class="list-group" id="list-tab" role="tablist">
                                <a class="list-group-item list-group-item-action active" id="c1-list" data-bs-toggle="list"
                                    href="#c1" role="tab" aria-controls="c1">
                                    Camión regador de asfalto.
                                </a>
                                <a class="list-group-item list-group-item-action" id="c2-list" data-bs-toggle="list"
                                    href="#c2" role="tab" aria-controls="c2">
                                    Gravilladora.
                                </a>
                                <a class="list-group-item list-group-item-action" id="c3-list" data-bs-toggle="list"
                                    href="#c3" role="tab" aria-controls="c3">
                                    Rodillo Metálico Liso
                                </a>
                                <a class="list-group-item list-group-item-action" id="c4-list" data-bs-toggle="list"
                                    href="#c4" role="tab" aria-controls="c4">
                                    Barredora
                                </a>
                                <a class="list-group-item list-group-item-action" id="c5-list" data-bs-toggle="list"
                                    href="#c5" role="tab" aria-controls="c5">
                                    Compactador Neumático
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="c1" role="tabpanel" aria-labelledby="c1-list">
                                    <div class="card">
                                        <div class="card-header">
                                            <img src="http://e-asfalto.com/ingles/hotackdistributor/tackhot2000.JPG"
                                                class="img-fluid rounded" alt="" />
                                        </div>
                                        <div class="card-body">
                                            <p>
                                                Está constituido por un camión o semirremolque sobre el que se monta un
                                                tanque aislado. Algunos distribuidores están equipados con un sistema de
                                                calentamiento que consiste, en general, en un quemador de gas-oil.

                                                El distribuidor está provisto de una motobomba, capaz de manejar productos
                                                que varían desde asfaltos líquidos muy ligeros, que se aplican en frío, como
                                                las emulsiones bituminosas, hasta cementos asfálticos muy viscosos, que
                                                deben calentarse para obtener la viscosidad de riego.

                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="c2" role="tabpanel" aria-labelledby="c2-list">
                                    <div class="card">
                                        <div class="card-header">
                                            <img src="http://victoryepes.blogs.upv.es/files/2019/04/gravilladora-hidrostatica-rosco-11.jpg"
                                                class="img-fluid rounded" alt="" />
                                        </div>
                                        <div class="card-body">
                                            <p>
                                                El equipo que le sigue en importancia al distribuidor de asfalto es la
                                                gravilladora. En este los distribuidores pueden variar desde un tipo
                                                sencillo unido al fondo de la caja del camión, hasta una unidad
                                                autopropulsada de gran rendimiento.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="c3" role="tabpanel" aria-labelledby="c3-list">
                                    <div class="card">
                                        <div class="card-header">
                                            <img src="https://rdv-files.nyc3.cdn.digitaloceanspaces.com/pub/html/files_html/3/1/0/000723105.jpg"
                                                class="img-fluid rounded" style="margin: auto; width: 100%;" alt="" />
                                        </div>
                                        <div class="card-body">
                                            <p>
                                                Está constituido por un camión o semirremolque sobre el que se monta un
                                                tanque aislado. Algunos distribuidores están equipados con un sistema de
                                                calentamiento que consiste, en general, en un quemador de gas-oil.

                                                El distribuidor está provisto de una motobomba, capaz de manejar productos
                                                que varían desde asfaltos líquidos muy ligeros, que se aplican en frío, como
                                                las emulsiones bituminosas, hasta cementos asfálticos muy viscosos, que
                                                deben calentarse para obtener la viscosidad de riego.

                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="c4" role="tabpanel" aria-labelledby="c4-list">
                                    <div class="card">
                                        <div class="card-header">
                                            <img src="https://www.eivmaquinaria.com/uploads/5/1/5/8/51584447/s514058444989793121_p746_i1_w2560.jpeg"
                                                class="img-fluid rounded" alt="" />
                                        </div>
                                        <div class="card-body">
                                            <p>
                                                Sopladora mecánica o manual Es aquella maquina que se encarga de romper y
                                                luego limpiar los escombros.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="c5" role="tabpanel" aria-labelledby="c5-list">
                                    <div class="card">
                                        <div class="card-header">
                                            <img src="https://www.manualesdetodo.net/wp-content/uploads/2021/12/manual-compactador-neumatico-ps360c-1200x675.jpg"
                                                class="img-fluid rounded" alt="" />
                                        </div>
                                        <div class="card-body">
                                            <p>
                                                Para el acabado final, con presión de inflado en las llantas superior a 7
                                                Kg/cm2.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-4 shadow-lg zoom-it">
                <div class="card-header bg-wine text-light">
                    <h1 style="margin: auto;">
                        <i class="fas fa-circle fa-fw text-info"></i><b> Obras de Arte y Drenaje de Carreteras:
                    </h1>
                </div>
                <div class="card-body">
                    <p>
                        Las obras de drenaje son elementos estructurales que eliminan la inaccesibilidad de un camino,
                        provocada por el agua o la humedad.
                    </p>
                    <h3>Los objetivos primordiales de las obras de drenaje son:</h3>
                    <ol>
                        <li>
                            Dar salida al agua que se llegue a acumular en el camino.
                        </li>

                        <li>
                            Reducir o eliminar la cantidad de agua que se dirija hacia el camino.
                        </li>

                        <li>
                            Evitar que el agua provoque daños estructurales.
                        </li>
                    </ol>
                </div>
            </div>
            <div class="card mb-4 shadow-lg zoom-it">
                <div class="card-header bg-wine text-light">
                    <h1 style="margin: auto;">
                        <i class="fas fa-circle fa-fw text-info"></i><b> Laboratorios de Suelos:
                    </h1>
                </div>
                <div class="card-body">
                    <div>
                        <h3><i class="fas fa-search-location fa-fw"></i> - Estudio "In Situ":</h3>
                        <p>
                            Como su nombre lo indica, son los estudios que se realizan directamente sobre el terreno, donde
                            se busca trabajar con muestras extraídas directamente del suelo, evitando la dificultad de hacer
                            llegar una muestra inalterada a un laboratorio.
                        </p>
                        <ul>
                            <li>
                                SPT - Ensayo de penetración estándar (Standard Penetration Test)
                            </li>
                            <li>
                                CPT - Ensayo de penetración estática (Cone Penetration Test)
                            </li>
                            <li>
                                VST - Ensayo de Molinete (también conocido como Vane Teste)
                            </li>
                            <li>
                                Ensayo presiométrico
                            </li>
                            <li>
                                DMT - Dilatómetro plano Marchetti
                            </li>
                            <li>
                                Ensayo de placa de carga
                            </li>
                            <li>
                                Esclerómetro Schmidt
                            </li>
                            <li>
                                PLT - Ensayo de carga puntual
                            </li>
                            <li>
                                Ensayos de bombeo
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h3><i class="fas fa-flask fa-fw"></i> - Ensayos en laboratorio </h3>
                        <p>
                            Son todos aquello ensayos que permiten estudiar las propiedades del suelo a través de muestras,
                            lo más inalteradas posibles, provenientes del terreno objeto de análisis; y se realizan en
                            ambientes controlados, dentro de un laboratorio.
                        </p>
                        <ul>
                            <li>
                                De identificación y estado ( tamizado, sedimentación, humedad, densidad, permeabilidad,
                                etc.)
                            </li>
                            <li>
                                De resistencia (compresión, corte y ensayo triaxial)
                            </li>
                            <li>
                                De deformabilidad (edométrico)
                            </li>
                            <li>
                                De compactación y reutilización (ensayo Próctor y CBR)
                            </li>
                            <li>
                                En rocas (durabilidad, resistencia, densidad, absorción, etc.)
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card mb-4 shadow-lg zoom-it">
                <div class="card-header bg-wine text-light">
                    <h1 style="margin: auto;">
                        <i class="fas fa-circle fa-fw text-info"></i><b> ¿No está lo que necesitas?
                    </h1>
                </div>
                <div class="card-body d-flex align-items-center justify-content-center">
                    <a href="{{ route('contacts') }}" class="btn btn-outline-success">Contáctanos</a>
                </div>
            </div>
        </div>
    @stop
