<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class Userecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('Usuarios.tabla',['usuarios'=>Usuario::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     return view('Usuarios.registro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //*$request->validate(['email'=>'required','nombre'=>'required','telefono'=>'required'|'min:10','contraseña'=>'required'|'min:7'|'max:40']);
        $registro=new Usuario();
        $registro->email=$request->get('email');
        $registro->nombre=$request->get('nombre');
        $registro->telefono=$request->get('telefono');
        $registro->contraseña=$request->get('contraseña');
        $registro->save();
        return redirect('/adminusuario');
    }

    /**
     * email nombre contraseña telefono
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
        $buscar=Usuario::findorfail($id);
        return view('Usuarios.modificacion',['resu'=>$buscar]);
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
        //$actualizau=$request->validate(['email'=>'required','nombre'=>'required','telefono'=>'required'|'min:10','contraseña'=>'required'|'min:7'|'max:23']);
        $actualiza=Usuario::findorfail($id);
        $actualiza->email=$request->get
        ('email');
        $actualiza->nombre=$request->get('nombre');
        $actualiza->telefono=$request->get('telefono');
        $actualiza->contraseña=$request->get('contraseña');
        $actualiza->save();
            return redirect('/adminusuario');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destruye=Usuario::find($id);
        $destruye->delete();
        return redirect('/adminusuario');
    }
     public function confirmar($id){
        $busc=Usuario::find($id);
        return view('Usuarios.confirmacion',['resultado'=>$busc]);
     }  
    
}
