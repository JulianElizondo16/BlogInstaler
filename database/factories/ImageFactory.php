<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     
     * @return array<string, mixed>
     */

    public function definition(): array
    {
        // CON ESTE FACTORY VAMOS A TENER QUE LOGRAR 2 COSAS
        //1. QUE SER DESCARGUE CIERTA CANTIDAD DE IMAGENES EN LA CARPETA QUE NOSTOROS ELIJAMOS
        //2. QUE UNA VEZ DESCARGADA ALMACENE LA URL DONDE SE ENCUENTRA ALOJADA ESA IMAGEN EN EL  de la tabla image en el campo 'URL'

        return [
            //ACA LO QUE QUEREMOS HACER ES ARLMACENAR EN EL CAMPO URL LA IMAGEN QUE SE HA DESCARGADO
            //ACA EN URL COMO SEGUNDO PARAMETRO DEBEMOS AGREGAR EN CUANTOS PIXELES QUEREMOS LAS IMAGENES
            //COMO TERCR PARAMETRO EL ALTO QUE TENGA LA IMAGEN
            //DE Quinto Paranmetro agregamos true si queremos que lo concatene con el nombre de la imagen
            //DE Quinto Paranmetro agregamos false si queremos que lo almacene como imagen.jpg
            //Pero nosotros queremos que lo almacene como "post/imagen.jpg"
            'url' => 'posts/' . $this->faker->image('public/storage/posts', 640, 480, null, false),
        ];
    }
}
