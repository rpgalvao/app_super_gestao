@if(isset($cliente->id))
    <form action="{{ route('cliente.update', ['cliente' => $cliente->id]) }}" method="post">
        @csrf
        @method('PUT')
@else
    <form action="{{ route('cliente.store') }}" method="post">
        @csrf
@endif
        <input type="text" value="{{ $cliente->nome ?? old('nome') }}" name="nome" placeholder="Nome do Cliente">
        {{ $errors->has('nome') ? $errors->first('nome') : '' }}
        <button type="submit">{{ isset($cliente->id) ? 'Atualizar' : 'Cadastrar' }}</button>
    </form>
