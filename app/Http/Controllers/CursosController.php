<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursosController extends Controller
{
    public function cursos(){
        
        return view('cursos.pensum');
    }

    public function campocomun(){
        
        return view('cursos.campocomun');
    }
}
