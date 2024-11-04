<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar dados Frotas</title>


<style>

table{
font-size: 20px;
margin-left: 25%;
}
input{
padding: 8px;
font-size: 20px;

}
.botao{
border: none;
background-color: aquamarine;
}

.botao:hover{
 border: 2px solid;
 color: green;
 cursor: pointer;
}


</style>

</head>
<body>
   <h2>Editar e Salvar Dados:</h2>
   <hr>
   
   <?php
$conexao = new mysqli('localhost','root','','canaonline');

$id = $_GET['id'];
$sql =  "SELECT * FROM cad_equipamentos where id=$id";
$result = $conexao->query($sql);
$dados = $result->fetch_assoc();
?>

<table>
<form action="atualiza2.php" method="POST">
<tr><td>id:</td><td><input type= "text" name="id" 
value="<?php echo $dados['id'];?>" 
size= "40" readonly></td></tr>

<tr><td>Frota:</td><td><input type= "text" name="frota" 
value="<?php echo $dados['frota'];?>" 
size= "40"></td></tr>

<tr><td>Modelo:</td><td><input type= "text" name="modelo" 
value="<?php echo $dados['modelo'];?>" 
size= "40"></td></tr>

<tr><td>Tipo_Operacao:</td><td><input type= "text" name="operacao" 
value="<?php echo $dados['operacao'];?>" 
size= "40"></td></tr>

<tr><td>Tag:</td><td><input type= "text" name="tag" 
value="<?php echo $dados['tag'];?>" 
size= "40"></td></tr>

<tr><td>Categoria:</td><td><input type= "text" name="categoria" 
value="<?php echo $dados['categoria'];?>">

<input type="submit" class= "botao" value="Salvar"></td>

</tr>
</form>
</table>
<hr>
<a href="Consultar_Equipamentos.php">VOLTAR</a>
</body>
</html>