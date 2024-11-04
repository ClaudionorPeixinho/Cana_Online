<?php
$conexao = new mysqli('localhost','root','','canaonline');

$id = $_GET['id'];

$sql = "SELECT *FROM cad_equipamentos where id=$id";


$resultado = $conexao->query($sql);
$dados = $resultado->fetch_assoc();

echo"<script>

var confirmar = confirm('Tem certeza que deseja apagar dados Equipamento:  ".$dados['frota']." - ".$dados['modelo']."?');

if(confirmar){
window.location.href='Excluir2.php?id=".$id."';
}
else{
window.location.href='Consulta_Equipamentos.php';
}

</script>;";



?>
