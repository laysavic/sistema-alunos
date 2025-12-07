<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Lista de Disciplinas</h2>

<a href="{{ route('disciplinas.create') }}">Cadastrar Nova Disciplina</a>

@if (session('success'))
    <p>{{ session('success') }}</p>
@endif

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Código</th>
            <th>Carga Horária</th>
            <th>Curso</th>
            <th>Ações</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($disciplinas as $disciplina)
            <tr>
                <td>{{ $disciplina->id }}</td>
                <td>{{ $disciplina->nome }}</td>
                <td>{{ $disciplina->codigo }}</td>
                <td>{{ $disciplina->carga_horaria }}</td>
                <td>{{ $disciplina->curso->nome }}</td>

                <td>
                    <a href="{{ route('disciplinas.edit', $disciplina->id) }}">Editar</a>

                    <form method="POST" action="{{ route('disciplinas.destroy', $disciplina->id) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Excluir</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>