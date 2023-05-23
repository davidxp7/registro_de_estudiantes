@extends('layouts.public')

@section('buscador')
    <form method="GET">
        <input type="text" placeholder="Buscar carrera" id="q" name="q" class="bg-gray-100 rounded-lg w-[400px]">
    </form>
@endsection

@section('contenido')

    @if ($carreras->count() == 0)
        <div class="p-10 bg-white text-xl rounded-lg">
            <p class="text-center">No hay registros!!</p>
        </div>
    @else

        <div class="p-10 bg-white rounded-lg">
            
            <h1 class="text-2xl font-bold text-center">SELECCIONA LA CARRERA A LA CUAL SE REGISTRARA!! </h1>

            @foreach ($carreras as $carrera )

                <tr>
                    <td>
                        <div class="flex flex-col gap-4 my-2">
                    
                            <a href="{{ route('public.carrera',$carrera->id) }}" class="bg-white rounded-lg shadow-lg overflow-hidden flex-none flex items-center p-4">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-24 h-24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 00.75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 00-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0112 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 01-.673-.38m0 0A2.18 2.18 0 013 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 013.413-.387m7.5 0V5.25A2.25 2.25 0 0013.5 3h-3a2.25 2.25 0 00-2.25 2.25v.894m7.5 0a48.667 48.667 0 00-7.5 0M12 12.75h.008v.008H12v-.008z" />
                                </svg>
                                
                                <div class="px-6 py-4">
                                    <div class="font-bold text-2xl mb-2">{{ $carrera->nombre }}</div>
                                        
                                    <div class="flex items-center">
                                        <label for="" class="font-bold text-lg">Descripcion:</label>
                                        <p class="text-gray-700 text-base pl-2">{{ $carrera->descripcion }}</p>
                                    </div>
                                    <div class="flex items-center">
                                        <label for="" class="font-bold text-lg">Valor semestre:</label>
                                        <p class="text-gray-700 text-base pl-2">${{ $carrera->valor_semestre }}</p>
                                    </div>

                                </div>
                            </a>
                
                        </div>
                    </td>
                </tr>
            @endforeach

        </div>

    @endif
    
@endsection