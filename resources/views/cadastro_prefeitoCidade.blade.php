<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Prefeito Cidade</title>
    <link rel="stylesheet" href="{{ url('css/cadastro_prefeitoCidade.css') }}">
</head>
<body>

<div class="container">

    <h1>Cadastro de Prefeito Cidades</h1>   

    @if(session('error'))
        <div class="alert alert-error">
            {{ session('error') }}
        </div>
    @endif

    <form method="POST" action="/criar_prefeitoCidade">
        @csrf
        <label for="prefeito_id">Prefeito:</label>
        <select name="prefeito_id" id="prefeito_id">
            @foreach($prefeitos as $prefeito)
                <option value="{{ $prefeito->id }}">{{ $prefeito->nome }}</option>
            @endforeach
        </select>

        <label for="cidade">Cidade:</label>
        <select name="cidade_id" id="cidade">
            @foreach($cidades as $cidade)
                <option value="{{ $cidade->id }}">{{ $cidade->cidade }}</option>
            @endforeach
        </select>

        <button type="submit">Salvar</button>
    </form>
</div>

</body>
</html>
