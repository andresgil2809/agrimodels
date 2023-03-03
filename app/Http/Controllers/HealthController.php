<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\Health;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HealthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $validation="SELECT a.nombre as nombre_animal ,a.id as codigo, h.fecha as fechavacuna , h.nombrevacuna AS vacuna, h.finalidad as finalidad , h.diasretiro as dias_retiro FROM animals as a INNER JOIN healths as h ON a.id = h.animal_id where a.user_id =".auth()->user()->id;

        $healths= DB::select($validation);

        return view('healths.index' , compact('healths'));      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $animals=Animal::all();
        
        return view('healths.create', compact('animals'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $health = request()->except('_token');
        Health::insert($health);
        return redirect('/healths');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Health  $health
     * @return \Illuminate\Http\Response
     */
    public function show(Health $health)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Health  $health
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $validation="SELECT * FROM animals WHERE user_id=".auth()->user()->id;

        $animals= DB::select($validation);

        

        $health=Health::findOrFail($id);
        return view('healths.edit', compact('health' , 'animals'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Health  $health
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $health=request()->except(['_token','_method']);
        Health::where('id','=',$id)->update($health);

        $healths=Health::findOrFail($id);
        
        return view('dashboard', compact('healths'))->with('mensaje','Sanidad editada con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Health  $health
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $health=Health::findOrFail($id);
        Health::destroy($id);

        redirect('/healths')->with('mensaje','Producción borrada con exito');
    }
}
