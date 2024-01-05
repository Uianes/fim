<?php
session_start();


if (isset($_POST['palavraClicada'])) {
    $valorRecebido = $_POST['palavraClicada'];

    if ($valorRecebido == "i" || $valorRecebido == "i:") {
            $_SESSION['pontuacao'] += 10;
            $_SESSION['acertos'] += 1;
            echo "
            <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css'>
            <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css'>
            <script src='https://code.jquery.com/jquery-3.5.1.slim.min.js'></script>
            <script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js'></script>
            <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js'></script>
            <div class='container mt-5'>
                <div class='jumbotron'>
                    <h1 class='display-4 text-dark'>Parabéns!</h1>
                        <hr class='my-4'>
                        <div class='row'>
                            <div class='col-md-6 col-12'>
                                <img class='img-fluid rounded' src='../../../assets/acerto.png' width='70%'>
                            </div>
                            <div class='col-md-6 col-12'>
                                <p>Você acertou a questão!</p>    
                            </div>
                        </div>
                        <a class='mt-5 btn btn-outline-success btn-lg' href='4.html' role='button'>Próxima</a>
                </div>
            </div>
            ";

    } else {
        $_SESSION['erros'] += 1;
        echo "
            <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css'>
            <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css'>
            <script src='https://code.jquery.com/jquery-3.5.1.slim.min.js'></script>
            <script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js'></script>
            <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js'></script>
            <div class='container mt-5'>
                <div class='jumbotron'>
                    <h1 class='display-4 text-dark'>Ops...</h1>
                        <hr class='my-4'>
                        <div class='row'>
                            <div class='col-md-6 col-12'>
                                <img class='img-fluid rounded' src='../../../assets/erro.png' width='70%'>
                            </div>
                            <div class='col-md-6 col-12'>
                                <p>Você errou a questão!
                                <br>
                                    Um contador é uma variável utilizada para controlar um fluxo.
                                    Nesse exemplo, a variável i recebe um valor inicial (1) e fará com que a repetição ocorrá até que o valor de i seja igual a 10.
                                </p>    
                            </div>
                        </div>
                        <a class='mt-5 btn btn-outline-success btn-lg' href='4.html' role='button'>Próxima</a>
                </div>
            </div>
            ";
    }
} else {
    echo "<script>
    alert('Erro! Nenhum valor recebido!');
    window.location.href = 'index.html';
    </script>";
}
?>