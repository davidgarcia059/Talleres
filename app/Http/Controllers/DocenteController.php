<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Docente;
use Illuminate\Support\Facades\Redirect;

class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $docente=Docente::orderBy('id','DESC')->paginate(10);
        return view('docente.index',compact('docente'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('docente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $docente=new Docente;
        $docente->documento_identidad=$request->get('documento_identidad');
        $docente->nombre=$request->get('nombre');
        $docente->apellido=$request->get('apellido');
        $docente->email=$request->get('email');
        $docente->telefono=$request->get('telefono');
        $docente->save();
        return Redirect::to('docente');
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
        $docente=Docente::findOrFail($id);
return view("docente.edit",["docente"=>$docente]);
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
        $docente=Docente::findOrFail($id);
        $docente->documento_identidad=$request->get('documento_identidad');
        $docente->nombre=$request->get('nombre');
        $docente->apellido=$request->get('apellido');
        $docente->email=$request->get('email');
        $docente->telefono=$request->get('telefono');
        $docente->update();
        return Redirect::to('docente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $docente=Docente::findOrFail($id);
        $docente->delete();
        return Redirect::to('docente');
    }
}
