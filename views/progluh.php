<?php
session_start();

include("header.php");


if ($_SESSION["logado"] == true) {
    if ($_SESSION["tipo"] == "Professor") {

        echo "Bem-vindo! @" . $_SESSION['nick'];

        
        include("../models/offcanvasprofessor.php");
    } else if($_SESSION["tipo"] == "Aluno"){
        echo "Bem-vindo! @" . $_SESSION['nick'];
        echo "<button class='btn btn-primary' type='button' data-bs-toggle='offcanvas' data-bs-target='#offcanvasRight' aria-controls='offcanvasRight'>Toggle right offcanvas</button>";
        include("../models/offcanvasprofessor.php");
    }

} else {
    echo "<script>alert('Erro no login! Por favor, tente novamente')</script>";
    header("Location: login.php");
}

include("footer.php");

?>