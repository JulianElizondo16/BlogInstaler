<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = Post::factory(50)->create();
        foreach ($posts as $post) {
            Image::factory(1)->create([
                'imageable_id' => $post->id,
                'imageable_type' => Post::class,
            ]);
            //que hace el metodo attach?
            //Si al metodo attach se le pasa 1 lo que hace es agregar un nuevo registro en la tabla post_tag y en el  campo tag_id se va a agregar el campo el numero que se pone dentro de los parentesis

            $post->tags()->attach([
                rand(1, 4),
                rand(5, 8)
            ]);
        }
    }
}