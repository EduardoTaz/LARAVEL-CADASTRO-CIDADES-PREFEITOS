<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Lista de Prefeitos</title>
  <link rel="stylesheet" href="{{url('css/lista_prefeitos.css')}}">
</head>
<body>

<div class="container">

    @if(count($prefeitos) == 0)
      <h3 class="no-products">Sem prefeitos cadastrados</h3>
    @else

      <h1>Prefeitos Cadastrados</h1>

      <table>

        <thead>
          <tr>
            <th>Nome</th>
            <th>Idade</th>
            <th>Partido</th>
            <th>Mandato de Início</th>
            <th>Fim de Mandato</th>
          </tr>
        </thead>

        <tbody>

          @foreach ($prefeitos as $prefeito)
              <tr>
                <td>{{ $prefeito->nome }}</td>
                <td>{{ $prefeito->idade }}</td>
                <td>{{ $prefeito->partido }}</td>
                <td>{{ $prefeito->mandato_inicio }}</td>
                <td>{{ $prefeito->mandato_fim }}</td>
              </tr>
          @endforeach
        </tbody>
        
      </table>
    @endif
</div>

</body>
</html>