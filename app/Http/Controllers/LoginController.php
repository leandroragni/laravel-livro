<?php

namespace projeto\Http\Controllers;

use Illuminate\Http\Request;
use projeto\Http\Controllers\Controller;
use Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credenciais = $request->only('email', 'password');
        
        if (Auth::attempt($credenciais)) {
            return "Usuário ". Auth::user()->name ." logado com sucesso!";
        }
        
        return ("Credenciais inválidas!");
    }
}
