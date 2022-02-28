@extends('app.layouts.basico')

@section('titulo', 'Clientes')
@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-2">
            <p>Lista de Clientes</p>
        </div>
        <div class="menu">
            <ul>
                <li><a href="{{ route('cliente.create') }}">Novo</a></li>
                <li><a href="">Consulta</a></li>
            </ul>
        </div>
        <div class="informacao-pagina">
            <div style="width: 70%; margin-left:auto; margin-right:auto">
                <table border=1 style="width: 100%">
                    <thead>
                    <tr>
                        <th>Nome</th>
                        <th colspan="3">Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($clientes as $cliente)
                        <tr>
                            <td>{{ $cliente->nome }}</td>
                            <td><a href="{{ route('cliente.show', ['cliente' => $cliente->id]) }}">Visualizar</a></td>
                            <td><a href="{{ route('cliente.edit', ['cliente' => $cliente->id]) }}">Editar</a></td>
                            <td>
                                <form id="form_{{ $cliente->id }}" action="{{ route('cliente.destroy', ['cliente' => $cliente->id]) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a href="#" onclick="document.getElementById('form_{{ $cliente->id }}').submit()">Excluir</a>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $clientes->appends($request)->links() }}

                <!--
                Funções destinadas para a paginação
                <br>
                {{ $clientes->count() }}  - Total de registros por pagina
                <br>
                {{ $clientes->total() }} - Total de registros da consulta
                <br>
                {{ $clientes->firstItem() }} - Número do primeiro registro da página
                <br>
                {{ $clientes->lastItem() }} - Número do último registro da página
                -->
                <p>Exibindo {{ $clientes->count() }} clientes de {{ $clientes->total() }} (de {{ $clientes->firstItem() }} a {{ $clientes->lastItem() }})</p>
            </div>
        </div>
    </div>
@endsection
