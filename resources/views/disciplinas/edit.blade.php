<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Editar Disciplina</h2>

<form method="POST" action="{{ route('disciplinas.update', $disciplina->id) }}">
    @csrf
    @method('PUT')

    Nome:
    <input type="text" name="nome" value="{{ $disciplina->nome }}" required><br><br>

    Código:
    <input type="text" name="codigo" value="{{ $disciplina->codigo }}"><br><br>

    Carga Horária:
    <input type="text" name="carga_horaria" value="{{ $disciplina->carga_horaria }}"><br><br>

    Curso:
    <select name="curso_id">
        @foreach ($cursos as $curso)
            <option value="{{ $curso->id }}" {{ $curso->id == $disciplina->curso_id ? 'selected' : '' }}>
                {{ $curso->nome }}
            </option>
        @endforeach
    </select><br><br>

    <button type="submit">Atualizar</button>
</form>


</body>
</html>