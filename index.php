<?php
session_start();
include("views/header.php");

include("views/navbar.php");
?>
<div class="h1 container-fluid d-flex justify-content-center align-items-center" style="height: 100vh;">
    <img class="img-fluid" width="50%" src="assets/lu1.png" alt="Menina programadora negra em estilo robótico">
    <div class="row">
        <div class="col-12">
            <p class="p-5">Saudações! Eu sou a Luh! <br>
                <br>
                Progluh apresenta uma abordagem diferente para aprender Programação!
            </p>
        </div>
        <div class="text-center col-12 p-5">
            <button class="btn btn-success btn-lg">Entrar na conta</button>
            <br>
            <br>
            <button class="btn btn-success btn-lg">Criar uma conta</button>
        </div>

    </div>
</div>



<?php
include("views/footerpage.php");
include("views/footer.php");
?>