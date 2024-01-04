<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "progluh";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Falha na conexão com o Banco de Dados: <br> Erro:  " . mysqli_connect_error());
}

?>