<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;
use App\Models\Modulo;

class CursoController extends Controller
{
    public function index()
    {
        return view('index');
    }
    
    public function show($name)
    {   
        $curso = Curso::where('name', $name)->first();
        $modulos = Modulo::with('aulas.files.icon')->where('curso_id', $curso->id)->get();
        return view('course.' . $name)
            ->with('modulos', $modulos)
            ->with('curso', $curso);
    }
}
