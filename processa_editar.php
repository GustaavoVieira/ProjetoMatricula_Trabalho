<?php
    include 'conexao.php';

    $id_aluno = $_POST['id_aluno'];
    $nome_aluno = $_POST['nome_aluno'];
    $idade = $_POST['idade'];
    $cpf = $_POST['cpf'];
    $escolaridade = $_POST['escolaridade'];

    $editar_aluno = "UPDATE aluno SET nome_aluno = '$nome_aluno',
                                     idade = '$idade',
                                     cpf = '$cpf',
                                     escolaridade = '$escolaridade' 
                                     WHERE id_aluno = $id_aluno";
    
    mysqli_query($conexao, $editar_aluno);
    
    header('Location: ver_aluno.php');
?>