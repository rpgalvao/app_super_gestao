@extends('app.layouts.basico')

@section('titulo', 'Pedidos')
@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-2">
            <p>Lista de Pedidos</p>
        </div>
        <div class="menu">
            <ul>
                <li><a href="{{ route('pedido.create') }}">Novo</a></li>
                <li><a href="">Consulta</a></li>
            </ul>
        </div>
        <div class="informacao-pagina">
            <div style="width: 70%; margin-left:auto; margin-right:auto">
                <table border=1 style="width: 100%">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Cliente</th>
                        <th colspan="4">Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($pedidos as $pedido)
                        <tr>
                            <td>{{ $pedido->id }}</td>
                            <td>{{ $pedido->cliente_id }}</td>
                            <td><a href="{{ route('pedido-produto.create', ['pedido' => $pedido->id]) }}">Adicionar Produtos</a></td>
                            <td><a href="{{ route('pedido.show', ['pedido' => $pedido->id]) }}">Visualizar</a></td>
                            <td><a href="{{ route('pedido.edit', ['pedido' => $pedido->id]) }}">Editar</a></td>
                            <td>
                                <form id="form_{{ $pedido->id }}" action="{{ route('pedido.destroy', ['pedido' => $pedido->id]) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a href="#" onclick="document.getElementById('form_{{ $pedido->id }}').submit()">Excluir</a>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            {{ $pedidos->appends($request)->links() }}
            <!--
                    Funções destinadas para a paginação
                    <br>
                    {{ $pedidos->count() }}  - Total de registros por pagina
                    <br>
                    {{ $pedidos->total() }} - Total de registros da consulta
                    <br>
                    {{ $pedidos->firstItem() }} - Número do primeiro registro da página
                    <br>
                    {{ $pedidos->lastItem() }} - Número do último registro da página
                    -->
                <p>Exibindo {{ $pedidos->count() }} pedidos de {{ $pedidos->total() }} (de {{ $pedidos->firstItem() }} a {{ $pedidos->lastItem() }})</p>
            </div>
        </div>
    </div>
@endsection
