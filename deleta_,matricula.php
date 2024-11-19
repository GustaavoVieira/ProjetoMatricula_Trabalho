<?php
    include 'conexao.php';

    $id_matricula = $_GET['id_matricula'];

    $deleta_matricula = "DELETE FROM matricula WHERE id_matricula = $id_matricula";

    mysqli_query($conexao, $deleta_matricula);

    header('location: ver_matricula.php');
?>