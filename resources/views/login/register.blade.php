@extends('layout.login-layout')

@section('title', 'Register')

@section('content-register')
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->

            <!-- Login Form -->
            <form method="POST" action="{{ route('register') }}" >
                @csrf
                <input type="text" id="login" class="fadeIn second" name="name" placeholder="Nombre" required>
                <input type="email" id="Email" class="fadeIn second" name="email" placeholder="Correo Electronico" required>
                <input type="password" id="password" class="fadeIn third" name="password" placeholder="Contraseña" required>
                <input type="password" id="password_confirmation" class="fadeIn third" name="password_confirmation" placeholder="Confirmar Contraseña" required>
                <input type="submit" class="fadeIn fourth" value="Entrar">
            </form>

            <!-- Remind Passowrd -->
            <div id="formFooter">
                <a class="underlineHover" href={{ route('register') }}>Registrate</a>
            </div>

        </div>
    </div>
@endsection
