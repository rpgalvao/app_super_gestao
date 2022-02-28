@extends('site.layouts.basico')

@section('titulo', $titulo)
@section('conteudo')

    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Login</h1>
        </div>

        <div class="informacao-pagina">
            <div style="width: 30%; margin-left: auto; margin-right: auto">
                <form action="{{ route('site.login') }}" method="post">
                    @csrf
                    <input type="text" value="{{ old('usuario') }}" name="usuario" placeholder="Usuário" class="borda-preta">
                    {{ $errors->has('usuario') ? $errors->first('usuario') : '' }}
                    <input type="password" value="{{ old('senha') }}" name="senha" placeholder="Senha" class="borda-preta">
                    {{ $errors->has('senha') ? $errors->first('senha') : '' }}
                    <button type="submit">Acessar</button>
                </form>
                {{ isset($erro) && $erro != '' ? $erro : '' }}
            </div>
        </div>
    </div>
@endsection
