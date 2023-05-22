<?php

namespace App\Http\Controllers;

use App\Models\Carrera;
use App\Models\Estudiante;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $carreras = Carrera::when($request->filled('q'), function ($q) use ($request){
            $q->where('nombre','LIKE','%'.$request->q.'%');
        })->get();

        return view('welcome',compact('carreras'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $carrera = Carrera::find($id);

        return view('registro',compact('carrera'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nombre' => 'required',
            'fecha_nacimiento' => 'required|date',
            'nacionalidad' => 'required',
            'identificacion_tipo' => 'required',
            'direccion' => 'required',
            'telefono' => 'required',
            'email' => 'required|email|unique:estudiantes',
            'carrera_id' => 'required|exists:carreras,id',
            'documento_identidad' => 'required|unique:estudiantes',
            'forma_pago' => 'required',
        ]);

        Estudiante::create($request->all());

        return redirect()->route('registro.mensaje');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $carrera = Carrera::find($id);

        return view('carrera',compact('carrera'));
    }

    public function mensaje()
    {
        return view('mensaje');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
