<?php
session_start();
if (session_destroy()) {
    header("Location: ../index.php");
} else {
    echo "Erro ao efetuar Loggout!";
}
?>