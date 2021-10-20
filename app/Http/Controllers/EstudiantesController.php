<?php

namespace App\Http\Controllers;

use App\Models\estudiantes;
use Illuminate\Http\Request;

class EstudiantesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estudiantes=estudiantes::all();
        return view('estudiantes.agregar',compact('estudiantes')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'identificacion' => 'required',
            'apellido' => 'required',
            'contrasena' => 'required',
            'correo' => 'required',
            'tel' => 'required'
        ]);
        estudiantes::create($request->all());
        return redirect()->route('estudiantes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\estudiantes  $estudiantes
     * @return \Illuminate\Http\Response
     */
    public function show(estudiantes $estudiantes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\estudiantes  $estudiantes
     * @return \Illuminate\Http\Response
     */
    public function edit(estudiantes $estudiantes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\estudiantes  $estudiantes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datoestu = $request->except(['_token','_method']);
        estudiantes::where(['id'=>$id])->update($datoestu);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\estudiantes  $estudiantes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        estudiantes::destroy($id);
        return redirect()->route('estudiantes.index');
    }
}
