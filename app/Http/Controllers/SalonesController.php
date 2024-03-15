<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalonesController extends Controller
{
    public function salones(){
        
        return view('salones.salones');
    }
}
