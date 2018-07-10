<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Publicacion;

class PagesController extends Controller
{
    public function home()
    {
        $publicaciones = Publicacion::all();
        return view('welcome', compact('publicaciones'));
    }
}
