<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
//OCUPAMOS AGREGAR ESTO PARA QUE NO HAYAN ERRORES
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        //va a generar un nuevo nombre en la variable
        //y luego usa es info para crear el nombre y el slug
        //Y para que no se repitan vamos a poner que tiene que ser unique
        $name = $this->faker->unique()->word(20);
        return [
            //Que es un slug?
            //Ejemplo: Hola como estas
            //seria igual que hola-como-estas
            //ACA ESTAMOS AGREGANDO QUE TABLAS QUEREMOS QUE SE LLENEN Y CON QUE DATOS.
            'name' =>  $name,
            'slug' => Str::slug($name)
        ];
    }
}
