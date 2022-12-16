<?php

namespace App\Http\Controllers;

use App\Models\Planta;
use Illuminate\Http\Request;
use App\Http\Requests\StorePlantas;
use Database\Factories\PlantaFactory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PlantaController extends Controller
{

    public function index(){
        $validation="SELECT * FROM plantas WHERE idusuario=".auth()->user()->id;

        $plantas= DB::select($validation);

        /* $plantas=Planta::all(); */
        return view ('plantas.index', compact('plantas','validation'));
    }



    public function create(){

        
        return view('plantas.create');
    }




    public function show($id){
        $plantas=Planta::findOrFail($id);
        return view('plantas.show', compact('plantas'));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $datosRuta = request()->all();//retorna toda la información incluyendo el token
        $plantas = request()->except('_token');

        if ($request->hasFile('foto')) {
        $plantas  ['foto'] = $request->file('foto')->store('uploads','public');  
        }
        
        Planta::insert($plantas);
        return redirect('/plantas')->with('mensaje','Planta agregada con éxito');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Planta  $planta
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $planta=Planta::findOrFail($id);
        return view('plantas.edit', compact('planta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Planta  $planta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $plantas = request()->except(['_token','_method']);

        if ($request->hasFile('foto')) {
            $planta=Planta::findOrFail($id);
            
            Storage::delete('public/'.$planta->foto);

            $plantas  ['foto'] = $request->file('foto')->store('uploads','public');  
            }


        Planta::where('id','=',$id)->update($plantas);

        
          
        $plantas=Planta::findOrFail($id);

        return view('plantas.show', compact('plantas'))->with('mensaje','Planta editada con exito');
    }

   /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Planta  $planta
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $plantas=Planta::findOrFail($id);
        if(Storage::delete('public/'.$plantas->foto)){
            Planta::destroy($id);
        }


        return redirect('/plantas')->with('mensaje','Planta borrada con éxito');
    }
}

