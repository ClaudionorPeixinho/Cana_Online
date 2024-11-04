<?php
$conexao = new mysqli('localhost','root','','canaonline');

$id = $_GET['id'];

$sql = "SELECT *FROM colaboradores where id=$id";


$resultado = $conexao->query($sql);
$dados = $resultado->fetch_assoc();

echo"<script>

var confirmar = confirm('Tem certeza que deseja apagar o Registro :  ".$dados['matricula']." - ".$dados['nome']."?');

if(confirmar){
window.location.href='Excluir.php?id=".$id."';
}
else{
window.location.href='Consultar_Colaborador.php';
}

</script>;";


?>
