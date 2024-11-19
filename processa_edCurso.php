<?php
    include 'conexao.php';

    $id_curso = $_POST['id_curso'];
    $nome_curso = $_POST['nome_curso'];
    $descricao = $_POST['descricao'];
    $carga_horaria = $_POST['carga_horaria'];
    $area = $_POST['area'];

    $edita_curso = "UPDATE curso SET nome_curso = '$nome_curso',
                                        descricao = '$descricao',
                                        carga_horaria = '$carga_horaria',
                                        area = '$area'
                                        WHERE id_curso = $id_curso";
    mysqli_query($conexao,  $edita_curso);

    header('location: ver_curso.php');
?>