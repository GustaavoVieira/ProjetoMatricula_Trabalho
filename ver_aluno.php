<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Tabela de Alunos</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="">SistemaISP</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.html">INÍCIO</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-4">
    <h2 class="mb-4">Tabela de Alunos</h2>
    <table class="table table-bordered table-striped table-hover border-dark rounded">
        <thead class="thead-dark">
            <tr>
                <th>Nome</th>
                <th>Idade</th>
                <th>CPF</th>
                <th>Escolaridade</th>
                <th>Editar</th>
                <th>Deletar</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include 'conexao.php';
                $consulta_aluno = "SELECT * FROM aluno";
                $consulta = mysqli_query($conexao, $consulta_aluno);
                while ($linha = mysqli_fetch_array($consulta)) {
                    echo '<tr><td>' . $linha['nome_aluno'] . '</td>';
                    echo '<td>' . $linha['idade'] . '</td>';
                    echo '<td>' . $linha['cpf'] . '</td>';
                    echo '<td>' . $linha['escolaridade'] . '</td>';
            ?>
            <td>
                <a href="editar_aluno.php?editar=<?php echo $linha['id_aluno']; ?>" class="btn btn-primary btn-sm">Editar</a>
            </td>
            <td>
                <a href="deleta_aluno.php?id_aluno=<?php echo $linha['id_aluno']; ?>" class="btn btn-danger btn-sm">Deletar</a>
            </td>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
</div>
</body>
</html>
