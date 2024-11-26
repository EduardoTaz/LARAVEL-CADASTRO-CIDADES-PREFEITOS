<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastrar cidade</title>
    <link rel="stylesheet" href="{{url('css/cadastro_cidades.css')}}">
</head>
<body>
    <form action="/criar_cidades" method="post">
        @csrf
        <h1>Cadastro de cidade</h1>

        <div class="form-group">
            <label for="cidade">Cidade:</label>
            <input type="text" name="cidade" id="cidade" required>
        </div>

        <div class="form-group">
            <label for="estado">Estado</label>
            <input type="text" name="estado" id="estado" required>
        </div>

        <div class="form-group">
            <label for="populacao">População</label>
            <input type="text" name="populacao" id="populacao" required>
        </div>

        <div class="form-group">
            <label for="data_fundacao">Data de Fundação:</label>
            <input type="date" name="data_fundacao" id="data_fundacao" required>
        </div>

        <input type="submit" value="Salvar" class="submit">
    </form>
</body>
</html>