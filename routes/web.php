<?php

use App\Http\Controllers\AnimalController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComidaController;
use App\Http\Controllers\TerrenoController;
use App\Http\Controllers\PlantaController;
use App\Models\Animal;
use App\Models\Planta;
use Illuminate\Routing\Route as RoutingRoute;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


/* Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('terrenos/crear-terrenos', function () {
        return view('terrenos/crear-terrenos');
    })->name('crear-terrenos');
}); */  

//RUTA PARA IR A LA VENTANA DE CREAR PLANTA
Route::controller(PlantaController::class)->middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {

    Route::resource('plantas', PlantaController::class);
    
});

Route::controller(TerrenoController::class)->middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {

    Route::resource('terrenos', TerrenoController::class);
    
});

Route::controller(AnimalController::class)->middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {

    Route::resource('animal', AnimalController::class);
    
});



