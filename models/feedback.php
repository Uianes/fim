<?php
session_start();
include("../views/header.php");
if ($_SESSION["logado"] == true) {
    echo ("<div class='container-fluid p-5'>");
    echo ("<img src=" . $_SESSION['avatar'] . " class='img-thumbnail rounded-circle' alt='Avatar do usuário' width='100vw'>");
    echo "<h1>Saudações! @" . $_SESSION['nick'] . "</h1>";
    echo ("
    <div class='row'>
        <div class='text-center display-5 p-5'> < Feedback /> </div>
        <div class='col-sm-6'>
            <div class='card'>
                <div class='card-body text-light bg-success'>
                    <h5 class='card-title'>Acertos:</h5>
                    <p class='card-text'>".$_SESSION['acertos']."</p>
                </div>
            </div>
        </div>
        <div class='col-sm-6'>
            <div class='card'>
                <div class='card-body text-light bg-danger'>
                    <h5 class='card-title'>Erros:</h5>
                    <p class='card-text'>".$_SESSION['erros']."</p>
                </div>
            </div>
        </div>
        <div class='col-sm-6 pt-5'>
            <div class='card'>
                <div class='card-body text-light bg-info'>
                    <h5 class='card-title'>Pontuação:</h5>
                    <p class='card-text'>".$_SESSION['pontuacao']."</p>
                </div>
            </div>
        </div>
        <div class='col-sm-6 pt-5'>
            <div class='card'>
                <div class='card-body bg-warning'>
                    <h5 class='card-title'>Tempo:</h5>
                    <p class='card-text'>Início: ".$_SESSION['inicio']." - Fim: ".$_SESSION['fim']."</p>
                </div>
            </div>
        </div>
        <a class='mt-5 btn btn-outline-success btn-lg' href='../views/progluh.php' role='button'>Entendido!</a>
    </div>");
} else {
    echo "<script>alert('Erro no login! Por favor, tente novamente')</script>";
    header("Location: login.php");
}
include("footer.php");
?>