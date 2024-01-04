<?php
session_start();

include("conexao.php");

$senha = md5($_POST['password']);

$sql = "INSERT INTO `users`(`email_user`, `senha_user`, `tipo_user`, `nick_user`, `cidade_user`, `estado_user`) 
VALUES ('".$_POST['email']."','".$senha."','".$_POST['tipo']."','".$_POST['nick']."','".$_POST['cidade']."','".$_POST['uf']."')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Erro ao inserir os dados na plataforma: " . $sql . "<br> Erro: " . mysqli_error($conn);
}

mysqli_close($conn);

?>