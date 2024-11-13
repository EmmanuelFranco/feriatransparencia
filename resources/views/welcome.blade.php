@extends('layouts.app')

@section('content')
    @include('header')


    <div class="row mt-4 justify-content-center">
        <div class="col-lg-2 col-md-4 col-sm-6 text-center">
            <div class="icon-square mx-auto mb-3">
                <img src="{{ asset('storage/STANDS  TECNOLOGÍA PARA TRANSPARENCIA.jpg') }}" alt="Tecnologías"
                    class="img-fluid">
            </div>

            <div class="btn-group dropend">
                <button type="button" class="btn btn-setic dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Ver más
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/setic">SETIC</a></li>
                    <li><a class="dropdown-item" href="#">Transparencia</a></li>
                    <li><a class="dropdown-item" href="#">Telepacifico</a></li>
                    <li><a class="dropdown-item" href="/desarrollo">Desarrollo económico</a></li>
                    <li><a class="dropdown-item" href="#">Planeaciones</a></li>
                    <li><a class="dropdown-item" href="#">Hacienda</a></li>
                    <li><a class="dropdown-item" href="#">Infraestructura</a></li>
                </ul>
            </div>

        </div>
        <div class="col-lg-2 col-md-4 col-sm-6">
            <div class="icon-square mx-auto mb-3">
                <img src="{{ asset('storage/STANDS  PARTICIPACIÓN Y CONTROL.jpg') }}" alt="Tecnologías" class="img-fluid">
            </div>

            <div class="btn-group dropend">
                <button type="button" class="btn btn-codigo dropdown-toggle" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Ver más
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/setic">SETIC</a></li>
                    <li><a class="dropdown-item" href="#">Transparencia</a></li>
                    <li><a class="dropdown-item" href="#">Telepacifico</a></li>
                    <li><a class="dropdown-item" href="/desarrollo">Desarrollo económico</a></li>
                    <li><a class="dropdown-item" href="#">Planeaciones</a></li>
                    <li><a class="dropdown-item" href="#">Hacienda</a></li>
                    <li><a class="dropdown-item" href="#">Infraestructura</a></li>
                </ul>
            </div>

        </div>

        <div class="col-lg-2 col-md-4 col-sm-6">
            <div class="icon-square mx-auto mb-3">
                <img src="{{ asset('storage/STANDS OBSERVATORIO AL SERVICIO.jpg') }}" alt="Tecnologías" class="img-fluid">
            </div>


            <div class="btn-group dropend">
                <button type="button" class="btn btn-participacion dropdown-toggle" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Ver más
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/setic">SETIC</a></li>
                    <li><a class="dropdown-item" href="#">Transparencia</a></li>
                    <li><a class="dropdown-item" href="#">Telepacifico</a></li>
                    <li><a class="dropdown-item" href="/desarrollo">Desarrollo económico</a></li>
                    <li><a class="dropdown-item" href="#">Planeaciones</a></li>
                    <li><a class="dropdown-item" href="#">Hacienda</a></li>
                    <li><a class="dropdown-item" href="#">Infraestructura</a></li>
                </ul>
            </div>

        </div>

        <div class="col-lg-2 col-md-4 col-sm-6">
            <div class="icon-square mx-auto mb-3">
                <img src="{{ asset('storage/STANDS SISTEMA DE ADMINISTRACION.jpg') }}" alt="Tecnologías" class="img-fluid">
            </div>

            <div class="btn-group dropend">
                <button type="button" class="btn btn-administracion dropdown-toggle" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Ver más
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/setic">SETIC</a></li>
                    <li><a class="dropdown-item" href="#">Transparencia</a></li>
                    <li><a class="dropdown-item" href="#">Telepacifico</a></li>
                    <li><a class="dropdown-item" href="/desarrollo">Desarrollo económico</a></li>
                    <li><a class="dropdown-item" href="#">Planeaciones</a></li>
                    <li><a class="dropdown-item" href="#">Hacienda</a></li>
                    <li><a class="dropdown-item" href="#">Infraestructura</a></li>
                </ul>
            </div>

        </div>

        <div class="col-lg-2 col-md-4 col-sm-6">
            <div class="icon-square mx-auto mb-4 mt-5">
                <img src="{{ asset('storage/STANDS  FERIA TRANSPARENCIA.jpg') }}" alt="Tecnologías" class="img-fluid">
            </div>

            <div class="btn-group dropend">
                <button type="button" class="btn btn-informes dropdown-toggle" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Ver más
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/setic">SETIC</a></li>
                    <li><a class="dropdown-item" href="#">Transparencia</a></li>
                    <li><a class="dropdown-item" href="#">Telepacifico</a></li>
                    <li><a class="dropdown-item" href="/desarrollo">Desarrollo económico</a></li>
                    <li><a class="dropdown-item" href="#">Planeaciones</a></li>
                    <li><a class="dropdown-item" href="#">Hacienda</a></li>
                    <li><a class="dropdown-item" href="#">Infraestructura</a></li>
                </ul>
            </div>
        </div>
    </div>
    </div>



    <div class="container mt-4 text-center">
        <div class="row">
            <div class="col-8"></div>
            <div class="col-4">
                <p class="fs-3 mt-2 mb-2">Temáticas</p>
            </div>
        </div>
        <div class="row">
            <div class="col-8">
                <img src="{{ asset('storage/PORTADA5.png') }}" class="img-fluid" alt="...">
            </div>
            <div class="col-4">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseOne" aria-expanded="false"
                                aria-controls="flush-collapseOne">
                                Tecnología e Innovación
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Seguimos esperando información de parte de las SEcretarías,
                                para llenar estos espacios.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                aria-controls="flush-collapseTwo">
                                Observatorio
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Seguimos esperando información de parte de las SEcretarías,
                                para llenar estos espacios.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseThree" aria-expanded="false"
                                aria-controls="flush-collapseThree">
                                Participación Ciudadana
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Seguimos esperando información de parte de las SEcretarías,
                                para llenar estos espacios</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseFour" aria-expanded="false"
                                aria-controls="flush-collapseFour">
                                Código de integridad
                            </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Seguimos esperando información de parte de las SEcretarías,
                                para llenar estos espacios</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseFive" aria-expanded="false"
                                aria-controls="flush-collapseFive">
                                Resultados
                            </button>
                        </h2>
                        <div id="flush-collapseFive" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Seguimos esperando información de parte de las SEcretarías,
                                para llenar estos espacios</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseSix" aria-expanded="false"
                                aria-controls="flush-collapseSix">
                                Informe general feria
                            </button>
                        </h2>
                        <div id="flush-collapseSix" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Seguimos esperando información de parte de las SEcretarías,
                                para llenar estos espacios</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--  @include('modalprincipal') --}}


    <div class="modal fade" id="autoModal" tabindex="-1" aria-labelledby="autoModalLabel" aria-hidden="true">
        <div class="modal-dialog custom-modal">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="autoModalLabel">Popup de Transmisión en Vivo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="{{ asset('storage/BANNER WEB TRANSPARENCIA.jpg') }}" class="img-fluid"
                        alt="Imagen del popup">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-custom-close" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-sm btn-custom-action">Ir al Live</button>
                </div>
            </div>
        </div>
    </div>
@endsection
