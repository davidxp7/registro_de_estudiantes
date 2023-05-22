@extends('layouts.app')

@section('contenido')

<div class="flex justify-end">
    <a href="{{ route('carreras.index') }}" class="btn-new">
        Regresar
    </a>
</div>

<div class="m-5">
    <div class="bg-white p-10 rounded-lg mt-5">

        {{ Aire::open()->route('carreras.update',$carrera->id) }}

        {{ Aire::input('nombre', 'Nombre')
        ->type('text')
        ->value($carrera->nombre)
        ->helpText('Introduzca el nombre de la carrera que desea ingresar') }}

        {{ Aire::textArea('descripcion', 'Descripcion')
        ->value($carrera->descripcion)
        ->helpText('Introduzca el descripcion de la carrera que desea ingresar') }}

        {{ Aire::number('valor_semestre', 'Valor Semestre')
        ->value($carrera->valor_semestre)
        ->helpText('Introduzca el valor de la carrera que desea ingresar') }}

        <input type="submit" value="Editar" class="btn-add">

        {{ Aire::close() }}
    
    </div>
</div>

    
@endsection