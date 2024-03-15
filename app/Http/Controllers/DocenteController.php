<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocenteController extends Controller
{
    public function docente(){
        
        return view('docente.docente');
    }
}
