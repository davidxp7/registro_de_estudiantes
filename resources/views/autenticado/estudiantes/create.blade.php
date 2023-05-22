@extends('layouts.app')

@section('contenido')

<div class="flex justify-end">
    <a href="{{ route('estudiantes.index') }}" class="btn-new">
        Regresar
    </a>
</div>

<div class="m-5">
    <div class="bg-white p-10 rounded-lg mt-5">

        {{ Aire::open()->route('estudiantes.store') }}

        {{ Aire::input('nombre', 'Nombre')
        ->type('text')
        ->placeholder('Nombre')
        ->helpText('Introduzca el nombre del estudiante') }}
    
        {{ Aire::input('fecha_nacimiento', 'Fecha de nacimiento')
            ->type('date')
            ->placeholder('Fecha de nacimiento')
            ->helpText('Introduzca la fecha de nacimiento del estudiante') }}
        
        {{ Aire::input('nacionalidad', 'Nacionalidad')
            ->type('text')
            ->placeholder('Nacionalidad')
            ->helpText('Introduzca la nacionalidad del estudiante') }}

        {{ Aire::select(['CC' => 'CC','TI' => 'TI','PASAPORTE' => 'PASAPORTE'],'identificacion_tipo','Tipo de identificacion')
                ->helpText('Introduzca el tipo de identificación del estudiante') }}
        
        {{ Aire::input('direccion', 'Dirección')
            ->type('text')
            ->placeholder('Dirección')
            ->helpText('Introduzca la dirección del estudiante') }}
        
        {{ Aire::number('telefono', 'Teléfono')
            ->placeholder(0)
            ->helpText('Introduzca el teléfono del estudiante') }}
        
        {{ Aire::input('email', 'Correo electrónico')
            ->type('email')
            ->placeholder('Correo electrónico')
            ->helpText('Introduzca el correo electrónico del estudiante') }}
        
        {{ Aire::input('institucion_anterior', 'Institución anterior')
            ->type('text')
            ->placeholder('Institución anterior')
            ->helpText('Introduzca la institución anterior del estudiante (opcional)') }}
        
        @if ($carreras->count() == 0)
            <div class="text-lg my-2">
                No hay carreras creadas por lo que no puedes crear un usuario..
            </div>
        @else

         {{ Aire::select($carreras->pluck('nombre', 'id'), 'carrera_id', 'Carrera') }}

        @endif

        {{ Aire::number('documento_identidad', 'Documento de identidad')
            ->placeholder(0)
            ->helpText('Introduzca el documento de identidad del estudiante') }}
        
        {{ Aire::select([

            'Efectivo' => 'Efectivo',
            'Credito' => 'Credito',
            'Fenalco' => 'Fenalco',
            'Icetex' => 'Icetex'

        ],'forma_pago','Forma de pago')
        ->helpText('Introduzca la forma de pago del estudiante') }}

        <input type="submit" value="Agregar" class="btn-add">

        {{ Aire::close() }}
    
    </div>
</div>

    
@endsection