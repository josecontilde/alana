@extends('layout.usuarios-layout')

@section('content-mensaje')
    {{-- <div class="container-fluid d-flex justify-center">
    ola

</div> --}}
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->

            <!-- Login Form -->
            <form method="POST">
                @csrf
                @error('nombre')
                    <label class=" alert-danger">{{ $message }}</label>
                @enderror
                <input type="text" id="password" class="fadeIn first" name="nombre" placeholder="De...">
                <label for="">Escribe un nombre con el que Alana te pueda identificar. Ejm: Juan</label>
                @error('identificador')
                    <label class=" alert-danger">{{ $message }}</label>
                @enderror
                <input type="text" id="password" class="fadeIn first" name="identificador"
                    placeholder="Identificador...">
                <label for="">Un apodo o algo que alana pueda reconocerte con mas claridad. Ejm: Nos conocimos en el
                    colegio "Juventud".</label>
                @error('mensaje')
                    <label class=" alert-danger">{{ $message }}</label>
                @enderror
                <textarea id="story" name="mensaje" class="fadeIn second" rows="5" cols="33" placeholder="Mensaje..."></textarea>
                <label for="">Escribe un mensaje de Felicitaciones. max 400 caracteres</label>
                <input type="submit" class="fadeIn fourth" value="Enviar">

            </form>

            <!-- Remind Passowrd -->
            <div id="formFooter">
                @if (session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif
                <a class="underlineHover mr-5" href={{ route('home') }}>Ver todos los mensajes</a>
                <a class="underlineHover" href={{ route('mensaje.mostrar') }}>Ver mi Mensajes</a>
            </div>

        </div>
    </div>
@endsection
