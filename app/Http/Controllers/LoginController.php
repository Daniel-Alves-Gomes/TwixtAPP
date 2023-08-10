<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
        return view('login.form');
    }

    public function store(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required:min5'
        ]);

        $credentials = $request->only('email', 'password');
        $authn = Auth::attempt($credentials);

        if(!$authn) {
            return redirect()->route('site.index')->with('erro', 'Usuário ou Senha inválida');
        } else {
            return redirect()->route('site.index')->with('sucesso', 'Usuário logado com sucesso!');
        }

    }

    public function destroy(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('sucesso', 'Sua conta foi deslogada com sucesso!');
    }

    public function create() {
        return view('login.create');
    }

}