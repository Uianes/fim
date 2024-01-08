<?php
session_start();
include("conexao.php");
$sql = "SELECT * FROM `classes` WHERE `id_class` = '".$_GET['t']."' AND `id_user` = '".$_SESSION['id']."'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    $_SESSION['turma'] = $row["id_class"];
    $_SESSION['nometurma'] = $row['nome_class'];
    $_SESSION['anoturma'] = $row['ano'];
    $_SESSION['conteudos'] = $row['conteudos_class'];
    mysqli_close($conn);
  }
} else {
    mysqli_close($conn);
    echo "<script>alert('Erro ao procurar os dados na plataforma. <br> Verifique novamente os seus dados!')</script>";
    header("Location: ../views/login.php");
}
?>