<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Exclusão</title>
</head>
<body>

   <?php
   $conexao = new mysqli('localhost','root','','canaonline');

   $id = $_GET['id'];
   
   $sql = "DELETE FROM cad_colaborador where id=$id";
   
   $retorno = $conexao->query($sql);

   if($retorno){
     echo '<h2> O Registro foi excluido com Sucesso!! </h2>';

   }
 
   ?>
   <hr>
   <a href="Consultar_Colaborador.php">Tela Pesquisa</a>

    
</body>
</html>
