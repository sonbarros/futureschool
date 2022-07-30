<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;
use App\Models\Modulo;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Exception;

class CursoController extends Controller
{
    public function index()
    {
        return view('index');
    }
    
    public function show($name)
    {   
        try {
            $curso = Curso::where('name', $name)->firstOrFail();
            $modulos = Modulo::with('aulas.files.icon')->where('curso_id', $curso->id)->get();
            return view('course.' . $name)
                ->with('modulos', $modulos)
                ->with('curso', $curso);
        } catch (ModelNotFoundException $e) {
            throw $e; // Pendeding:: pagina de curso não encontrado
        } catch (\Exception $e) {
            throw $e;
        }
        
    }
}
