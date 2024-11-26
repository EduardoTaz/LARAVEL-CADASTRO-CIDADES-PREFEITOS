<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastrar cidade</title>
    <link rel="stylesheet" href="{{url('css/cadastro_prefeito.css')}}">
</head>
<body>
    <form action="/criar_prefeitos" method="post">
        @csrf
        <h1>Cadastro de prefeitos</h1>

        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" required>
        </div>

        <div class="form-group">
            <label for="idade">Idade:</label>
            <input type="text" name="idade" id="idade" required>
        </div>

        <div class="form-group">
            <label for="partido">Partido:</label>
            <input type="text" name="partido" id="partido" required>
        </div>
        
        <div class="form-group">
            <label for="mandato_inicio">Mandato de início:</label>
            <input type="date"  name="mandato_inicio" id="mandato_inicio" required>
        </div>

        <div class="form-group">
            <label for="mandato_fim">Fim de mandato:</label>
            <input type="date" name="mandato_fim" id="mandato_fim" required>
        </div>

        


        <input type="submit" value="Salvar" class="submit">
    </form>
</body>
</html>