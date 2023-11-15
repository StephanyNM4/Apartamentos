<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Duenio;
use App\Models\Tipo;


class DuenioController extends Controller
{
    //
    public function mostrarDuenios(){
        $duenios = Duenio::all();
        return view('duenios', compact('duenios'));
    }

    public function create(){
        $tipos = Tipo::all();
        return view('crearDuenio', compact('tipos'));
    }

    public function store(Request $request){

        $duenio = new Duenio();
        $duenio->nombre= $request->input('nombre');
        $duenio->apellido= $request->input('apellido');
        $duenio->correo= $request->input('correo');
        $duenio->idTipo= $request->input('tipoDuenio');
        $duenio->save();

        return redirect()->route('duenio.mostrar');
    }

    public function delete($id){
        $duenio = Duenio::find($id);
        return view('eliminarDuenio', compact('duenio'));
    }

    public function destroy($id){
        $duenio = Duenio::find($id);
        $duenio->delete();
        return redirect()->route('duenio.mostrar');

    }

    public function edit($id){
        $duenio = Duenio::find($id);
        $tipos = Tipo::all();
        return view('editarDuenio', compact('duenio','tipos'));
    }

    public function update(Request $request, $id){
        $duenio = Duenio::find($id);
        $duenio->nombre= $request->input('nombre');
        $duenio->apellido= $request->input('apellido');
        $duenio->correo= $request->input('correo');
        $duenio->idTipo= $request->input('tipoDuenio');
        $duenio->update();
        return redirect()->route('duenio.mostrar');
    }
}
