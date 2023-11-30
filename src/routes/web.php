<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ComentariosController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;

//Aca lo que estamos haciendo es la llamada a las rutas

//el primer 'asd' es al URL aca lo que estamos haciedno es que con el ->name('') le estamos dando un nombre a esa ruta para llamarla
Route::get('/', HomeController::class)->name('home');

//ACA VAMOS A LLAMAR A LOS POST QUE ESTEMOS HACIENDO NUEVOS 30-10-23
Route::get('posts', [PostController::class, 'index'])->name('post.index');
Route::get('posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::get('category/{category}', [PostController::class, 'category'])->name('posts.category');
Route::get('tag/{tag}', [PostController::class, 'tag'])->name('posts.tag');


/* CONTROLADOR PARA CKEDITOR */

Route::post('image/upload', [ImageController::class, 'upload'])->name('image.upload');











Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});