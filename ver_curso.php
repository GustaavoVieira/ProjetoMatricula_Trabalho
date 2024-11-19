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
        <h2 class="text-center mb-4">Tabela de Cursos</h2>
        <table class="table table-striped table-hover table-bordered border-dark">
            <thead class="table-dark">
                <tr>
                    <th>Nome do Curso</th>
                    <th>Descrição</th>
                    <th>Carga Horária</th>
                    <th>Área</th>
                    <th>Editar</th>
                    <th>Deletar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include 'conexao.php';
                    $consulta_curso = "SELECT * FROM curso";
                    $consulta = mysqli_query($conexao, $consulta_curso);
                    while ($linha = mysqli_fetch_array($consulta)) {
                        echo '<tr>';
                        echo '<td>' . $linha['nome_curso'] . '</td>';
                        echo '<td>' . $linha['descricao'] . '</td>';
                        echo '<td>' . $linha['carga_horaria'] . '</td>';
                        echo '<td>' . $linha['area'] . '</td>';
                ?>
                <td>
                    <a href="editar_curso.php?editar=<?php echo $linha['id_curso']; ?>" class="btn btn-warning btn-sm">Editar</a>
                </td>
                <td>
                    <a href="deleta_curso.php?id_curso=<?php echo $linha['id_curso']; ?>" class="btn btn-danger btn-sm">Deletar</a>
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
