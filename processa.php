<?php
session_start();

include_once("conexao.php");

$data_lancamento = filter_input(INPUT_POST, 'data_lancamento', FILTER_SANITIZE_STRING);

$hora_saida = filter_input(INPUT_POST, 'hora_saida', FILTER_SANITIZE_STRING);

$liberacao = filter_input(INPUT_POST, 'liberacao', FILTER_SANITIZE_STRING);

$fazenda = filter_input(INPUT_POST, 'fazenda', FILTER_SANITIZE_STRING);

$operacao = filter_input(INPUT_POST, 'operacao', FILTER_SANITIZE_STRING);

$lider = filter_input(INPUT_POST, 'lider', FILTER_SANITIZE_STRING);

$turno = filter_input(INPUT_POST,'turno', FILTER_SANITIZE_STRING);

$frota = filter_input(INPUT_POST, 'frota', FILTER_SANITIZE_STRING);

$motorista = filter_input(INPUT_POST, 'motorista', FILTER_SANITIZE_STRING);

$colhedora = filter_input(INPUT_POST, 'colhedora', FILTER_SANITIZE_STRING);

$operador1 = filter_input(INPUT_POST, 'operador1', FILTER_SANITIZE_STRING);

$transbordo = filter_input(INPUT_POST, 'transbordo', FILTER_SANITIZE_STRING);

$operador2 = filter_input(INPUT_POST, 'operador2', FILTER_SANITIZE_STRING);

$informacao = filter_input(INPUT_POST, 'informacao', FILTER_SANITIZE_STRING);


//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

$result_apontamento = "INSERT INTO apontamentos(data_lancamento,hora_saida,liberacao,fazenda,operacao,lider,turno,frota,motorista,colhedora,operador1,transbordo,operador2,informacao,created)
 VALUES ('$data_lancamento','$hora_saida','$liberacao','$fazenda','$operacao','$lider','$turno','$frota','$motorista','$colhedora','$operador1','$transbordo','$operador2','$informacao', NOW())";

$resultado_apontamento = mysqli_query($conn, $result_apontamento);

if (mysqli_insert_id($conn)) {
    $_SESSION['msg'] = "A";
    header("location: index.html");
} else {
    header("location: index.html");
}
