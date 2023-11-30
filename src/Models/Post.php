<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    //Relacion uno a muchos inversa
    //vamos a generar la relacion de POST A usuarios y POST con CATEGORY

    protected
        $guarded = ['id', 'created_at', 'update_at'];
    public function user()
    {
        //para decir que la relacion es de uno a muchos es con hasMany
        return $this->belongsTo(User::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    //RELACION MUCHOS A MUCHOS
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
    //RELACION UNO A UNO POLIMORFICA

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
    public function images()
    {
        return $this->hasMany(Imagen::class);
    }
}
