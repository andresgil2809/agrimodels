<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Terreno extends Model
{
    use HasFactory;


    public function plantas(){
        return $this->hasOne(Planta::class );
    }

    public function user(){
        return $this->belongsTo('App\Models\User' );
    }
}
