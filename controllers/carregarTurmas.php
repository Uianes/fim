<?php
session_start();
include("conexao.php");
if ($_SESSION["tipo"] == "Professor") {
    $sql = "SELECT * FROM classes WHERE id_user = '" . $_SESSION['id'] . "'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        echo "<div class='row'>"; 
        while ($row = mysqli_fetch_assoc($result)) {
            echo "
            <div class='col-12 col-md-4 col-lg-3 pt-3'>
                <div class='card' style='width: 18rem;'>
                    <div class='card-body'>
                        <h5 class='card-title'>".$row["nome_class"]."</h5>
                        <h6 class='card-subtitle mb-2 text-muted'>Código: ".$row["id_class"]."</h6>
                        <p class='card-text'>Ano: ".$row["ano"]."</p>
                        <a href='../controllers/gerenciarTurmas.php?t=".$row['id_class']."' class='card-link'>Abrir turma</a>
                    </div>
                </div>" . $row[""] . 
            "</div>";
        }
        echo "</div>";
        mysqli_close($conn);
    } else {
        mysqli_close($conn);
        echo "<h4>Nenhuma turma cadastrada.</h4>";
    }
} else if ($_SESSION['tipo'] == "Aluno") {
    //Turmas do aluno
}
?>