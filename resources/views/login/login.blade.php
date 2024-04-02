@extends('layout.login-layout')

@section('title', 'Login')

@section('content-login')
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->

            <!-- Login Form -->
            <form method="POST">
                @csrf
                <input type="email" id="login" class="fadeIn second" name="email" placeholder="Email">
                <input type="password" id="password" class="fadeIn third" name="password" placeholder="Contraseña">
                <input type="submit" class="fadeIn fourth" value="Entrar">
                
            </form>

            <!-- Remind Passowrd -->
            <div id="formFooter">
                <a class="underlineHover" href={{ route('register') }}>Registrarme</a>
            </div>

        </div>
    </div>
@endsection
