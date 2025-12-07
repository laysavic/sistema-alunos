<h2>Editar Professor</h2>

<form action="{{ route('professores.update', $professor->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Nome:</label><br>
    <input type="text" name="nome" value="{{ $professor->nome }}"><br><br>

    <label>Especialidade:</label><br>
    <input type="text" name="especialidade" value="{{ $professor->especialidade }}"><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" value="{{ $professor->email }}"><br><br>

    <label>Telefone:</label><br>
    <input type="text" name="telefone" value="{{ $professor->telefone }}"><br><br>

    <button type="submit">Atualizar</button>
</form>

<br>
<a href="{{ route('professores.index') }}">Voltar</a>





