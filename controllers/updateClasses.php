<?php
session_start();
include("conexao.php");
$conteudos = array();
$nome = $_POST["nome_class"];
$ano = $_POST["ano"];
for ($i = 0; $i < 16; $i++) {
    for ($j = 0; $j < 3; $j++) {
        for ($l = 0; $l < 4; $l++) {
            if($_POST["".$i."".$j."".$l] == true) {
                array_push($conteudos, "".$i."".$j."".$l);
            }
        }
    }
}
$conteudos = json_encode($conteudos);
if(is_numeric(($_SESSION['id']))){
    $id = $_SESSION['id'];
} else {
    $id = $_POST['id_user'];
}
$sql = "UPDATE `classes` SET `nome_class`='".$nome."',`ano`='".$ano."',`conteudos_class`='".$conteudos."' WHERE `id_class`='".$_SESSION['turma']."';";

if (mysqli_query($conn, $sql)) {
    mysqli_close($conn);
    header('Location: ../views/progluh.php');
} else {
    echo "Erro ao inserir os dados na plataforma: " . $sql . "<br> Erro: " . mysqli_error($conn);
    mysqli_close($conn);
}
?>