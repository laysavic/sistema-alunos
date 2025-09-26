<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cad-aluno</title>
</head>
<body>
    <h1>Cadastrar aluno</h1>
    
    <form action="{{ route('alunos.store') }}" method="get">
        @csrf
        <label for="nome">Aluno: </label>
        <input type="text" name="nome" >
        <input type="text" name="matrícula">
        <input type="text" name="curso">
        <input type="number" name="idade">
        <input type="submit" value="cadastrar">

    </form>
</body>
</html>