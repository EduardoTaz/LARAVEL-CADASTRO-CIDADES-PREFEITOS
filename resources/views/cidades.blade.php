<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Lista de Cidades</title>
  <link rel="stylesheet" href="{{url('css/lista_cidades.css')}}">
</head>
<body>

<div class="container">

    @if(count($cidades) == 0)
      <h3 class="no-products">Sem cidades cadastradas</h3>
    @else

      <h1>Produtos Cadastrados</h1>

      <table>

        <thead>
          <tr>
            <th>Cidade</th>
            <th>Estado</th>
            <th>População</th>
            <th>Data de Fundação</th>
            <th>Ações</th> 
          </tr>
        </thead>

        <tbody>
          @foreach ($cidades as $cidade)
            <tr>
              <td>{{$cidade->cidade}}</td>
              <td>{{$cidade->estado}}</td>
              <td>{{$cidade->populacao}}</td>
              <td>{{$cidade->data_fundacao}}</td>
              <td>
                <form method="POST" action="/deletar_cidade/{{$cidade->id}}">
                  @csrf
                  {{ method_field("DELETE") }}
                  <input type="submit" value="Deletar cidade">
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
        
      </table>
    @endif
</div>

</body>
</html>
