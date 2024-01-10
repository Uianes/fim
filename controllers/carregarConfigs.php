<div class='container-fluid p-2'>
    <div class="row">
        <div class="col-12">
            <form method="POST" action="../controllers/updateClasses.php">
                <?php
                echo "
                <div class='form-group'>
                    <label for='input1'>Nome da Turma:</label>
                    <input name='nome_class' required type='text' maxlength='300' class='form-control' id='input1' value='".$_SESSION['nometurma']."'>
                </div>
                <div class='form-group'>
                    <label for='input2'>Ano da Turma:</label>
                    <input name='ano' required type='number' min='2023' class='form-control' id='input2' value='".$_SESSION['anoturma']."'>
                </div>
                ";
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
                $array = json_decode($_SESSION['conteudos'], true);
                for ($i = 0; $i < 16; $i++) {
                    echo ("<br><h2>$conteúdos[$i]</h2><br>");
                    for ($j = 0; $j < 3; $j++) {
                        for ($l = 0; $l < 4; $l++) {
                            $id = "$i$j$l";
                            $checked = in_array($id, $array) ? 'checked' : '';
                            echo ("
                                <div class='form-check form-switch'>
                                    <input class='form-check-input' type='checkbox' id='$id' name='$id' value='true' $checked>
                                    <label class='form-check-label' for='$id'>$eixos[$j]: $estruturas[$l]</label>
                                    <a href='../views/questoes/$id/index.html' class='btn'><i class='bi bi-eye'></i></a>
                                </div>
                                ");
                        }
                    }
                }
                echo "<input type='text' name='id_user' value='" . $_SESSION['id'] . "' hidden>";
                ?>
                <div class="form-group text-center pt-2">
                    <button class="btn btn-success btn-lg" type="submit">Salvar atualizações</button>
                </div>
            </form>
        </div>
    </div>
</div>