<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curso;
use App\Modulo;
use App\Aula;

class CursoController extends Controller
{
    public function show($name)
    {   
        //$curso = Curso::with('modulos.aulas')->where('name', $name)->first();
        $curso = Curso::where('name', $name)->first();
        $modulos = Modulo::with('aulas.files')->where('curso_id', $curso->id)->get();
    
        return view($name)->with('modulos', $modulos);
    }
}
