<?php
    session_start();

    include("header.php");
    

    if($_SESSION["logado"] == true){
        echo "Bem-vindo! @".$_SESSION['nick'];
    } else {
        echo "<script>alert('Erro no login! Por favor, tente novamente')</script>";
        header("Location: login.php");
    }

    include("footer.php");

?>