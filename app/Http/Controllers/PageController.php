<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PageController extends Controller
{
    public function inicio()
    {
        $notas = App\Nota::All();
        return view('welcome', compact('notas'));
    }

    public function fotos()
    {
        return view('fotosp');
    }

    public function blog()
    {
        return view('blog');
    }

    public function nosotros($nombre = null)
    {
        $equipo = ['Ignacion', 'Juanito', 'Pedrito'];
        //return view('nosotros', ['team'=>$equipo, 'name'=>$nombre]); //<- Para usar una key
        return view('nosotros', compact('equipo', 'nombre'));  //<- Para usar el mismo nombre como Key
    }
}
