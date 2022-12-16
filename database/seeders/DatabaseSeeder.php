<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Genero;
use Illuminate\Database\Seeder;
use App\Models\Planta;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $genero=[
            [
            'id' => '1',
            'descripcion' => 'Macho',
            ],
            [
                'id' => '2',
                'descripcion' => 'Hembra',
            ]
        ];
        DB::table('genero')->insert($genero);


       /*  Planta::factory(15)->create(); */

       /* Genero::factory(2)->create(); */
    }
}
