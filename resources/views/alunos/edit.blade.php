<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edt-aluno</title>
</head>
<body>
    <h1>Editar aluno</h1>
    
    <form action="{{ route('alunos.update', $aluno->id) }}" method="post">
        @method("put")
        @csrf
        <label for="nome">Aluno: </label>
        <input type="text" name="nome" value="{{ $aluno->nome }}">
        <label for="nome">Matrícula: </label>
        <input type="text" name="matrícula" value="{{ $aluno->matricula }}">
        <label for="nome">Curso: </label>
        <input type="text" name="curso" value="{{ $aluno->curso }}">
        <label for="nome">Idade: </label>
        <input type="number" name="idade" value="{{ $aluno->idade }}">
        <input type="submit" value="cadastrar">

    </form>
</body>
</html>