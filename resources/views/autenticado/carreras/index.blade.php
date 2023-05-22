@extends('layouts.app')

@section('contenido')

<div class="flex justify-end">
    <a href="{{ route('carreras.create') }}" class="btn-new">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
        </svg>
          
        Agregar
    </a>
</div>

<div class="m-5">
    <div class="bg-white p-10 rounded-lg mt-5">
        @if ($carreras->count() == 0)
            <div class="text-center text-xl">
                No hay registros!!
            </div>
        @else
            @foreach ($carreras as $carrera)
            <div class="container mx-auto">
                <table class="min-w-full bg-white border border-gray-300">
                  <thead>
                    <tr>
                      <th class="py-2 px-4 border-b">Carrera</th>
                      <th class="py-2 px-4 border-b">Estudiantes</th>
                      <th class="py-2 px-4 border-b"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="py-2 px-4 border-b">Sistemas</td>
                      <td class="py-2 px-4 border-b">25</td>
                      <td class="py-2 px-4 border-b">botones</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            @endforeach
        @endif

    </div>
</div>

    
@endsection