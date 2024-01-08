<?php
session_start();
include("../controllers/conexao.php");
$sql = "INSERT INTO `lessons`(`id_user`, `id_atividade`, `cod_turma`, `pontuação`, `acertos`, `erros`, `data_inicio`, `data_fim`) 
VALUES ('".$_SESSION['id']."','".$_SESSION['licao']."','3','".$_SESSION['pontuacao']."','".$_SESSION['acertos']."','".$_SESSION['erros']."','".$_SESSION['inicio']."','".$_SESSION['fim']."')";
if (mysqli_query($conn, $sql)) {
    if($_SESSION['tipo'] == "Professor"){
        header("Location: ../views/progluh.php");
    } else {
        //Aqui colocar para voltar pra a lista de todas as atividades.
        header("Location: ../views/progluh.php");
    }
} else {
    echo "Erro ao inserir os dados na plataforma: " . $sql . "<br> Erro: " . mysqli_error($conn);
}
mysqli_close($conn);
?>