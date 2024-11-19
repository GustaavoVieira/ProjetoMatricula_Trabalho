<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Editar Curso</title>
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
                        <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container my-5">
        <?php
        include 'conexao.php';
        $consulta_curso = "SELECT * FROM curso";
        $consulta = mysqli_query($conexao, $consulta_curso);
        while ($linha = mysqli_fetch_array($consulta)) {
            if ($linha['id_curso'] == $_GET['editar']) { ?>
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <h1 class="text-center mb-4">Editar Curso</h1>
                        <form method="post" action="processa_edCurso.php" class="p-4 border rounded shadow">
                            <input type="hidden" name="id_curso" value="<?php echo $linha['id_curso']; ?>" />

                            <div class="mb-3">
                                <label class="form-label">Nome</label>
                                <input type="text" class="form-control" name="nome_curso" value="<?php echo $linha['nome_curso']; ?>">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Descrição</label>
                                <input type="text" class="form-control" name="descricao" value="<?php echo $linha['descricao']; ?>">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Carga Horária</label>
                                <input type="number" class="form-control" name="carga_horaria" value="<?php echo $linha['carga_horaria']; ?>">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Área</label>
                                <input type="text" class="form-control" name="area" value="<?php echo $linha['area']; ?>" />
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Editar Curso</button>
                            </div>
                        </form>
                    </div>
                </div>
        <?php
            }
        }
        ?>
    </div>
</body>

</html>
