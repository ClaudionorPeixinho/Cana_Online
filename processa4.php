<?php
session_start();

include_once ("conexao.php");

$data_lancamento = filter_input(INPUT_POST, 'data_lancamento', FILTER_SANITIZE_STRING);

$hi_jornada = filter_input(INPUT_POST, 'hi_jornada', FILTER_SANITIZE_STRING);

$hf_jornada = filter_input(INPUT_POST, 'hf_jornada', FILTER_SANITIZE_STRING);

$colaborador = filter_input(INPUT_POST, 'colaborador', FILTER_SANITIZE_STRING);

$matricula = filter_input(INPUT_POST, 'matricula', FILTER_SANITIZE_STRING);

$funcao = filter_input(INPUT_POST, 'funcao', FILTER_SANITIZE_STRING);

$frota = filter_input(INPUT_POST, 'frota', FILTER_SANITIZE_STRING);

$kmi = filter_input(INPUT_POST, 'kmi', FILTER_SANITIZE_STRING);

$kmf = filter_input(INPUT_POST, 'kmf', FILTER_SANITIZE_STRING);

$fazenda_lote = filter_input(INPUT_POST, 'fazenda_lote', FILTER_SANITIZE_STRING);

$turno = filter_input(INPUT_POST, 'turno', FILTER_SANITIZE_STRING);

$lider = filter_input(INPUT_POST, 'lider', FILTER_SANITIZE_STRING);

$informacao = filter_input(INPUT_POST, 'informacao', FILTER_SANITIZE_STRING);






//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

$result_pontodigital = "INSERT INTO pontodigital(data_lancamento,hi_jornada,hf_jornada, colaborador, matricula,
funcao,frota,kmi,kmf,fazenda_lote,turno,lider,informacao,created)

 VALUES ('$data_lancamento','$hi_jornada','$hf_jornada','$colaborador','$matricula','$funcao','$frota','$kmi','$kmf','$fazenda_lote','$turno','$lider','$informacao', NOW())";

$resultado_ponto = mysqli_query($conn, $result_pontodigital);

if (mysqli_insert_id($conn)) {
    $_SESSION['msg'] = "A";
    header("location: index.html");

} else {
    header("location: index.html");

}
