<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tatuaje;
use Illuminate\Support\Facades\Storage;
class Tatuajecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Tatuajes.Tabla',['tatuajes'=>Tatuaje::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    return view('Tatuajes.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $insertar=request()->except('_token');
        if($request->hasfile('tatu_imagen')){

            $insertar['tatu_imagen']=$request->file('tatu_imagen')->store('fotos','public');
            Tatuaje::insert($insertar);
            
        }

        
        return redirect('/tatuajes');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $buscar= Tatuaje::findOrfail($id);
        return view('Tatuajes.edit',['busquedaview'=>$buscar]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $editar=request()->except('_token','_method');
         if($request->hasfile('tatu_imagen')){
            $info=Tatuaje::findorfail($id);
            Storage::delete('public/'.$info->tatu_imagen);
            $editar['tatu_imagen']=$request->file('tatu_imagen')->store('fotos','public');
            
        }
 
        
        Tatuaje::where('id','=',$id)->update($editar);

        return redirect('/tatuajes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     $destruir=Tatuaje::find($id);
     if(Storage::delete('public/'.$destruir->tatu_imagen)){
     Tatuaje::destroy($id);
    }
    
     return redirect('/tatuajes');
    }

    public function confirmacion($id){
        $buscar=Tatuaje::find($id);
        return view('Tatuajes.delete',['busqueda'=>$buscar]);
    }
}