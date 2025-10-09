<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edt-aluno</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    
    <div class="cad-form">
        <h1>Editar aluno</h1>

        <form action="{{ route('alunos.update', $aluno->id) }}" method="post">
            @method("put")
            @csrf
            <label for="nome">Aluno: </label>
            <input type="text" name="nome" value="{{ $aluno->nome }}" required>

            <label for="nome">Matrícula: </label>
            <input type="text" name="matricula" value="{{ $aluno->matricula }}" required>

            <label for="nome">Curso: </label>
            <input type="text" name="curso" value="{{ $aluno->curso }}" required>

            <label for="nome">Idade: </label>
            <input type="number" name="idade" value="{{ $aluno->idade }}">

            <button type="submit"> Atualizar </button>

        </form>
        <a href="{{ route('alunos.index') }}" class="voltar">← Voltar</a>
    </div>
</body>
</html>