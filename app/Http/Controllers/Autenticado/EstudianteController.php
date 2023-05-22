<?php

namespace App\Http\Controllers\Autenticado;

use App\Http\Controllers\Controller;
use App\Models\Carrera;
use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $estudiantes = Estudiante::all();

        return view('autenticado.estudiantes.index',compact('estudiantes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $carreras = Carrera::all();
        
        return view('autenticado.estudiantes.create',compact('carreras'));
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

        return redirect()->route('estudiantes.index')->with('success','Estudiante Registrado Con Exito!!!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
