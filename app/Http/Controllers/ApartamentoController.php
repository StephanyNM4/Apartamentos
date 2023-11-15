<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApartamentoController extends Controller
{
    //
    public function index(){
        return view('apartamentos');
    }

    public function obtenerPrecio($area, int $piso=1){
        $cont = 0;
        $valor = 1500;

        if ($piso <= 12) {

            do {
                $precio = $area * ( $valor + ($valor * 0.1 * $cont));
                $cont++;
            } while ($cont < $piso);

        }
        
        return $precio;
    }
}
