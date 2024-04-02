@extends('layout.usuarios-layout')

@section('content-mi-mensaje')
    <div class="container-mensaje container-fluid d-flex flex-column justify-content-center align-items-center h-100">
        <div class="container-md d-flex flex-column justify-content-center align-items-center h-100">
            <h1 class="titulo">Mensaje de <span style="color:#ab6bbd">{{ $usuario->name }}</span></h1>

            @if ($mensaje)
                <div style="font-size: 1.2rem">{{ $mensaje->mensaje }}</div>
            @else
                <p class="mensaje">No hay mensaje para mostrar.</p>
            @endif
            <div class="container-fluid d-flex justify-content-center mt-5">
                <div id="links">
                    <a class="underlineHover mr-5" href={{ route('mensaje') }}>Nuevo mensaje</a>
                    <a class="underlineHover" href={{ route('home') }}>Ver todos los mensajes</a>
                </div>
            </div>
        </div>

    </div>
@endsection
