<?php
if($_SERVER['REQUEST_METHOD']==='POST'){
$conexao = new mysqli('localhost','root','','canaonline');

$id = $_POST['id'];
$matricula = $_POST['matricula'];
$nome = $_POST['nome'];
$funcao = $_POST['funcao'];
$telefone = $_POST['telefone'];
$apelido = $_POST['apelido'];
$turno = $_POST['turno'];

$sql = "UPDATE cad_colaborador SET matricula = '$matricula',
nome = '$nome',
funcao = '$funcao',
telefone = '$telefone',
apelido = '$apelido',
turno = '$turno' where id=$id";

$resultado = $conexao ->query($sql);

if($resultado){
  echo "<hr>";
  echo"<h2> Dados Atualizados com Sucesso!!!</h2>";  
}
}
?>

<a href="Consultar_Colaborador.php">Voltar Pesquisar</a>
