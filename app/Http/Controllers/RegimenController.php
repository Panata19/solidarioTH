<?php

namespace App\Http\Controllers;

use App\Models\Regimen;
use Illuminate\Http\Request;

class RegimenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['regimenes'] = Regimen::all();
        return view('regimen.index', $datos); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('regimen.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $regimen = request()->except('_token');
        Regimen::insert($regimen);
        return redirect('regimen');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Regimen  $regimen
     * @return \Illuminate\Http\Response
     */
    public function show(Regimen $regimen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Regimen  $regimen
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $regimen = Regimen::findOrFail($id);
        return view('regimen.edit', compact('regimen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Regimen  $regimen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $regimen = request()->except(['_token','_method']);
        Regimen::where('id','=',$id)->update($regimen);

        return redirect('regimen');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Regimen  $regimen
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Regimen::destroy($id);
        return redirect('regimen');
    }
}
