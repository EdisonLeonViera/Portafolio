<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GaleriaController extends Controller
{
    public function index(){
        return view("galeria.galeria");
    }
}
