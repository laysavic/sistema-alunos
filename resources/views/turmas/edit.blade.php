<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Editar Turma</h1>

<form action="{{ route('turmas.update', $turma->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Nome:</label>
    <input type="text" name="nome" value="{{ $turma->nome }}"><br><br>

    <label>Semestre:</label>
    <input type="text" name="semestre" value="{{ $turma->semestre }}"><br><br>

    <label>Curso:</label>
    <select name="curso_id">
        @foreach ($cursos as $curso)
            <option value="{{ $curso->id }}" 
                {{ $curso->id == $turma->curso_id ? 'selected' : '' }}>
                {{ $curso->nome }}
            </option>
        @endforeach
    </select><br><br>

    <label>Disciplina:</label>
    <select name="disciplina_id">
        @foreach ($disciplinas as $disciplina)
            <option value="{{ $disciplina->id }}" 
                {{ $disciplina->id == $turma->disciplinas_id ? 'selected' : '' }}>
                {{ $disciplina->nome }}
            </option>
        @endforeach
    </select><br><br>

    <button type="submit">Salvar Alterações</button>
</form>



</body>
</html>