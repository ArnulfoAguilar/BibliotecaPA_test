<?php

namespace App\Http\Controllers;

use App\ejemplar;
use Illuminate\Http\Request;

class EjemplarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('inventarioBiblioteca.nuevoLibro');//
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->ajax()){
        $ejemplar = new ejemplar();
            $ejemplar -> ISBN =$request->ISBN;
            $ejemplar ->nombre = $request->nombre;
            $ejemplar ->autor = $request->get('autor');
            $ejemplar ->descripcion = $request->get('descripcion');
            $ejemplar->save();
        }

        return response()->json(['success'=>'Data is successfully added']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ejemplar  $ejemplar
     * @return \Illuminate\Http\Response
     */
    public function show(ejemplar $ejemplar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ejemplar  $ejemplar
     * @return \Illuminate\Http\Response
     */
    public function edit(ejemplar $ejemplar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ejemplar  $ejemplar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ejemplar $ejemplar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ejemplar  $ejemplar
     * @return \Illuminate\Http\Response
     */
    public function destroy(ejemplar $ejemplar)
    {
        //
    }
}
