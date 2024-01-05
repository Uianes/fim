<?php
session_start();
include("conexao.php");
$sql = "INSERT INTO `classes`(`nome_class`, `ano`, `conteudos_class`, `id_user`) VALUES ('[value-2]','[value-3]','[value-4]','[value-5]')";
if (mysqli_query($conn, $sql)) {
    mysqli_close($conn);
    header('Location: ../views/login.php');
} else {
    echo "Erro ao inserir os dados na plataforma: " . $sql . "<br> Erro: " . mysqli_error($conn);
}
mysqli_close($conn);
?>