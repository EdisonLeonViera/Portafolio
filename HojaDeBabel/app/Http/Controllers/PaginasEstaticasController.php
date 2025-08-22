<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginasEstaticasController extends Controller
{
     public function pasajesDimensionales(){
        return view("paginasEstaticas.pasajesmetadimensionales");
    }
}
