<?php

namespace App\Http\Controllers;

use App\Models\InformacionLaboral;
use App\Models\Trabajador;
use App\Models\Servicio;
use App\Models\Cargo;
use App\Models\TiposRegimen;

use Illuminate\Http\Request;

class InformacionLaboralController extends Controller
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
        
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function nuevo($id)
    {
        $trabajador['trabajador'] = Trabajador::findOrFail($id);
        $trabajador['servicios'] = Servicio::all();
        $trabajador['cargos'] = Cargo::all();
        $trabajador['tiposRegimenes'] = TiposRegimen::all();
        return view('informacionlaboral.create', $trabajador);
        
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $informacionLaboral = request()->except('_token');
        $informacionLaboral['fecha_inicio'] = date('Y-m-d');

        InformacionLaboral::insert($informacionLaboral);

        return redirect('trabajador');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InformacionLaboral  $informacionLaboral
     * @return \Illuminate\Http\Response
     */
    public function show(InformacionLaboral $informacionLaboral)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InformacionLaboral  $informacionLaboral
     * @return \Illuminate\Http\Response
     */
    public function edit(InformacionLaboral $informacionLaboral)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InformacionLaboral  $informacionLaboral
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InformacionLaboral $informacionLaboral)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InformacionLaboral  $informacionLaboral
     * @return \Illuminate\Http\Response
     */
    public function destroy(InformacionLaboral $informacionLaboral)
    {
        //
    }
}
