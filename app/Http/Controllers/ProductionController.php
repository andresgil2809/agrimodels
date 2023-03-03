<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\Production;
use App\Models\Terreno;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $validation="SELECT a.nombre AS nombre_animal , p.id as codigo, p.diaproducido as fecha , p.cantidad as dia_producido FROM animals as a INNER JOIN productions AS p ON a.id = p.animal_id where a.user_id =".auth()->user()->id;

        $productions= DB::select($validation);

        return view('production.index' , compact('productions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $animals=Animal::all();
        
        return view('production.create', compact('animals'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $production = request()->except('_token');
        Production::insert($production);
        return redirect('/production');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Production  $production
     * @return \Illuminate\Http\Response
     */
    public function show(Production $production)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Production  $production
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $validation="SELECT * FROM animals WHERE user_id=".auth()->user()->id;

        $animals= DB::select($validation);

        $production=Production::findOrFail($id);
        return view('production.edit', compact('production' , 'animals'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Production  $production
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $production=request()->except(['_token','_method']);
        Production::where('id','=',$id)->update($production);

        $productions=Production::findOrFail($id);
        
        return view('dashboard', compact('productions'))->with('mensaje','Producción editada con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Production  $production
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $production=Production::findOrFail($id);
        Production::destroy($id);

        return redirect('/production')->with('mensaje','Producción borrada con exito');
    }
}
