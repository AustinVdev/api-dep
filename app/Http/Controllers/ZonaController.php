<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

Use App\Models\Zona;

class ZonaController extends Controller
{
    public function index()
    {
        return Zona::all();
    }

    public function show($departamento, $municipio)
    {
        $Zona = Zona::where('departamento', $departamento)
                        ->where('municipio', $municipio)
                        ->first();

        $response = array(
            'zona' => $Zona->zona,
            'descripcion' => $Zona->descripcion
        );

        return response()->json($response, 200);
    }
}
