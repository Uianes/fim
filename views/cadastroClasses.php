<?php

session_start();

include("header.php");

if ($_SESSION["logado"] == true) {
    if ($_SESSION["tipo"] == "Professor") {
        include("../models/navbarprofessor.php");
        include("../models/offcanvasprofessor.php");
    } else {
        header("Location: ../index.php");
    } 
} else {
    header("Location: ../index.php");
}
?>
<div class='container-fluid p-5'>
    <div class="row">
        <div class="col-12">
            <form method="GET" action="../controllers/cadastroClasses.php">
                <div class="form-group">
                    <label for="input1">Nome da Turma:</label>
                    <input name="nome_class" required type="text" maxlength="300" class="form-control" id="input1">
                </div>
                <div class="form-group">
                    <label for="input2">Ano da Turma:</label>
                    <input name="ano" required type="number" min="2023" class="form-control" id="input2">
                </div>
                <?php
                $conteúdos = array(
                    "Lógica: abordagens e suas tecnologias",
                    "Definição de Algoritmos, representações e paradigmas",
                    "Blocos de comandos e escopos",
                    "Interação com o usuário: entrada e saída de dados",
                    "Dados primitivos: armazenamento e manipulação",
                    "Operações e expressões",
                    "Matemática discreta e computacional",
                    "Funções e Procedimentos",
                    "Estrutura de controle condicional",
                    "Estrutura de controle de fluxo (repetições)",
                    "Estrutura de dados homogêneas",
                    "Estrutura de dados heterogêneas e dinâmicas",
                    "Manipulação de arquivos",
                    "Implementação, testes e técnicas de programação",
                    "Algoritmos de manipulação e estruturas de dados",
                    "Integração com outras áreas"
                );

                $eixos = array(
                    "Text Surface Tasks (TST)",
                    "Program Execution Tasks (PET)",
                    "Function or Purpose Tasks (FPT)"
                );

                $estruturas = array(
                    "ATOM",
                    "BLOCK",
                    "RELATIONAL",
                    "MACRO"
                );

                for ($i = 0; $i < 16; $i++) {
                    echo ("
                        <br><h2>$conteúdos[$i]</h2><br>");
                    for ($j = 0; $j < 3; $j++) {
                        for ($l = 0; $l < 4; $l++) {
                            echo ("
                                <div class='form-check form-switch'>
                                    <input class='form-check-input' type='checkbox' id='$i$j$l' value='$i$j$l'>
                                    <label class='form-check-label' for='$i$j$l'>$eixos[$j]: $estruturas[$l]</label>
                                    <a href='../views/questoes/.php' class='btn'><i class='bi bi-eye'></i></a>
                                </div>
                                ");
                        }
                    }
                }
                echo "<input type='text' name='id_user' value='".$_SESSION['id_user']."' hidden disabled>";
                ?>
                <div class="form-group text-center pt-2">
                    <button class="btn btn-success btn-lg" type="submit">Enviar</button>
                </div>
            </form>
        </div>
    </div>

    <?php
    include("footer.php");
    ?>