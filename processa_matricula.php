<?php
    include 'conexao.php';
    $aluno = $_POST['escolha_aluno'];
    $curso = $_POST['escolha_curs'];
    $data = $_POST['data'];
    $numero = $_POST['numero'];

    $insere_matricula = "INSERT INTO matricula (id_aluno, id_curso, data_matricula, numero_matricula) VALUES ($aluno, $curso, $data, $numero)";

    mysqli_query($conexao, $insere_matricula);

    header('location: ver_matricula.php');
?>
