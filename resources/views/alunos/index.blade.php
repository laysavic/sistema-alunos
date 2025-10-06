<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alunos</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<script>
    function confirmarExclusao() {
        return confirm("Tem certeza que deseja excluir este aluno(a)?");
    }
</script>

<body>
 @if(session('success'))
        <div class="alert">
            {{ session('success') }}
        </div>
    @endif

    <h1>Alunos</h1>

    <a href="{{ route('alunos.create') }}" class="add-btn">+ Adicionar Aluno</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Matrícula</th>
                <th>Curso</th>
                <th>Idade</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($alunos as $aluno)
                <tr>
                    <td>{{ $aluno->id }}</td>
                    <td>{{ $aluno->nome }}</td>
                    <td>{{ $aluno->matricula }}</td>
                    <td>{{ $aluno->curso }}</td>
                    <td>{{ $aluno->idade }}</td>
                    <td class="actions">
                        <a href="{{ route('alunos.edit', $aluno->id) }}"><button>Editar</button></a>
                        <form action="{{ route('alunos.destroy', $aluno->id) }}" method="POST"  onsubmit="return confirmarExclusao()">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
   
</body>
</html>