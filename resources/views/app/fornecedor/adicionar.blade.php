@extends('app.layouts.basico')

@section('titulo', 'Fornecedores')
@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-2">
            <p>{{ isset($fornecedor) ? 'Fornecedor - Atualizar' : 'Fornecedor - Adicionar' }}</p>
        </div>
        <div class="menu">
            <ul>
                <li><a href="{{ route('app.fornecedor.adicionar') }}">Novo</a></li>
                <li><a href="{{ route('app.fornecedor') }}">Consulta</a></li>
            </ul>
        </div>
        <div class="informacao-pagina">
            <div style="width: 30%; margin-left:auto; margin-right:auto">
                {{ $msg ?? '' }}
                <form action="{{ route('app.fornecedor.adicionar') }}" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{ $fornecedor->id ?? '' }}">
                    <input type="text" value="{{ $fornecedor->nome ?? old('nome') }}" name="nome" placeholder="Nome">
                    {{ $errors->has('nome') ? $errors->first('nome') : '' }}
                    <input type="text" value="{{ $fornecedor->site ?? old('site') }}" name="site" placeholder="Site">
                    {{ $errors->has('site') ? $errors->first('site') : '' }}
                    <input type="text" value="{{ $fornecedor->uf ?? old('uf') }}" name="uf" placeholder="UF">
                    {{ $errors->has('uf') ? $errors->first('uf') : '' }}
                    <input type="text" value="{{ $fornecedor->email ?? old('email') }}" name="email" placeholder="E-mail">
                    {{ $errors->has('email') ? $errors->first('email') : '' }}
                    <button type="submit">{{ isset($fornecedor) ? 'Atualizar' : 'Cadastrar' }}</button>
                </form>
            </div>
        </div>
    </div>
@endsection
