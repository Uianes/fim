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
            <div class="text-center col-12 p-5">
                <button type="button" hidden id="btn-entendi" class="btn btn-success btn-lg">Entendi!</button>
            </div>
        </div>
    </div>

    <div class="m-2" id="formhidden" hidden>
        <form method="POST" action="../controllers/cadastroUser.php">
            <div class="form-group">
                <label for="input1">E-mail:</label>
                <input name="email" required type="email" maxlength="300" class="form-control" id="input1"
                    placeholder="nome@exemplo.com">
            </div>
            <div class="form-group">
                <label for="input2">Senha:</label>
                <input name="senha" required type="password" maxlength="50" class="form-control" id="input2">
            </div>
            <div class="form-group">
                <label for="input3">Eu sou:</label>
                <select class="form-control" required id="input3" name="tipo">
                    <option>Aluno</option>
                    <option>Professor</option>
                </select>
            </div>
            <div class="form-group">
                <label for="input4">Meu nome/nick:</label>
                <input name="nick" required type="text" maxlength="50" class="form-control" id="input4">
            </div>
            <div class="form-group">
                <label for="input5">Minha cidade:</label>
                <input name="cidade" required type="text" class="form-control" id="input5">
            </div>
            <div class="form-group">
                <label for="input6">Estado</label>
                <select class="form-control" required id="input6" name="uf">
                    <option value="AC">Acre (AC)</option>
                    <option value="AL">Alagoas (AL)</option>
                    <option value="AP">Amapá (AP)</option>
                    <option value="AM">Amazonas (AM)</option>
                    <option value="BA">Bahia (BA)</option>
                    <option value="CE">Ceará (CE)</option>
                    <option value="DF">Distrito Federal (DF)</option>
                    <option value="ES">Espírito Santo (ES)</option>
                    <option value="GO">Goiás (GO)</option>
                    <option value="MA">Maranhão (MA)</option>
                    <option value="MT">Mato Grosso (MT)</option>
                    <option value="MS">Mato Grosso do Sul (MS)</option>
                    <option value="MG">Minas Gerais (MG)</option>
                    <option value="PA">Pará (PA)</option>
                    <option value="PB">Paraíba (PB)</option>
                    <option value="PR">Paraná (PR)</option>
                    <option value="PE">Pernambuco (PE)</option>
                    <option value="PI">Piauí (PI)</option>
                    <option value="RJ">Rio de Janeiro (RJ)</option>
                    <option value="RN">Rio Grande do Norte (RN)</option>
                    <option value="RS">Rio Grande do Sul (RS)</option>
                    <option value="RO">Rondônia (RO)</option>
                    <option value="RR">Roraima (RR)</option>
                    <option value="SC">Santa Catarina (SC)</option>
                    <option value="SP">São Paulo (SP)</option>
                    <option value="SE">Sergipe (SE)</option>
                    <option value="TO">Tocantins (TO)</option>
                </select>
            </div>
            <br>
            <div class="form-group">
                <label for="input7">Ano de nascimento:</label>
                <input name="ano_nascimento" required type="number" min="1940" max="<?php echo "" . date("Y"); ?>" class="form-control" id="input7">
            </div>
            <div class="form-group">
                <label for="input8">Gênero</label>
                <select class="form-control" required id="input8" name="genero">
                    <option>Mulher cisgênero</option>
                    <option>Mulher transgênero</option>
                    <option>Homem cisgênero</option>
                    <option>Homem transgênero</option>
                    <option>Gênero não-binário</option>
                    <option>Agênero</option>
                    <option>Gênero-fluido</option>
                    <option>Bigênero</option>
                    <option>Mulher transexual</option>
                    <option>Homem transexual</option>
                    <option>Poligênero</option>
                    <option>Gênero neutro</option>
                </select>
            </div>
            <br>
            <div class="form-group text-center pt-2">
                <button class="btn btn-success btn-lg" type="submit">Enviar</button>
            </div>
        </form>
    </div>
</div>



<script>
    document.addEventListener("DOMContentLoaded", function () {
        const textoInicial = "Saudações! Eu sou a </Luh!> <br> <br> Vou te guiar no início desta aventura!";
        const texto2 = "<br> Primeiro preciso saber os seus <dados/>. Preencha-os com cuidado! <br> <br> E confira tudo antes de enviar!";
        let index = 0;
        const textoDigitado = document.getElementById("texto-digitado");
        const btnEntendi = document.getElementById("btn-entendi");

        function hiddenForm() {
            document.getElementById("formhidden").removeAttribute("hidden");
        }

        function type(texto, element) {
            if (index < texto.length) {
                element.textContent += texto.charAt(index);
                index++;
                setTimeout(function () { type(texto, element); }, 80); // ajuste a velocidade aqui
            }
            if (index == 112) {
                document.getElementById("btn-entendi").setAttribute("hidden", true);
                hiddenForm();
            } else if (index == 76) {
                document.getElementById("btn-entendi").removeAttribute("hidden");
            }

        }

        btnEntendi.addEventListener("click", function () {
            textoDigitado.textContent = "";
            index = 0;
            type(texto2, textoDigitado);
        });

        type(textoInicial, textoDigitado);
    });
</script>



<?php
include("footer.php");
?>