<?php
session_start();
include("../controllers/conexao.php");

$sql = "INSERT INTO `lessons`(`id_user`, `id_atividade`, `cod_turma`, `data_inicio`, `data_fim`, `pontuação`, `acertos`, `erros`)
 VALUES ('".$_SESSION['id']."','".$_SESSION['licao']."','3','".$_SESSION['inicio']."','".$_SESSION['fim']."','".$_SESSION['pontuaca']."','".$_SESSION['acertos']."','".$_SESSION['erros']."')";
if (mysqli_query($conn, $sql)) {
    echo "Dados registrados com sucesso!";
} else {
    echo "Erro ao inserir os dados na plataforma: " . $sql . "<br> Erro: " . mysqli_error($conn);
}
mysqli_close($conn);
?>