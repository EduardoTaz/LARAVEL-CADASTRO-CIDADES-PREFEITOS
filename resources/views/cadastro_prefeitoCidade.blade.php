<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prefeito Cidade</title>
</head>
<body>

<form action="/criar_prefeitoCidade" method="post">
    @csrf
    <label for="prefeito">Prefeito:</label>
    <select name="prefeito_id" id="prefeito">
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

    <input type="submit" value="Atribuir">
</form>

</body>
</html>