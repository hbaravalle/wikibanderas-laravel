<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pais;

class PaisController extends Controller
{
    public function listadoPaises() {
        $listadoPaises = Pais::all();
        return view('listadoPaises')->with('listadoPaises', $listadoPaises);
    }

    public function buscarPais($id) {
        $unPais = Pais::find($id);
        return view('detallePais')->with('unPais', $unPais);
    }

    public function agregar(Request $req) {

        $reglas = [
            "nombre" => "string|min:2|unique:paises,nombre",
            "poblacion" => "integer|min:0",
            "continente_id" => "integer|min:1",
            "bandera" => "file"
        ];

        $mensajes = [
            "string" => "El campo :attribute debe ser un texto",
            "integer" => "El campo :attribute debe ser numérico",
            "min" => "El campo :attribute tiene un mínimo de :min caracteres",
            "unique" => "El campo :attribute ya existe"
        ];

        $this->validate($req, $reglas);


        $nuevoPais = new Pais();

        $ruta = $req->file('bandera')->store('public/banderas');
        $nombreArchivo = basename($ruta);
        
        $nuevoPais->nombre = $req['nombre'];
        $nuevoPais->poblacion = $req['poblacion'];
        $nuevoPais->continente_id = $req['continente'];
        $nuevoPais->bandera = $nombreArchivo;

        $nuevoPais->save();
        return redirect('/paises');
    }

    public function detalleBorrarPais($id) {
        $unPais = Pais::find($id);
        return view('alertaBorrarPais')->with('unPais', $unPais);
    }

    public function borrarPais(Request $req) {
        $id = $req['id'];
        $elPais = Pais::find($id);
        $elPais->delete();
        return redirect('/paises');
    }
}
