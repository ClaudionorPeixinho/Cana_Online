<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PESQUISAR</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

<style>
*{margin: 0;
}

.pesquisar{

width: 100%;
height: 80 px;
background-color: green;

}

p{
    font-size: 25px;
    line-height: 80px;
    margin-left: 25%;
    color: white;
}


hr{
    border: 3px solid;

}

input{

    padding: 8px;
    font-size: 18px;

}

.Entrar{

    border-radius: 10px;
    background-color: yellow;
    cursor: pointer;
    border: none;
}

.Entrar:hover{
    border:  2px solid;
    border-color: whitesmoke;
}

h1{
  margin-left: 25%;
  margin-top: 5%;
    
}

table{
margin-left: 18%;
margin-top: 2%;
width: 1000px;
font-size: 19px;
text-align: justify;
}

tr:nth-child(even){background-color: #dee2e6;}
tr:hover{background-color: lemonchiffon;}

th{background-color: greenyellow;}


</style>


</head>
<body>

  <div class="pesquisar">
    <form action="" method="POST">
   
    <p> Pesquisar: <input type="text" name= "pesquisar" size="40">
    <input class="Entrar" type="submit"  value="Entrar">
      </p>
     
</form>
</div>
<hr>
<a href="index.html">Tela Cadastro</a>
<br>
<a href="Consultar_Colaborador.php">Pesquisar Colaboradores</a>


<?php
$conexao = mysqli_connect('localhost','root','','canaonline');
if($_SERVER['REQUEST_METHOD']==='POST'){
$pesquisar = $_POST['pesquisar'];


$sql = "SELECT * FROM cad_equipamentos where frota like '%$pesquisar%'";
$query = mysqli_query($conexao,$sql);
$registro = mysqli_num_rows($query);

echo'<h1>';

    echo $registro." Registro(s) Encontrado(s)";

echo '</h1>';

echo '<table>';
echo '<tr><th>id:</th><th>Frotas:</th><th>Modelo:</th><th>Tipo_operação:</th><th>Tag:</th><th>Categoria:</th>
<th>Editar:</th><th>Excluir:</th>';

while($dados = mysqli_fetch_assoc($query)){

$id = $dados['id'];
$Frota = $dados['frota'];
$Modelo = $dados['modelo'];
$Operacao = $dados['operacao'];
$Tag = $dados['tag'];
$Categoria = $dados['categoria'];


echo '<tr><td>'.$id.'</td><td>'.$Frota.'</td><td>'.$Modelo.'</td><td>'.$Operacao.
'</td><td>'.$Tag.'</td><td>'.$Categoria.'</td>

<td><a href="edita2.php?id='.$id.'"><i class="fa-solid fa-pencil fa-1x"></i>
<td><a href="Analise2.php?id='.$id.'"><i class="fa-solid fa-trash fa-1x"></i>
</a></td>';

}
echo '</table>';

}

?>
    
</body>
</html>