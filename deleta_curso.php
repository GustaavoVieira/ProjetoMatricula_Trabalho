<?php
    include 'conexao.php';
    $id_curso = $_GET['id_curso'];

    $deleta_curso = "DELETE FROM curso WHERE id_curso = $id_curso";

    mysqli_query($conexao, $deleta_curso);

    header ('location: ver_curso.php');
?>