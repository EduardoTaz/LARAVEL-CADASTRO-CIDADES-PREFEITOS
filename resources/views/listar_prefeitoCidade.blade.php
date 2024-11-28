<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prefeitos e Cidades</title>
    <link rel="stylesheet" href="{{ url('css/listar_combinado.css') }}">
</head>
<body>
    <div class="container">
        <h1>Lista de Prefeitos e Cidades</h1>

        @if($relacoes->isEmpty())
            <p class="no-data">Não há prefeitos e cidades associados.</p>
        @else
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Prefeito</th>
                        <th>Partido</th>
                        <th>Cidade</th>
                        <th>Estado</th>
                        <th>População</th>
                        <th>Data de Fundação</th>
                        <th>Ações</th> 
                    </tr>
                </thead>
                <tbody>
                    @foreach ($relacoes as $relacao)
                        <tr>
                            <td>{{ $relacao->id }}</td>
                            <td>{{ $relacao->prefeito->nome }}</td>
                            <td>{{ $relacao->prefeito->partido }}</td>
                            <td>{{ $relacao->cidade->cidade }}</td>
                            <td>{{ $relacao->cidade->estado }}</td>
                            <td>{{ $relacao->cidade->populacao }}</td>
                            <td>{{ $relacao->cidade->data_fundacao }}</td>
                            <td>
                                <form method="POST" action="/deletar_prefeitoCidade/{{$relacao->id}}">
                                    @csrf
                                    {{ method_field("DELETE") }}
                                    <input type="submit" value="Deletar">
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
