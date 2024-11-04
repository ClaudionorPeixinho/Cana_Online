<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar dados</title>


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
$sql =  "SELECT * FROM cad_colaborador where id=$id";
$result = $conexao->query($sql);
$dados = $result->fetch_assoc();
?>

<table>
<form action="atualiza.php" method="POST">
<tr><td>id:</td><td><input type= "text" name="id" 
value="<?php echo $dados['id'];?>" 
size= "40" readonly></td></tr>

<tr><td>Matricula:</td><td><input type= "text" name="matricula" 
value="<?php echo $dados['matricula'];?>" 
size= "40"></td></tr>

<tr><td>Nome:</td><td><input type= "text" name="nome" 
value="<?php echo $dados['nome'];?>" 
size= "40"></td></tr>

<tr><td>Função:</td><td><input type= "text" name="funcao" 
value="<?php echo $dados['funcao'];?>" 
size= "40"></td></tr>

<tr><td>Telefone:</td><td><input type= "text" name="telefone" 
value="<?php echo $dados['telefone'];?>" 
size= "40"></td></tr>

<tr><td>Apelido:</td><td><input type= "text" name="apelido" 
value="<?php echo $dados['apelido'];?>" 
size= "40"></td></tr>

<tr><td>Turno:</td><td><input type= "text" name="turno" 
value="<?php echo $dados['turno'];?>">

<input type="submit" class= "botao" value="Salvar"></td>
</tr>

</form>
</table>
<hr>
<a href="Consultar_Colaborador.php">VOLTAR</a>
</body>
</html>