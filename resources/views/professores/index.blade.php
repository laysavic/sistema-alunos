<h2>Lista de Professores</h2>

<a href="{{ route('professores.create') }}">Cadastrar Novo Professor</a>

@if(session('success'))
    <p>{{ session('success') }}</p>
@endif

<table border="1" cellpadding="8" cellspacing="0">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Especialidade</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Ações</th>
        </tr>
    </thead>

    <tbody>
        @foreach($professores as $professor)
            <tr>
                <td>{{ $professor->id }}</td>
                <td>{{ $professor->nome }}</td>
                <td>{{ $professor->especialidade }}</td>
                <td>{{ $professor->email }}</td>
                <td>{{ $professor->telefone }}</td>
                <td>
                    <a href="{{ route('professores.edit', $professor->id) }}">Editar</a>

                    <form action="{{ route('professores.destroy', $professor->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Excluir</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>






