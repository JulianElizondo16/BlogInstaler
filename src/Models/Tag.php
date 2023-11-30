<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    //ACA ESTAMOS ACTIVANDO LA ASIGNACION MASIVA
    protected $fillable =['name', 'slug', 'color'];

    //METODO PARA QUE EN EL ENLACE SE MUESTRE EL SLUG
    public function getRouteKeyName(){
        return "slug";
    }
    //relacion muchos a muchos
    public function posts(){
        return $this->belongsToMany(Post::class);
    }
}
