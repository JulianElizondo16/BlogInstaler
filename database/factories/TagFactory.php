<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
//EN TODOS LOS FACTORY'S VAMOS A TENER QUE AGREGAR EL STR
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tag>
 */
class TagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        //Como en las demas agregamos que guarde en la variable un dato generado automaticamente que sea unico con un rango de 20 letras.
        $name = $this->faker->unique()->word(20);
        return [
            'name'=> $name,
            'slug' => Str::slug($name),
            'color'=> $this->faker->randomElement(['red','black','green', 'blue', 'indigo','gray']),
        ];
    }
}
