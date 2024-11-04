<?php
session_start();

include_once("conexao.php");

$matricula = filter_input(INPUT_POST, 'matricula', FILTER_SANITIZE_STRING);

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);

$funcao = filter_input(INPUT_POST, 'funcao', FILTER_SANITIZE_STRING);

$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);

$apelido = filter_input(INPUT_POST, 'apelido', FILTER_SANITIZE_STRING);

$turno = filter_input(INPUT_POST, 'turno', FILTER_SANITIZE_STRING);


//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

$result_colaborador = "INSERT INTO cad_colaborador(matricula,nome,funcao,telefone,apelido,turno,created)
 VALUES ('$matricula','$nome','$funcao','$telefone','$apelido','$turno',NOW())";

$resultado_colaborador = mysqli_query($conn, $result_colaborador);

if (mysqli_insert_id($conn)) {
    $_SESSION['msg'] = "C";
    header("location: index.html");
} else {
    header("location: index.html");
}
