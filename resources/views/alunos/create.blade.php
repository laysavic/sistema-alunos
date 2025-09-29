<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cad-aluno</title>
</head>
<body>
     <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #b2d7f0ff;
            color: #5c42b1ff;
            text-align: center;
        }

        h1 {
            color: #2b3586ff;
            margin-top: 40px;
        }

        .add-btn {
            display: inline-block;
            background-color: #1a005bff;
            color: white;
            padding: 10px 20px;
            border-radius: 6px;
            text-decoration: none;
            margin-bottom: 20px;
            font-weight: bold;
        }

        .add-btn:hover {
            background-color: #8394ebff;
        }

        table {
            margin: 0 auto;
            border-collapse: collapse;
            width: 90%;
            box-shadow: 0 0 8px rgba(0,0,0,0.1);
            background-color: #fff;
        }

        th, td {
            padding: 12px;
            border: 1px solid #403a4dff;
        }

        th {
            background-color: #44469eff;
            color: white;
        }

        td {
            text-align: center;
        }

        .actions button {
            background-color: #5543b1ff;
            color: white;
            border: none;
            padding: 6px 10px;
            border-radius: 5px;
            cursor: pointer;
            margin: 2px;
        }

        .actions button:hover {
            background-color: #b4aeecff;
        }

        .actions a {
            color: white;
            text-decoration: none;
        }
    </style>
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