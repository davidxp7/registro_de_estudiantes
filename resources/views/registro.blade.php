@extends('layouts.public')

@section('contenido')

    <div class="flex justify-end">
        <a href="{{ route('public.carrera',$carrera->id) }}" class="btn-new">
            Regresar
        </a>
    </div>
    
    <div class="p-10 bg-white rounded-lg mt-2">

        <p class="text-center text-3xl font-bold">
            Carrera: {{ $carrera->nombre }}
        </p>

        <div class="px-6 py-4">
           
            {{ Aire::open()->route('registro.estudiante') }}

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
            
            {{ Aire::input('carrera_id')->value($carrera->id)->class('hidden') }}
    
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