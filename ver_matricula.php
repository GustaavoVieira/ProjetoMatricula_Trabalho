<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <title>Document</title>
    <script type="text/javascript">
        google.charts.load('current', {packages: ['corechart']});

        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable(<?php
                include 'conexao.php';

                $consulta_grafico = "SELECT curso.nome_curso, COUNT(matricula.id_matricula) AS total_matriculas
                                     FROM curso
                                     JOIN matricula ON curso.id_curso = matricula.id_curso
                                     GROUP BY curso.nome_curso";

                $resultado = mysqli_query($conexao, $consulta_grafico);

                $dados = [["Curso", "Matrículas"]];
                while ($linha = mysqli_fetch_assoc($resultado)) {
                    $dados[] = [$linha['nome_curso'], (int)$linha['total_matriculas']];
                }

                echo json_encode($dados);
            ?>);

            var options = {
                title: 'Número de Matrículas por Curso',
                width: 800,
                height: 400,
                hAxis: {
                    title: 'Cursos'
                },
                vAxis: {
                    title: 'Matrículas'
                }
            };

            var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
            chart.draw(data, options);
        }
    </script>
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
                <a class="nav-link active" aria-current="page" href="index.html">INICIO</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>
    <div class="container mt-4">
        <h2 class="mb-4">Tabela de Matrículas</h2>
        <table class="table table-bordered border-dark mt-2">
            <thead>
                <tr>
                    <th>Nome do Aluno</th>
                    <th>Nome do Curso</th>
                    <th>Deletar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $consulta_matricula = "SELECT matricula.id_matricula, aluno.nome_aluno, curso.nome_curso
                                           FROM aluno, curso, matricula
                                           WHERE matricula.id_aluno = aluno.id_aluno
                                           AND matricula.id_curso = curso.id_curso";
                    $consulta = mysqli_query($conexao, $consulta_matricula);
                    
                    while ($linha = mysqli_fetch_array($consulta)) {
                        echo '<tr><td>' . $linha['nome_aluno'] . '</td>';
                        echo '<td>' . $linha['nome_curso'] . '</td>';
                        echo '<td><a href="deleta_matricula.php?id_matricula=' . $linha['id_matricula'] . '"><input type="submit" value="Deletar Matricula"></a></td></tr>';
                    }
                ?>
            </tbody>
        </table>
        <div id="chart_div" class="mt-5"></div>
    </div>
</body>
</html>