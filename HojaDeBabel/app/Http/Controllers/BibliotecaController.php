<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BibliotecaController extends Controller
{
    public function index(){
        return view("biblioteca.biblioteca");
    }

}
