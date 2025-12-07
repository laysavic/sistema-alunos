<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Lista de Cursos</h2>

@if(session('success'))
    <p>{{ session('success') }}</p>
@endif

<a href="{{ route('cursos.create') }}">+ Novo Curso</a>
<br><br>

<table border="1" cellpadding="8" cellspacing="0">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Duração</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($cursos as $curso)
            <tr>
                <td>{{ $curso->id }}</td>
                <td>{{ $curso->nome }}</td>
                <td>{{ $curso->descricao ?? '-' }}</td>
                <td>{{ $curso->duracao ?? '-' }}</td>
                <td>
                    <a href="{{ route('cursos.edit', $curso->id) }}">Editar</a>

                    <form action="{{ route('cursos.destroy', $curso->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

    
</body>
</html>