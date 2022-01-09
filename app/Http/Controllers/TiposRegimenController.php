<?php

namespace App\Http\Controllers;

use App\Models\TiposRegimen;
use App\Models\Regimen;
use Illuminate\Http\Request;

class TiposRegimenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['tiposregimenes'] = TiposRegimen::all();
        return view('tiposregimen.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datos['regimenes'] = Regimen::all();
        return view('tiposregimen.create',$datos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tiposRegimen = request()->except('_token');
        TiposRegimen::insert($tiposRegimen);
        return redirect('tiposregimen');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TiposRegimen  $tiposRegimen
     * @return \Illuminate\Http\Response
     */
    public function show(TiposRegimen $tiposRegimen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TiposRegimen  $tiposRegimen
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tiposregimen = TiposRegimen::findOrFail($id);
        $datos['regimenes'] = Regimen::all();
        return view('tiposRegimen.edit', $datos, compact('tiposregimen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TiposRegimen  $tiposRegimen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tiposRegimen = request()->except(['_token', '_method']);
        TiposRegimen::where('id','=',$id)->update($tiposRegimen);
        return redirect('tiposregimen');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TiposRegimen  $tiposRegimen
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        tiposRegimen::destroy($id);
        return redirect('tiposregimen');
    }
}
