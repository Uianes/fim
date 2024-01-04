<?php
include("header.php");

include("navbar.php");
?>
<div class="container-fluid">
    <div class="h1 container-fluid d-flex justify-content-center align-items-center" style="height: 50vh;">
        <img class="img-fluid" width="20%" src="../assets/lu1.png" alt="Menina programadora negra em estilo robótico">
        <div class="row">
            <div class="col-12">
                <p id="texto-digitado" class="p-5"></p>
            </div>
        </div>
    </div>

    <div class="m-2" id="formhidden" hidden>
        <form method="POST" action="../controllers/loginUser.php">
            <div class="form-group">
                <label for="input1">E-mail:</label>
                <input name="email" required type="email" maxlength="300" class="form-control" id="input1"
                    placeholder="nome@exemplo.com">
            </div>
            <div class="form-group">
                <label for="input2">Senha:</label>
                <input name="senha" required type="password" maxlength="50" class="form-control" id="input2">
            </div>
            <div class="form-group text-center pt-2">
                <button class="btn btn-success btn-lg" type="submit" name='enviar'>Enviar</button>
            </div>
        </form>
    </div>
</div>



<script>
    document.addEventListener("DOMContentLoaded", function () {
        const textoInicial = "Saudações! Eu sou a </Luh!> <br> <br> É bom te ver novamente!";
        console.log(textoInicial.length);
        let index = 0;
        const textoDigitado = document.getElementById("texto-digitado");

        function hiddenForm() {
            document.getElementById("formhidden").removeAttribute("hidden");
        }


        function type(texto, element) {
            if (index < texto.length) {
                element.textContent += texto.charAt(index);
                index++;
                setTimeout(function () { type(texto, element); }, 50); // ajuste a velocidade aqui
            }
            if (index == 61) {
                hiddenForm();
            }
        }
        type(textoInicial, textoDigitado);
    });
</script>



<?php
include("footerpage.php");
include("footer.php");
?>