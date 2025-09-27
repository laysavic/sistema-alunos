<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cad-aluno</title>
</head>
<body>
    <h1>Cadastrar aluno</h1>
    
    <form action="{{ route('alunos.store') }}" method="post">
        @csrf
        <label for="nome">Aluno: </label>
        <input type="text" name="nome" >
        <label for="nome">Matrícula: </label>
        <input type="text" name="matricula">
        <label for="nome">Curso: </label>
        <input type="text" name="curso">
        <label for="nome">Idade: </label>
        <input type="number" name="idade">
        <input type="submit" value="cadastrar">

    </form>
</body>
</html>