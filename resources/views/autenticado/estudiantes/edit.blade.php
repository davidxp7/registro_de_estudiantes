@extends('layouts.app')

@section('contenido')

<div class="flex justify-end">
    <a href="{{ route('estudiantes.index') }}" class="btn-new">
        Regresar
    </a>
</div>

<div class="m-5">
    <div class="bg-white p-10 rounded-lg mt-5">

        {{ Aire::open()->route('estudiantes.update',$estudiante->id) }}

        {{ Aire::input('nombre', 'Nombre')
        ->type('text')
        ->value($estudiante->nombre)
        ->helpText('Introduzca el nombre del estudiante') }}
    
        {{ Aire::input('fecha_nacimiento', 'Fecha de nacimiento')
            ->type('date')
            ->value($estudiante->fecha_nacimiento)
            ->helpText('Introduzca la fecha de nacimiento del estudiante') }}
        
        {{ Aire::input('nacionalidad', 'Nacionalidad')
            ->type('text')
            ->value($estudiante->nacionalidad)
            ->helpText('Introduzca la nacionalidad del estudiante') }}

        {{ Aire::select(['CC' => 'CC','TI' => 'TI','PASAPORTE' => 'PASAPORTE'],'identificacion_tipo','Tipo de identificacion')
                ->value($estudiante->identificacion_tipo)
                ->helpText('Introduzca el tipo de identificación del estudiante') }}
        
        {{ Aire::input('direccion', 'Dirección')
            ->type('text')
            ->value($estudiante->direccion)
            ->helpText('Introduzca la dirección del estudiante') }}
        
        {{ Aire::number('telefono', 'Teléfono')
            ->value($estudiante->telefono)
            ->helpText('Introduzca el teléfono del estudiante') }}
        
        {{ Aire::input('email', 'Correo electrónico')
            ->type('email')
            ->value($estudiante->email)
            ->helpText('Introduzca el correo electrónico del estudiante') }}
        
        {{ Aire::input('institucion_anterior', 'Institución anterior')
            ->type('text')
            ->value($estudiante->institucion_anterior)
            ->helpText('Introduzca la institución anterior del estudiante (opcional)') }}
        
        {{ Aire::select($carreras->pluck('nombre', 'id'), 'carrera_id', 'Carrera')->value($estudiante->carrera_id) }}

        {{ Aire::number('documento_identidad', 'Documento de identidad')
            ->value($estudiante->documento_identidad)
            ->helpText('Introduzca el documento de identidad del estudiante') }}
        
        {{ Aire::select([

            'Efectivo' => 'Efectivo',
            'Credito' => 'Credito',
            'Fenalco' => 'Fenalco',
            'Icetex' => 'Icetex'

        ],'forma_pago','Forma de pago')
        ->value($estudiante->forma_pago)
        ->helpText('Introduzca la forma de pago del estudiante') }}

        <input type="submit" value="Editar" class="btn-add">

        {{ Aire::close() }}
    
    </div>
</div>

    
@endsection