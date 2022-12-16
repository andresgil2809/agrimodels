<?php

namespace App\Http\Controllers;

use App\Models\Planta;
use App\Models\Terreno;
use App\Http\Requests\StorePlantas;
use Database\Factories\PlantaFactory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TerrenoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $validation="SELECT T.id, T.nombre AS nomTerreno, P.nombre AS nomPlanta, T.tamañomt2, T.tipodesuelo, T.altitud, T.ubicacion, T.humedad , T.temperatura FROM terrenos AS T INNER JOIN plantas AS P ON T.codplanta = P.id WHERE T.idusuario = " . auth()->user()->id;
        $terrenos=DB::select($validation);

        return view('terrenos.index' , compact('terrenos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $validation="SELECT * FROM plantas WHERE idusuario=".auth()->user()->id;

        $plantas= DB::select($validation);
        

        
        return view('terrenos.create' , compact('plantas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $terrenos = request()->except('_token');
        //$plantas = Planta::select('SELECT plantas.* FROM plantas INNER JOIN terrenos ON terrenos.codplanta = plantas.id WHERE terrenos.id = ?; ', [$id]);

        
        Terreno::insert($terrenos);
        return redirect('/terrenos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Terreno  $terreno
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        /* app(PlantaController::class)->show($id);
        $plantas=Planta::findOrFail($id); */
        $consulta= "SELECT p.nombre FROM plantas as p INNER JOIN terrenos as t ON p.id=t.codplanta WHERE t.id=$id";

        

        $nombrePlanta = DB::select ($consulta);

        foreach ($nombrePlanta as $planta) {
            $nomPlanta = $planta->nombre;
        }

        
        /* $plantas = Planta::all()->where(); */
        
        $terrenos=Terreno::findOrFail($id);
        return view('terrenos.show', compact('terrenos','nomPlanta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Terreno  $terreno
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $plantas = Planta::all();
        $terreno=Terreno::findOrFail($id);
        return view('terrenos.edit', compact('terreno', 'plantas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Terreno  $terreno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $terreno = request()->except(['_token','_method']);

        Terreno::where('id','=',$id)->update($terreno);
          
        $terrenos=Terreno::findOrFail($id);

        return view('terrenos.show', compact('terrenos'))->with('mensaje','Terrenos editado con exito');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Terreno  $terreno
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $terreno=Terreno::findOrFail($id);
        Terreno::destroy($id);
        return redirect('/terrenos')->with('mensaje','Terreno borrado con exito');
    }
}
