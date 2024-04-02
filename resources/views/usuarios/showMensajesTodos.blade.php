@extends('layout.usuarios-layout')

@section('content-todos-mensajes')
    <div class="container-mensaje container-fluid align-content-center h-100">
        <div id="comentariosCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner container-md">
                @foreach ($usuarios as $usuario)
                    <div class="carousel-item align-content-center {{ $loop->first ? 'active' : '' }}">
                        <h2>Mensaje de <span style="color: #ab6bbd">{{ $usuario->name }}</span></h2>
                        @if ($usuario->mensaje)
                            <div style="font-size: 1.2rem">{{ $usuario->mensaje->mensaje }}</div>
                        @else
                            <p>No hay mensaje para este usuario.</p>
                        @endif
                    </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#comentariosCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#comentariosCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Siguiente</span>
            </a>
        </div>
        <div class="container-fluid d-flex justify-content-center mt-5">
            <div id="links">
                <a class="underlineHover mr-5" href={{ route('mensaje') }}>Nuevo mensaje</a>
                <a class="underlineHover" href={{ route('mensaje.mostrar') }}>Ver mi Mensajes</a>
            </div>
        </div>
    </div>
@endsection
