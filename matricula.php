<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Cadastro de Matrícula</title>
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
                    <a class="nav-link active" aria-current="page" href="index.html">Inicio</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-5">
    <h2 class="text-center mb-4">Cadastro de Matrícula</h2>
    <form method="post" action="processa_matricula.php" class="row g-3">
        <div class="col-md-6">
            <label for="escolha_aluno" class="form-label">Escolha um aluno</label>
            <select name="escolha_aluno" id="escolha_aluno" class="form-select">
                <?php
                    include 'conexao.php';
                    $consulta = "SELECT * FROM aluno";
                    $consulta_aluno = mysqli_query($conexao, $consulta);

                    while ($linha = mysqli_fetch_array($consulta_aluno)) {
                        echo '<option value="' . $linha['id_aluno'] . '">' . $linha['nome_aluno'] . '</option>';
                    }
                ?>
            </select>
        </div>

        <div class="col-md-6">
            <label for="escolha_curso" class="form-label">Escolha um curso</label>
            <select name="escolha_curs" id="escolha_curso" class="form-select">
                <?php
                    include 'conexao.php';
                    $consulta = "SELECT * FROM curso";
                    $consulta_curso= mysqli_query($conexao, $consulta);

                    while ($linha = mysqli_fetch_array($consulta_curso)) {
                        echo '<option value="' . $linha['id_curso'] . '">' . $linha['nome_curso'] . '</option>';
                    }
                ?>
            </select>
        </div>

        <div class="col-md-6">
            <label for="data" class="form-label">Data da matrícula</label>
            <input type="text" name="data" id="data" class="form-control" placeholder="Digite uma data">
        </div>

        <div class="col-md-6">
            <label for="numero" class="form-label">Número da matrícula</label>
            <input type="text" name="numero" id="numero" class="form-control" placeholder="Digite um número de matrícula">
        </div>

        <div class="col-12 text-center">
            <button type="submit" class="btn btn-success">Cadastrar Matrícula</button>
        </div>
    </form>

    <div class="text-center mt-4">
        <a href="index.html" class="btn btn-secondary me-2">Voltar</a>
        <a href="ver_matricula.php" class="btn btn-primary">Ver Tabela</a>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGFz1IHm3YtK1hZSUQoNfpmLZJO2boB4tcR53muFElxK" crossorigin="anonymous"></script>
</body>
</html>
