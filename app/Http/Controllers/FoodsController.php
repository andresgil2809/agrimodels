<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\Foods;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $validation="SELECT f.id as codigo , a.nombre as nombre_animal , f.fecha as fecha_comi , f.cantidadkg as cantidad_comi FROM foods as f INNER JOIN animals as a ON f.animal_id = a.id where a.user_id =".auth()->user()->id;

        $foods= DB::select($validation);

        return view('foods.index' , compact('foods'));
    }   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $validation="SELECT * FROM animals WHERE user_id=".auth()->user()->id;

        $animals= DB::select($validation);
        
        return view('foods.create', compact('animals'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $food = request()->except('_token');
        Foods::insert($food);
        return redirect('/foods');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function show(Foods $food)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $validation="SELECT * FROM animals WHERE user_id=".auth()->user()->id;

        $animals= DB::select($validation);

        $food=Foods::findOrFail($id);
        return view('foods.edit', compact('food' , 'animals'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $food=request()->except(['_token','_method']);
        Foods::where('id','=',$id)->update($food);

        $foods=Foods::findOrFail($id);
        
        return view('dashboard', compact('foods'))->with('mensaje','Sanidad editada con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $food=Foods::findOrFail($id);
        Foods::destroy($id);

        redirect('/foods')->with('mensaje','Comida borrada con exito');
    }
}
