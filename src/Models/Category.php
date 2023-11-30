<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug'];

    //METODO PARA QUE EN EL ENLACE SE MUESTRE EL SLUG
    public function getRouteKeyName(){
        return "slug";
    }
    //Relacion uno a muchos
    public function posts(){
        //para decir que la relacion es de uno a muchos es con hasMany
        return $this->hasMany(Post::class);
        
    }
}
