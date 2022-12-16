<?php

namespace Database\Factories;

use App\Models\Planta;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use League\CommonMark\Node\Block\Paragraph;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Plantas>
 */
class PlantaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Planta::class;

    public function definition()
    {
        $nombre = $this->faker->sentence();
        return [
            //Propiedades de la tabla
            'nombre'=>$nombre,
            'tipodesuelo'=>$this->faker->randomDigit,
            'plantasxmt2'=>$this->faker->randomDigit,
            'altitud'=>$this->faker->randomDigit,
            'temperatura'=>$this->faker->randomDigit,
            'humedad'=>$this->faker->randomDigit,
        ];
    }
}
