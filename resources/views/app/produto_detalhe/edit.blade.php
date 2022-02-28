@extends('app.layouts.basico')

@section('titulo', 'Detalhe do Produto')
@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-2">
            <p>Produto - Editar Detalhes</p>
        </div>
        <div class="menu">
            <ul>
                <li><a href="#">Voltar</a></li>
            </ul>
        </div>
        <div class="informacao-pagina">
            <h4>Produto</h4>
            <p>{{ $produto_detalhe->item->nome }}</p>
            <h5>Descrição</h5>
            <p>{{ $produto_detalhe->item->descricao }}</p>
            <div style="width: 30%; margin-left:auto; margin-right:auto">
                @component('app.produto_detalhe._components.form_create_edit', ['produto_detalhe' => $produto_detalhe, 'unidades' => $unidades])
                @endcomponent
            </div>
        </div>
    </div>
@endsection
