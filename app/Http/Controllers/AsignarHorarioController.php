<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AsignarHorarioController extends Controller
{
    public function asignarHorario(){
        return view('asignarhorario.asignarhorario');
    }
}
