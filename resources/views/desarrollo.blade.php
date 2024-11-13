<x-layout> 

    @include('header')

    <div class="container text-center">
        <p class="fs-2 mt-2 mb-4 title-desarrollo">Secretaría de Desarrollo Económico y Competitividad</p>
        <div class="container text-center">
            <div class="row mt-4">
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <img src="{{ asset('storage/LOGROS VALLEMPLEA.jpeg') }}" class="img-fluid" alt="Imagen 1" data-bs-toggle="modal" data-bs-target="#imageModal1" style="cursor: pointer;">
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <img src="{{ asset('storage/LOGROS VALLEMPLEA1.jpeg') }}" class="img-fluid" alt="Imagen 2" data-bs-toggle="modal" data-bs-target="#imageModal2" style="cursor: pointer;">
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <img src="{{ asset('storage/NIDO.jpeg') }}" class="img-fluid" alt="Imagen 3" data-bs-toggle="modal" data-bs-target="#imageModal3" style="cursor: pointer;">
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <img src="{{ asset('storage/HUB ECOMMERCE.jpeg') }}" class="img-fluid" alt="Imagen 4" data-bs-toggle="modal" data-bs-target="#imageModal4" style="cursor: pointer;">
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <img src="{{ asset('storage/MEETUPS.jpeg') }}" class="img-fluid" alt="Imagen 5" data-bs-toggle="modal" data-bs-target="#imageModal5" style="cursor: pointer;">
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <img src="{{ asset('storage/Fotograma de logros Vallemplea.png') }}" class="img-fluid" alt="Ver Video de Logros" data-bs-toggle="modal" data-bs-target="#videoModal1" style="cursor: pointer;">
                </div>
                <!--<div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <img src="{{ asset('ruta/a/tu/otra_imagen_video.jpg') }}" class="img-fluid" alt="Ver Otro Video" data-bs-toggle="modal" data-bs-target="#videoModal2" style="cursor: pointer;">
                </div>-->
            </div>
        </div>
        
        <!-- Modales para cada imagen -->
        <div class="modal fade" id="imageModal1" tabindex="-1" aria-labelledby="imageModalLabel1" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="imageModalLabel1">Imagen 1</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label='Close'></button>
                    </div>
                    <div class='modal-body'>
                        <img src='{{ asset('storage/LOGROS VALLEMPLEA.jpeg') }}' class='img-fluid' alt='Imagen 1 ampliada'>
                    </div>
                    <div class='modal-footer'>
                        <button type='button' class='btn btn-custom-close' data-bs-target='#videoModal1' data-bs-toggle='modal'>Anterior</button>
                        <button type='button' class='btn btn-custom-action' data-bs-target='#imageModal2' data-bs-toggle='modal'>Siguiente</button>
                    </div>
                </div>
            </div>
        </div>
        
        <div class='modal fade' id='imageModal2' tabindex='-1' aria-labelledby='imageModalLabel2' aria-hidden='true'>
            <div class='modal-dialog modal-lg'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 class='modal-title' id='imageModalLabel2'>Imagen 2</h5>
                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                    </div>
                    <div class='modal-body'>
                        <img src='{{ asset('storage/LOGROS VALLEMPLEA1.jpeg') }}' class='img-fluid' alt='Imagen 2 ampliada'>
                    </div>
                    <div class='modal-footer'>
                        <button type='button' class='btn btn-custom-close'data-bs-target='#imageModal1' data-bs-toggle='modal'>Anterior</button>
                        <button type='button' class='btn btn-custom-action' data-bs-target='#imageModal3' data-bs-toggle='modal'>Siguiente</button>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="modal fade" id="imageModal3" tabindex="-1" aria-labelledby="imageModalLabel3" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="imageModalLabel3">Imagen 3</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img src="{{ asset('storage/NIDO.jpeg') }}" class="img-fluid" alt="Imagen 3 ampliada">
                    </div>
                    <div class='modal-footer'>
                        <button type='button' class='btn btn-custom-close'data-bs-target='#imageModal2' data-bs-toggle='modal'>Anterior</button>
                        <button type='button' class='btn btn-custom-action' data-bs-target='#imageModal4' data-bs-toggle='modal'>Siguiente</button>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="modal fade" id="imageModal4" tabindex="-1" aria-labelledby="imageModalLabel4" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="imageModalLabel4">Imagen 4</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img src="{{ asset('storage/HUB ECOMMERCE.jpeg') }}" class="img-fluid" alt= 'Imagen 4 ampliada'>
                    </div>
                    <div class='modal-footer'>
                        <button type='button' class='btn btn-custom-close'data-bs-target='#imageModal3' data-bs-toggle='modal'>Anterior</button>
                        <button type='button' class='btn btn-custom-action' data-bs-target='#imageModal5' data-bs-toggle='modal'>Siguiente</button>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="modal fade" id="imageModal5" tabindex="-1" aria-labelledby="imageModalLabel5" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id='imageModalLabel5'>Imagen 5</h5>
                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                    </div>
                    <div class='modal-body'>
                        <img src='{{ asset('storage/MEETUPS.jpeg') }}' class='img-fluid' alt='Imagen 5 ampliada'>
                    </div>
                    <div class='modal-footer'>
                        <button type='button' class='btn btn-custom-close'data-bs-target='#imageModal4' data-bs-toggle='modal'>Anterior</button>
                        <button type='button' class='btn btn-custom-action' data-bs-target='#videoModal1' data-bs-toggle='modal'>Siguiente</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="videoModal1" tabindex="-1" aria-labelledby="videoModalLabel1" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="videoModalLabel1">Video de Logros Vallemplea</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Video en formato MP4 -->
                        <!-- Ajusta el tamaño según sea necesario -->
                        <video controls width="100%">
                            <source src="{{ asset('storage/Video de logros vallemplea.mov') }}" type="video/mp4">
                            Tu navegador no soporta la etiqueta de video.
                        </video> 
                    </div>
                    <div class='modal-footer'>
                        <button type='button' class='btn btn-custom-close'data-bs-target='#imageModal5' data-bs-toggle='modal'>Anterior</button>
                        <button type='button' class='btn btn-custom-action' data-bs-target='#imageModal1' data-bs-toggle='modal'>Siguiente</button>
                    </div>
                </div>
            </div>
        </div>
        <!--<div class='modal fade' id='videoModal2' tabindex='-1' aria-labelledby='videoModalLabel2' aria-hidden='true'>
            <div class='modal-dialog modal-lg'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 class='modal-title' id='videoModalLabel2'>Otro Video</h5>
                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                    </div>
                    <div class='modal-body'>-->
                        <!-- Aquí puedes agregar el segundo video -->
                        <!-- Cambia la fuente del video según sea necesario -->
                        <!--<video controls width = "100%">
                            <source src="{{ asset('storage/VIDEO NIDO.mov') }}" type="video/mp4">
                                Tu navegador no soporta la etiqueta de video.
                        </video>
                        
                    </div>
                </div>
            </div>
        </div>-->
    </div>
    
</x-layout>