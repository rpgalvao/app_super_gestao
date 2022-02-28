@extends('app.layouts.basico')

@section('titulo', 'Produtos')
@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-2">
            <p>Produto - Visualização</p>
        </div>
        <div class="menu">
            <ul>
                <li><a href="{{ route('produto.index') }}">Voltar</a></li>
                <li><a href="">Consulta</a></li>
            </ul>
        </div>
        <div class="informacao-pagina">
            <div style="width: 30%; margin-left:auto; margin-right:auto">

                <table border=1 style="text-align: left; width:100%">
                    <tr>
                        <th>ID</th>
                        <td>{{ $produto->id }}</td>
                    </tr>
                    <tr>
                        <th>Nome</th>
                        <td>{{ $produto->nome }}</td>
                    </tr>
                    <tr>
                        <th>Descrição</th>
                        <td>{{ $produto->descricao }}</td>
                    </tr>
                    <tr>
                        <th>Fornecedor</th>
                        <td>{{ $produto->fornecedor->nome }}</td>
                    </tr>
                    <tr>
                        <th>Peso</th>
                        <td>{{ $produto->peso }} Kg</td>
                    </tr>
                    <tr>
                        <th>Unidade ID</th>
                        <td>{{ $produto->unidade_id }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection
