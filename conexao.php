
<?php

$servidor = "localhost";
$usuario= "root";
$senha = "";
$dbname = "canaonline";

// criar a conexão

$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
if ($mysqli->connect_errno) {
    echo "falha ao conectar: (" . $mysqli->connect_errno. ")" . $mysqli->connect_errno;

}

