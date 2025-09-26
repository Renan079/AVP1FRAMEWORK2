<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicios</title>
</head>
<body>

    {{-- 1. Injeta o Header (com a prop 'titulo' opcional) --}}
    <x-header titulo="Tabela de Exercícios Realizados" />

    {{-- 2. Começa o Conteúdo Principal da Página (a tabela) --}}
    <table border="2" >
        <thead>
            <tr>
                <th>Nome da Atividade</th>
                <th>Duração em Minutos</th>
                <th>Calorias Queimadas</th>
                <th>Data</th>
                <th>Aluno</th>
            </tr>
        </thead>
        <tbody>

            @foreach($exercicios as $exercicio)
                <tr>
                    <td>{{ $exercicio->name_activiry }}</td>
                    <td>{{ $exercicio->duration }}</td>
                    <td>{{ $exercicio->calories_burned }}</td>
                    <td>{{ $exercicio->date }}</td>
                    <td>{{ $exercicio->user->name }}</td>
                </tr>
            @endforeach

        </tbody>
    </table>

    <x-footer />

</body>
</html>