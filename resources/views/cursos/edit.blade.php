<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Editar Curso</h2>

@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $err)
                <li>{{ $err }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('cursos.update', $curso->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Nome:</label><br>
    <input type="text" name="nome" value="{{ old('nome', $curso->nome) }}"><br><br>

    <label>Descrição:</label><br>
    <textarea name="descricao">{{ old('descricao', $curso->descricao) }}</textarea><br><br>

    <label>Duração:</label><br>
    <input type="text" name="duracao" value="{{ old('duracao', $curso->duracao) }}"><br><br>

    <button type="submit">Atualizar</button>
</form>

<br>
<a href="{{ route('cursos.index') }}">Voltar</a>

</body>
</html>