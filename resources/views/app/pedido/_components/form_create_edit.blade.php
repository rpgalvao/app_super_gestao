@if(isset($pedido->id))
    <form action="{{ route('pedido.update', ['cliente' => $pedido->id]) }}" method="post">
        @csrf
        @method('PUT')
@else
    <form action="{{ route('pedido.store') }}" method="post">
        @csrf
@endif
        <select name="cliente_id">
            <option>-- Selecione o Cliente --</option>
            @foreach($clientes as $cliente)
                <option
                    value="{{ $cliente->id }}" {{ ($pedido->cliente_id ?? old('cliente_id')) == $cliente->id ? 'selected' : '' }}>{{ $cliente->nome }}</option>
            @endforeach
        </select>
        {{ $errors->has('cliente_id') ? $errors->first('cliente_id') : '' }}
        <button type="submit">{{ isset($pedido->id) ? 'Atualizar' : 'Cadastrar' }}</button>
    </form>
