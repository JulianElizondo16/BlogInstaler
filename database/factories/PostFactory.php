<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        //Aca igualmente vamos a usar el  $name con el nombre falso
        $name = $this->faker->unique()->sentence();
        return [
            //Ahora vamos a hacer lo mismo que en CategoryFactory
            'name' => $name,
            'slug' => Str::slug($name),
            'extract' => $this->faker->text(250),
            'body' => $this->faker->text(2000),
            //aca como el status es un numero entre 1 y 2 , vamos a poner que escoja una aleatorio.
            'status' =>$this->faker->randomElement([1,2]),
            //ACA QUEREMOS QUE ESCOJA de los id que se han creado
            //primero vamos a recuperar todos los registros de categoria
            //luego hacemos que recupere 1 aleatorio y luego imprima el que eligio.
            'category_id' => Category::all()->random()->id,
            'user_id' => User::all()->random()->id
            //Y CON ESTO TENEMOS LA TABLA CREADA CORRECTAMENTE
        ];
    }
}
