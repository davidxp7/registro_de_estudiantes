@extends('layouts.public')

@section('contenido')

    <div class="flex justify-end">
        <a href="{{ route('public') }}" class="btn-new">
            Regresar
        </a>
    </div>
    
    <div class="p-10 bg-white rounded-lg mt-2">

        <p class="text-center text-3xl font-bold">
            Carrera: {{ $carrera->nombre }}
        </p>

        <div class="px-6 py-4">
                
            <div class="flex items-center">
                <label for="" class="font-bold text-lg">Descripcion:</label>
                <p class="text-gray-700 text-base pl-2">{{ $carrera->descripcion }}</p>
            </div>
            <div class="flex items-center">
                <label for="" class="font-bold text-lg">Valor semestre:</label>
                <p class="text-gray-700 text-base pl-2">${{ $carrera->valor_semestre }}</p>
            </div>

        </div>

        <div class="flex justify-end">
            <a href="{{ route('public.registro',$carrera->id) }}" class="btn-second">
                Registrarse
            </a>
        </div>
    

    </div>

@endsection