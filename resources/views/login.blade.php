@extends('app')

@section('title', 'Login')

@section('content')

<div class="box">
        <div class="form">
            <h2>Iniciar sesion</h2>
            
            <div class="inputBox">
                <input type="text" required="required" class="input" place>
                <span>Usuario</span>
            </div>

            <div class="inputBox">
                <input type="text" required="required">
                <span>Contraseña</span>
            </div>

            <input type="submit" value="Iniciar">

        </div>
    </div>

@endsection