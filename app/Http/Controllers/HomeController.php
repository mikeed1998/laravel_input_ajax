<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Configuracion;

class HomeController extends Controller
{
    public function index() {
        $configuracion = Configuracion::first();
        return view('index', compact('configuracion'));
    }
}


