<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Continente;

class ContinenteController extends Controller
{
    public function listadoContinentes() {
        $continentes = Continente::all();
        return view('listadoContinentes')->with('continentes', $continentes);
    }
}
