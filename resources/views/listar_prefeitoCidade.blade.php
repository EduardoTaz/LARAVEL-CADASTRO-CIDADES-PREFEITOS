<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prefeitos e Cidades</title>
    <link rel="stylesheet" href="{{url('css/listar_combinado.css')}}">
</head>
<body>
    <h1>Lista de Prefeitos e Cidades</h1>

    @if($relacoes->isEmpty())
        <p>Não há prefeitos e cidades associados.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>Prefeito</th>
                    <th>Partido</th>
                    <th>Cidade</th>
                    <th>Estado</th>
                    <th>População</th>
                    <th>Quantidade</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($relacoes as $relacao)
                    <tr>
                        <td>{{ $relacao->prefeito->nome }}</td>
                        <td>{{ $relacao->prefeito->partido }}</td>
                        <td>{{ $relacao->cidade->cidade }}</td>
                        <td>{{ $relacao->cidade->estado }}</td>
                        <td>{{ $relacao->cidade->populacao }}</td>
                        <td>{{ $relacao->quantidade }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</body>
</html>
