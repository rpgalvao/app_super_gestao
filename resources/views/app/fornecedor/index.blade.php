@extends('app.layouts.basico')

@section('titulo', 'Fornecedores')
@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-2">
            <p>Fornecedor</p>
        </div>
        <div class="menu">
            <ul>
                <li><a href="{{ route('app.fornecedor.adicionar') }}">Novo</a></li>
                <li><a href="{{ route('app.fornecedor') }}">Consulta</a></li>
            </ul>
        </div>
        <div class="informacao-pagina">
            <div style="width: 30%; margin-left:auto; margin-right:auto">
                {{ $msg ?? ''}}
                <form action="{{ route('app.fornecedor.listar') }}" method="post">
                    @csrf
                    <input type="text" name="nome" placeholder="Nome">
                    <input type="text" name="site" placeholder="Site">
                    <input type="text" name="uf" placeholder="UF">
                    <input type="text" name="email" placeholder="E-mail">
                    <button type="submit">Pesquisar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
