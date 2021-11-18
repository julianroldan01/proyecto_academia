<?php

namespace App\Http\Controllers;

use App\Models\empleados;
use Illuminate\Http\Request;

class EmpleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * @author Julian Andres Roldan Dussan
     * @since  11/10/2021
     * retorna a la vista agregar de la carpeta empleados y compacta todos los datos del modelo
     */
    public function index()
    {
        $empleados=empleados::all();
        return view('empleados.agregar',compact('empleados')); 
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
            'usuario' => 'required',
            'apellido' => 'required',
            'contrasena' => 'required',
            'correo' => 'required',
            'img' => 'required'
        ]);
        empleados::create($request->all());
        return redirect()->route('empleados.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function show(empleados $empleados)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function edit(empleados $empleados)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\empleados  $empleados
     * @return \Illuminate\Http\Response
     * funcion para editar los datos y retornarlo a la misma vista
     * a excepcion de los input _token y _method
     */
    public function update(Request $request,$id)
    {
        $datosusuarios = $request->except(['_token','_method']);
        empleados::where(['id'=>$id])->update($datosusuarios);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\empleados  $empleados
     * @return \Illuminate\Http\Response
     * funcion para borrar datos por medio del id
     */
    public function destroy($id)
    {
        empleados::destroy($id);
        return redirect()->route('empleados.index');
    }
}
