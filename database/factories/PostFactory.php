<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titulo'=>$this->faker->sentence(), //para que genere una sentencia/<oracion
            'contenido'=>$this->faker->text(10000), //genera un texto de 10000 caracteres
            'categoria'=>$this->faker->word(), //genera una palabra

        ];
    }
}
