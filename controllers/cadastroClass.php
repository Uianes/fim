<?php
session_start();

include("conexao.php");

$senha = md5($_POST['senha']);

$sql = "INSERT INTO `users`(`email_user`, `senha_user`, `tipo_user`, `nick_user`, `cidade_user`, `estado_user`, `genero_user`, `anonascimento_user`, `avatar_user`) 
VALUES ('".$_POST['email']."','".$senha."','".$_POST['tipo']."','".$_POST['nick']."','".$_POST['cidade']."','".$_POST['uf']."','".$_POST['genero']."','".$_POST['ano_nascimento']."','../assets/lu1.png')";

if (mysqli_query($conn, $sql)) {
    mysqli_close($conn);
    header('Location: ../views/login.php');
} else {
    echo "Erro ao inserir os dados na plataforma: " . $sql . "<br> Erro: " . mysqli_error($conn);
}

mysqli_close($conn);

?>