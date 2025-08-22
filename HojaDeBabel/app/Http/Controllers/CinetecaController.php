<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CinetecaController extends Controller
{
    public function index(){
        return view("cineteca.cineteca");
    }
}
