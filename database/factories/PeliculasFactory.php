<?php

namespace Database\Factories;

use App\Models\peliculas;
use Database\Seeders\PeliculasSeeder;
use Illuminate\Database\Eloquent\Factories\Factory;

use function App\Models\movie;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\peliculas>
 */
class PeliculasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
        'name' => fake()->name(gender:movie()),
        'director' => fake()->firstName(),
        'fecha_estreno' => fake()->date(),
        ];
    }
    public function run(){
        //llamo al seeder
        $this->call(PeliculasSeeder::class);
    }
}
