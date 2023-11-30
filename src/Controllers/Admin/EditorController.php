<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EditorController extends Controller
{
    public function index()
    {
        return view('editor');
    }

    public function store(Request $request)
    {
        
    }
}