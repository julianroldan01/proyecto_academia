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
     * @author Julian Andres Roldan Dussan
     * @since  11/10/2021
     * retorna a la vista agregar de la carpeta estudiantes 
     * y compacta todos los datos del modelo estudiantes
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
     * funcion para agregar los datos requeridos 
     * y los redirecciona a la misma vista
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
     * funcion para editar los datos y retornarlo a la misma vista
     * a excepcion de los input _token y _method
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
     * funcion para borrar datos por medio del id
     * y retornar a la misma vista
     */
    public function destroy($id)
    {
        estudiantes::destroy($id);
        return redirect()->route('estudiantes.index');
    }
}
