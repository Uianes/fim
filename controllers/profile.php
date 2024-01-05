<?php
session_start();

echo ("<div class='container-fluid p-5'>");
echo ("<img src=" . $_SESSION['avatar'] . " class='img-thumbnail rounded-circle' alt='Avatar do usuário' width='100vw'>");
echo "<h1>Saudações! @" . $_SESSION['nick'] . "</h1>";
echo "<h2 class='pt-5'>Minhas turmas</h2>";


?>