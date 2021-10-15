<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

Use App\Models\Departamento;

class DepartamentoController extends Controller
{
    public function index()
    {
        return Departamento::all();
    }

    public function show(Departamento $Departamento)
    {
        return $Departamento;
    }
}
