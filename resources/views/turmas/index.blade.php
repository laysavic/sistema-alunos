<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Turmas</h1>
<a href="{{ route('turmas.create') }}">Criar Turma</a>

<table>
    <tr>
        <th>Nome</th>
        <th>Semestre</th>
        <th>Curso</th>
        <th>Disciplina</th>
        <th>Ações</th>
    </tr>

    @foreach ($turmas as $turma)
    <tr>
        <td>{{ $turma->nome }}</td>
        <td>{{ $turma->semestre }}</td>
        <td>{{ $turma->curso->nome }}</td>
        <td>{{ $turma->disciplina->nome }}</td>
        <td>
            <a href="{{ route('turmas.edit', $turma->id) }}">Editar</a>

            <form action="{{ route('turmas.destroy', $turma->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Excluir</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
</body>
</html>