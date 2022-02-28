<?php

namespace App\Http\Controllers;

use App\MotivoContatos;
use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function principal()
    {
        $motivo_contatos = MotivoContatos::all();

        return view('site.principal', ['motivo_contatos' => $motivo_contatos]);
    }
}
