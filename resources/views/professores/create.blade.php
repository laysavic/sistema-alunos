<h2>Cadastrar Professor</h2>

<form action="{{ route('professores.store') }}" method="POST">
    @csrf

    <label>Nome:</label><br>
    <input type="text" name="nome"><br><br>

    <label>Especialidade:</label><br>
    <input type="text" name="especialidade"><br><br>

    <label>Email:</label><br>
    <input type="email" name="email"><br><br>

    <label>Telefone:</label><br>
    <input type="text" name="telefone"><br><br>

    <button type="submit">Salvar</button>
</form>

<br>
<a href="{{ route('professores.index') }}">Voltar</a>





