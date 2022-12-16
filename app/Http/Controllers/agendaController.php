<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cita;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Agenda.index', [
            'citas' => Cita::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Agenda.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $agendar = new Cita();
        $agendar -> id_solicitante = $request->get('idu');
        $agendar -> fecha = $request->get('fecha');
        $agendar -> save();

        return redirect('/agenda');
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
        $search = Cita::findOrFail($id);
        return view('Agenda.edit', [
            'SearchC' => $search
        ]);
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
        $searchU = Cita::findOrFail($id);
        $searchU -> fecha = $request -> get('fecha');
        $searchU -> save(); 
        return redirect ('/agenda');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $agendaDestroy = Cita::find($id);
        $agendaDestroy -> delete();
        return redirect ('/agenda');
    }

    public function confirmDelete($id){
        $busquedaD = Cita::find($id);//Buscar el dato de la tabla que se va a borrar
        return view('Agenda.delete',[
        'busquedaD'=> $busquedaD
        ]); //vcbvnbmn,mnbvcx//
    }
}
