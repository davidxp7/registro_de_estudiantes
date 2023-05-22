@extends('layouts.public')

@section('contenido')


    
    <div class="p-10 bg-white rounded-lg mt-2 text-center">

        <h1 class="text-3xl mb-4">Fcecep te da la Bienvenida:</h1>

        <p class="text-lg mt-2">
            Gracias por registrarte en la institucion educativa FCECEP.
        </p>

        <p class="text-lg mb-2">
            Pronto recibiras informacion a tu correo de como sera su proceso para la matricula tenga un buen dia.
        </p>

        <div class="flex justify-center my-2">
            <img src="{{ asset('img/fcecep.png') }}" alt="">
        </div>

        <div class="flex justify-center mt-4">
            <a href="{{ route('public') }}" class="btn-new">
                Regresar al Inicio
            </a>
        </div>

    </div>

@endsection