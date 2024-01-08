<?php
session_start();
$t = $_GET['t'];
include("../views/header.php");

if ($_SESSION["logado"] == true) {

    if ($_SESSION["tipo"] == "Professor") {
        include("validarClass.php");
        include("../models/navbarprofessor.php");
        include("../models/offcanvasprofessor.php");
        echo ("<div class='container-fluid p-5'>");
        echo ("<img src=" . $_SESSION['avatar'] . " class='img-thumbnail rounded-circle' alt='Avatar do usuário' width='100vw'>");
        echo "<h1>@" . $_SESSION['nick'] . ", aqui você poderá gerenciar sua turma!</h1>";
        echo "<hr><h2>Acesso rápido:</h2>";
        echo "<br><h5>Visualizar turma <i class='bi bi-eye'></i></h5>";
        echo "<br><h5>Relatório da turma <i class='bi bi-file-bar-graph'></i></h5>";
        echo "<hr><h2>Configurações da turma</h2>";
        include("carregarConfigs.php");
        echo "<hr><h2>Lista de alunos da turma</h2>";
        include("listarAlunos.php");
        echo ("</div>");
    }
} else {
    echo "<script>alert('Erro no login! Por favor, tente novamente')</script>";
    header("Location: ../views/login.php");
}
include("../views/footer.php");
?>