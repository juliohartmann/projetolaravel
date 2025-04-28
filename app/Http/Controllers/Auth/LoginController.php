<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login'); // Exibe o formulário de login
    }

    public function login(Request $request)
    {
        // Validação dos dados
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Tentativa de autenticação
        if (Auth::attempt($request->only('email', 'password'))) {
            // Autenticação bem-sucedida, redireciona para o dashboard
            return redirect()->route('welcome');
        }

        // Autenticação falhou, retorna para a página de login com erro
        return back()->withErrors([
            'email' => 'As credenciais fornecidas estão incorretas.',
        ]);
    }

    public function logout()
    {
        Auth::logout(); // Desloga o usuário
        return redirect()->route('login'); // Redireciona para a tela de login
    }
}
