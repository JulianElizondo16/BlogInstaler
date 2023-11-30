<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function upload(Request $request)
    {

        //image/nombre_del_archivo.la extension que tenga la

        $path = Storage::put('images', $request->file('upload'));

        return [
            'url' => Storage::url($path)
        ];
    }
}
