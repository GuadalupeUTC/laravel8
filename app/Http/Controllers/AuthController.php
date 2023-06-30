<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

public function showLoginForm()
{
    return view('auth.login');
}

public function login(Request $request)
{
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    if (Auth::attempt($credentials)) {
        // Autenticación exitosa, redirigir a la página de inicio
        return redirect()->intended('/home');
    }

    // Autenticación fallida, redirigir de vuelta al formulario de inicio de sesión
    return redirect()->back()->withErrors(['email' => 'Credenciales inválidas']);
}

public function logout()
{
    Auth::logout();
    return redirect('/login');
}

}
