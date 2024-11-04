<?php
if($_SERVER['REQUEST_METHOD']==='POST'){
$conexao = new mysqli('localhost','root','','canaonline');

// trocar os dados
$id = $_POST['id'];
$frota = $_POST['frota'];
$modelo = $_POST['modelo'];
$operacao = $_POST['operacao'];
$tag = $_POST['tag'];
$categoria = $_POST['categoria'];


$sql = "UPDATE cad_equipamentos SET frota = '$frota',
modelo = '$modelo',
operacao = '$operacao',
tag = '$tag',
categoria = '$categoria' where id=$id";

$resultado = $conexao ->query($sql);

if($resultado){
  echo "<hr>";
  echo"<h2> Dados de Equipamentos Atualizados com Sucesso!!!</h2>";  
}
}
?>

<a href="Consultar_Equipamentos.php">Voltar Pesquisar</a>
