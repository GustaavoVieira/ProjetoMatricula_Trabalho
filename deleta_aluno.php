<?php

    include 'conexao.php';
    
    $id_aluno = $_GET['id_aluno'];

    $deleta_aluno = "DELETE FROM aluno WHERE id_aluno = $id_aluno";

    mysqli_query($conexao, $deleta_aluno);

    header('Location: ver_aluno.php');
?>