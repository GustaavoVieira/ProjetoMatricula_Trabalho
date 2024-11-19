<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">SistemaISP</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-5">
    <?php
    include 'conexao.php';
    $consulta_aluno = "SELECT * FROM aluno";
    $consulta = mysqli_query($conexao, $consulta_aluno);
    while ($linha = mysqli_fetch_array($consulta)) {
        if ($linha['id_aluno'] == $_GET['editar']) {
    ?>
    <div class="card shadow-lg">
        <div class="card-body">
            <h1 class="text-center mb-4">Editar Aluno</h1>
            <form method="post" action="processa_editar.php">
                <input type="hidden" name="id_aluno" value="<?php echo $linha['id_aluno']; ?>"/>
                
                <div class="mb-3">
                    <label for="nome_aluno" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nome_aluno" name="nome_aluno" value="<?php echo $linha['nome_aluno']; ?>" required>
                </div>

                <div class="mb-3">
                    <label for="idade" class="form-label">Idade</label>
                    <input type="number" class="form-control" id="idade" name="idade" value="<?php echo $linha['idade']; ?>" required>
                </div>

                <div class="mb-3">
                    <label for="cpf" class="form-label">CPF</label>
                    <input type="text" class="form-control" id="cpf" name="cpf" value="<?php echo $linha['cpf']; ?>" required>
                </div>

                <div class="mb-3">
                    <label for="escolaridade" class="form-label">Escolaridade</label>
                    <input type="text" class="form-control" id="escolaridade" name="escolaridade" value="<?php echo $linha['escolaridade']; ?>" required>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Editar Aluno</button>
                </div>
            </form>
        </div>
    </div>
    <?php
        }
    }
    ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ZMoqhMQ6qiwkXkSeT40I1s1EKRcJNeaaIo1ovRJqQ+7CxYb2UP2xKhcLc8Y7xl4f" crossorigin="anonymous"></script>
</body>
</html>