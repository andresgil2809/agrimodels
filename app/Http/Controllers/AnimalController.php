<?php

namespace App\Http\Controllers;
use App\Models\Genero;
use App\Models\Animal;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $validation="SELECT * FROM animals WHERE user_id=".auth()->user()->id;

        $animals= DB::select($validation);

        
        return view('animal.index' , compact('animals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $generos=Genero::all();

        $animals=Animal::all();
        return view('animal.create' , compact('animals','generos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $animals = request()->except('_token');

        Animal::insert($animals);
        return redirect('/animal');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    { 
        /* $consulta="SELECT a.id  , a.user_id , a.nombre  ,  a.raza , a.condicion ,a.altitud, a.peso, a.climadeprocedencia, g.descripcion , a.fechadenacimiento , a.fechadeprimerparto
        FROM animals as a INNER JOIN genero as g ON a.genero = g.id WHERE a.id =$id;"; */
        


        $animal=Animal::findOrFail($id);
        return view('animal.show', compact('animal')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $generos=Genero::all();
        $animal=Animal::findOrFail($id);
        return view('animal.edit', compact('animal','generos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $animal = request()->except(['_token','_method']);
        Animal::where('id','=',$id)->update($animal);


        $animal=Animal::findOrFail($id);
        return view('animal.show', compact('animal'))->with('mensaje','animal modificado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $animals=Animal::findOrFail($id);
         Animal::destroy($id);
         return redirect('/animal')->with('mensaje','animal borrado con exito');;
    }
}
