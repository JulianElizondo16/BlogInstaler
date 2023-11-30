<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;


use App\Models\Category;
use App\Models\Tag;
use Illuminate\Database\Seeder;
//VAMOS A UTILIZAR EL METODO FACADES PARA CREAR UNA NUEVA CARPETA
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Storage::deleteDirectory('posts');
        //ACA VAMOS A LLAMAR AL METODO FACADE
        //El metodo makeDirectory lo que hace es crear un directorio llamado post o mejor dicho una carpeta 
        Storage::makeDirectory('posts');

        $this->call(RoleSeeder::class);

        $this->call(UserSeeder::class);
        Category::factory(4)->create();
        Tag::factory(8)->create();
        //Pero queremos que por cada post que se cree se genere una imagen y almacene la informacion de la imagen en la tabla url
        //Vamos a crear un nuevo seeder llamado PostSeeder
        $this->call(PostSeeder::class);
    }
}