<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserAreaController extends Controller
{
    public function perfilForm() {
        
        if(auth()->check()) {
            $user = auth()->user();
            $user->nameInitials = getNameInitials($user->name);
            return view('configs.perfil')->with('user', $user);
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
}
