<?php
session_start();
if(isset($_POST["enviar"])){
include("conexao.php");
$senha = md5($_POST['senha']);
$user = $_POST ['email'];
$sql = "SELECT id_user, nick_user, tipo_user, avatar_user FROM users WHERE email_user = '".$user."' AND senha_user = '".$senha."'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    $_SESSION['logado'] = true;
    $_SESSION['nick'] =  $row["nick_user"];
    $_SESSION['id'] =  $row["id_user"];
    $_SESSION['tipo'] =  $row["tipo_user"];
    $_SESSION['avatar'] =  $row["avatar_user"];
    $_SESSION['password'] = $senha;
    mysqli_close($conn);
    header('Location: ../views/progluh.php');
  }
} else {
    mysqli_close($conn);
    echo "<script>alert('Erro ao procurar os dados na plataforma. <br> Verifique novamente os seus dados!')</script>";
    header("Location: ../views/login.php");
}
}
?>