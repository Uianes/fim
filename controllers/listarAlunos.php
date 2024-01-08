<?php
session_start();
include("conexao.php");
$sql = "SELECT `users`.`id_user` as 'ID',`users`.`nick_user` as 'Nick', `users`.`email_user` as 'E-mail'
FROM `student_class`
INNER JOIN `users`
ON `student_class`.`id_user` = `users`.`id_user`
WHERE `id_class` = '".$_SESSION['turma']."';";
if (mysqli_query($conn, $sql)) {
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        echo "
        <table class='table'>
            <thead>
            <tr>
                <th scope='col'>ID</th>
                <th scope='col'>Nick</th>
                <th scope='col'>E-mail</th
            </tr>
        </thead>
        <tbody>
            <tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "
            <th scope='row'>" . $row["ID"] . "</th>
            <td>" . $row["Nick"] . "</td>
            <td>" . $row["E-mail"] . "</td>
          </tr>
          <tr>";
        }
    } else {
        echo "Nenhum aluno matriculado.";
    }
} else {
    echo "Erro ao inserir os dados na plataforma: " . $sql . "<br> Erro: " . mysqli_error($conn);
    mysqli_close($conn);
}
?>