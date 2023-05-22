@extends('layouts.app')

@section('contenido')

<div class="bg-white p-10 rounded-lg h-screen">

    <div class="text-center text-xl font-bold">
        <h1>Bienvenido Usuario Autenticado!!!!</h1>
    </div>

    <div class="flex justify-center">
        <img src="{{ asset('img/fcecep.png') }}" alt="">
    </div>

    <div class="mt-4 text-center">
        <p class="text-lg">
            Como usuario autenticado podras hacer CRUD de las diferentes carreras que estan en el fcecep,
            por otro lado tambien podras registrar estudiantes a diferentes carreras y tambien ver los estudiantes
            que se encuentran en cada carrera.
        </p>
    </div>



</div>

@endsection