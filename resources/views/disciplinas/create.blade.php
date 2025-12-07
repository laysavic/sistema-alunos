<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Cadastrar Disciplina</h2>

<form method="POST" action="{{ route('disciplinas.store') }}">
    @csrf

    Nome:
    <input type="text" name="nome" required><br><br>

    Código:
    <input type="text" name="codigo"><br><br>

    Carga Horária:
    <input type="text" name="carga_horaria"><br><br>

    Curso:
    <select name="curso_id" required>
        @foreach ($cursos as $curso)
            <option value="{{ $curso->id }}">{{ $curso->nome }}</option>
        @endforeach
    </select><br><br>

    <button type="submit">Salvar</button>
</form>

</body>
</html>