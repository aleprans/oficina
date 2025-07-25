<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function auth(Request $request) {

        //  dd(bcrypt('151296'));

        $credentials = $request->validate([
            'user' => ['required'],
            'password' => ['required'],
        ],[
            'user.required' => 'Usuário obrigatório!',
            'password.required' => 'Senha obrigatória!'
        ]);

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('home');
        } else {
            return redirect()->back()->with('msg', 'Usuário e/ou senha inválidos!');
        }
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
