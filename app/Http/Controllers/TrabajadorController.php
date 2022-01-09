<?php

namespace App\Http\Controllers;

use App\Models\Trabajador;
use Illuminate\Http\Request;

class TrabajadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['trabajadores'] = Trabajador::all();
        return view('trabajador.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('trabajador.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $trabajador = request()->except('_token');
        
        if($request->hasFile('foto') && $request->hasFile('cv')){
            $trabajador['foto']=$request->file('foto')->store('fotos','public');
            $trabajador['cv']=$request->file('cv')->store('cv','public');
        }
/*
        if($request->hasFile('cv')){
            $trabajador['cv']=$request->file('cv')->store('cv','public');
        }
        
  */      Trabajador::insert($trabajador);
        return redirect('trabajador');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Trabajador  $trabajador
     * @return \Illuminate\Http\Response
     */
    public function show(Trabajador $trabajador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Trabajador  $trabajador
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $trabajador = Trabajador::findOrFail($id);
        return View('trabajador.edit', compact('trabajador'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Trabajador  $trabajador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        
        $datosTrabajador = request()->except(['_token','_method']);

        if($request->hasFile('foto')  ){
            $trabajador = Trabajador::findOrFail($id);
            Storage::delete('public/'.$trabajador->foto);
            $datosTrabajador['foto'] = $request->file('foto')->store('foto','public');
        }
        if($request->hasFile('cv')){
            $trabajador = Trabajador::findOrFail($id);
            Storage::delete('public/'.$trabajador->cv);
            $datosTrabajador['cv'] = $request->file('cv')->store('cv','public');
        }



        Trabajador::where('id','=',$id)->update($datosTrabajador);
        //return response()->json($datosTrabajador); 
        return redirect('trabajador');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Trabajador  $trabajador
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Trabajador::where('id','=',$id)->update(['activo'=> 0]);
        return redirect('trabajador');
    }
}
