<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Cadastrar Curso</h2>

@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $err)
                <li>{{ $err }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('cursos.store') }}" method="POST">
    @csrf
    <label>Nome:</label><br>
    <input type="text" name="nome" value="{{ old('nome') }}"><br><br>

    <label>Descrição:</label><br>
    <textarea name="descricao">{{ old('descricao') }}</textarea><br><br>

    <label>Duração:</label><br>
    <input type="text" name="duracao" value="{{ old('duracao') }}"><br><br>

    <button type="submit">Salvar</button>
</form>

<br>
<a href="{{ route('cursos.index') }}">Voltar</a>

</body>
</html>