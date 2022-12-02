<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserAreaController extends Controller
{
    public function perfilForm(Request $request) {
        //dd($request->is('*/perfil'));
        //dd($request->url());
        if(auth()->check()) {
            $user = auth()->user();
            $user->nameInitials = getNameInitials($user->name);
            return view('configs.meu-perfil')->with('user', $user)->with('path', $request->url());
        }
        return view('index');
    }

    public function updateUser(Request $request) {
        
        $userAuth = auth()->user();
        $user = User::find($userAuth->id);
        $user->name = $request->name;
        $user->save();
        return redirect()->route('configs.perfil');

    }

    public function meusCursos(Request $request) {
        //dd($request->is('*/perfil'));
        //dd($request->url());
        if(auth()->check()) {
            $user = auth()->user();
            $user->nameInitials = getNameInitials($user->name);
            return view('configs.meus-cursos')->with('user', $user)->with('path', $request->url());
        }
        return view('index');
    }
}
