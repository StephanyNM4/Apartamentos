<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Duenio;
use App\Models\Propiedad;


class PropiedadController extends Controller
{
    //

    public function mostrarPropiedades($id){
        $propiedadesDuenio = Propiedad::where('idDuenioP', $id)->get();
        return view('propiedadesDuenio', compact('propiedadesDuenio'));
    }

    public function mostrarDuenio($id){
        $propiedades = Propiedad::find($id);
        $duenio = Duenio::where('idDuenio', $propiedades->idDuenioP)->get();
        return view('duenioPropiedad', compact('duenio'));
    }
}
