<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HemerotecaController extends Controller
{
    public function index(){
        return view("hemeroteca.hemeroteca");
    }
}
