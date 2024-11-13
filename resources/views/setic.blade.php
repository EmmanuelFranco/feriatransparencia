<x-layout>
    <div class="container text-center">
        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('storage/PORTADA1.jpg') }}" class="d-block w-100" alt="Imagen 1">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('storage/PORTADA2.jpg') }}" class="d-block w-100" alt="Imagen 2">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('storage/PORTADA3.png') }}" class="d-block w-100" alt="Imagen 3">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('storage/PORTADA4.png') }}" class="d-block w-100" alt="Imagen 4">
                </div>
            </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
        </div>
    </div> 
</x-layout>