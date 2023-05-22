<?php

namespace App\Http\Controllers\Autenticado;

use App\Http\Controllers\Controller;
use App\Models\Carrera;
use Illuminate\Http\Request;

class CarreraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carreras = Carrera::all();

        $data = compact('carreras');

        return view('autenticado.carreras.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('autenticado.carreras.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nombre' => 'required|min:3|max:50',
            'descripcion' => 'required|min:3|max:255',
            'valor_semestre' => 'required|numeric'
        ]);

        $carrera = Carrera::create($request->all());

        return redirect()->route('carreras.index')->with('success','Nueva Carrera Agregada Con Exito!!');

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
        $carrera = Carrera::find($id);

        return view('autenticado.carreras.edit',compact('carrera'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request,[
            'nombre' => 'required|min:3|max:50',
            'descripcion' => 'required|min:3|max:255',
            'valor_semestre' => 'required|numeric'
        ]);


        $carrera = Carrera::find($id);
        $carrera->update($request->all());

        return redirect()->route('carreras.index')->with('success','Nueva Carrera Actualizada Con Exito!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $carrera = Carrera::find($id);
        $carrera->delete();

        return redirect()->route('carreras.index')->with('success','Carrera Eliminada Con Exito!!'); 
    }
}
