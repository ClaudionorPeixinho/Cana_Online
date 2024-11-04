<?php
session_start();

include_once("conexao.php");



$frota = filter_input(INPUT_POST, 'frotas', FILTER_SANITIZE_STRING);

$modelo = filter_input(INPUT_POST, 'modelo', FILTER_SANITIZE_STRING);

$operacao = filter_input(INPUT_POST, 'operacao', FILTER_SANITIZE_STRING);

$tag = filter_input(INPUT_POST, 'tag', FILTER_SANITIZE_STRING);

$categoria = filter_input(INPUT_POST, 'categoria', FILTER_SANITIZE_STRING);

//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

$result_equipamento = "INSERT INTO cad_equipamentos(frota,modelo,operacao,tag,categoria,created)
 VALUES ('$frotas','$modelo','$operacao','$tag','$categoria',NOW())";

$resultado_equipamento = mysqli_query($conn, $result_equipamento);

if (mysqli_insert_id($conn)) {
    $_SESSION['msg'] = "E";
    header("location: index.html");
} else {
    header("location: index,html");
}
