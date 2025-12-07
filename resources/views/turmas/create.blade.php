<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Criar Turma</h1>

<form action="{{ route('turmas.store') }}" method="POST">
    @csrf

    Nome: <input type="text" name="nome"><br>
    Semestre: <input type="text" name="semestre"><br>

    Curso:
    <select name="curso_id">
        @foreach ($cursos as $curso)
            <option value="{{ $curso->id }}">{{ $curso->nome }}</option>
        @endforeach
    </select><br>

    Disciplina:
    <select name="disciplina_id">
        @foreach ($disciplinas as $disciplina)
            <option value="{{ $disciplina->id }}">{{ $disciplina->nome }}</option>
        @endforeach
    </select><br>

    <button type="submit">Salvar</button>
</form>


</body>
</html>