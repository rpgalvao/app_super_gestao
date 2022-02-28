{{ $slot }}
<!--
@if($errors->any())
    <div style="padding: 10px; background-color: red">
        @foreach($errors->all() as $erro)
            {{ $erro }}
            <br>
        @endforeach
    </div>
@endif> -->
<form action="{{ route('site.contato') }}" method="post">
    @csrf
    <input type="text" value="{{ old('nome') }}" name="nome" placeholder="Nome" class="{{ $classe }}">
    @if($errors->has('nome'))
        {{ $errors->first('nome') }}
    @endif
    <br>
    <input type="text" value="{{ old('telefone') }}" name="telefone" placeholder="Telefone" class="{{ $classe }}">
    {{ $errors->has('telefone') ? $errors->first('telefone') : '' }}
    <br>
    <input type="text" value="{{ old('email') }}" name="email" placeholder="E-mail" class="{{ $classe }}">
    {{ $errors->has('email') ? $errors->first('email') : '' }}
    <br>

    <select class="{{ $classe }}" name="motivo_contatos_id">
        <option value="">Qual o motivo do contato?</option>
        @foreach($motivo_contatos as $motivo)
            <option value="{{ $motivo->id }}" {{ old('motivo_contatos_id') == $motivo->id ? 'selected' : '' }}>{{ $motivo->motivo_contatos }}</option>
        @endforeach
    </select>
    {{ $errors->has('motivo_contatos_id') ? $errors->first('motivo_contatos_id') : '' }}
    <br>
    <textarea name="mensagem" class="{{ $classe }}" placeholder="Preencha aqui a sua mensagem">{{ old('mensagem') }}</textarea>
    {{ $errors->has('mensagem') ? $errors->first('mensagem') : '' }}
    <br>
    <button type="submit" class="{{ $classe }}">ENVIAR</button>
</form>
