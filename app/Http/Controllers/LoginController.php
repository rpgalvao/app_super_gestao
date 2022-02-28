<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        $erro = '';

        if ($request->get('erro') == 1) {
            $erro = 'Usuário e/ou senha estão incorretos';
        }

        if ($request->get('erro') == 2) {
            $erro = 'Necessário realizar o login para acessar essa página';
        }

        return view('site.login', ['titulo' => 'Login', 'erro' => $erro]);
    }

    public function autenticar(Request $request)
    {
        //definir as regras de validação
        $regras = [
            'usuario' => 'required|email',
            'senha' => 'required|min:4'
        ];

        //definir as mensagens de feedback
        $feedback = [
            'usuario.email' => 'Favor informar um e-mail válido',
            'senha.min' => 'O campo senha deve ter no mínimo 4 caracteres',
            'required' => 'Esse campo é de preenchimento obrigatório'
        ];

        $request->validate($regras, $feedback);

        $email = $request->get('usuario');
        $password = $request->get('senha');

        $user = new User();
        $usuario = $user->where('email', $email)->where('password', $password)->get()->first();

        if (isset($usuario->name)) {
            session_start();
            $_SESSION['name'] = $usuario->name;
            $_SESSION['password'] = $usuario->password;
            return redirect()->route('app.home');
        } else {
            return redirect()->route('site.login', ['erro' => 1]);
        }
    }

    public function sair()
    {
        session_destroy();
        return redirect()->route('site.index');
    }
}
