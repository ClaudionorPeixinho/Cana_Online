<?php

session_start();

?>

<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      />
       <!-- Adicionando Bootstrap Icons -->
      <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css"
      rel="stylesheet"
     
      />

 </head>
 <body>

 <img src="./imagem.webp">

    <h1>Cana Online</h1>
      
    <?php

    if(isset($_SESSION['msg'])){
     echo $_SESSION['msg'];
     unset($_SESSION['msg']);
    }

    ?>

<style>
img {
width: 100%;
height: 100PX;

}
</style>

  </head>
    
 
    <form method="POST" action="processa.php">
        
     <label>Data: </label>
     <input type="text" name="data_lancamento" placeholder="Informe a data Lançamento"><br><br>

     <label>hora de Saída: </label>
     <input type="text" name="hora_saida" placeholder="Informe a hora de Saída"><br><br>

     <label>Liberação (O.S): </label>
     <input type="text" name="liberacao" placeholder="Digite a Liberação (O.S)"><br><br>

     <label>Fazenda / Lote: </label>
     <input type="text" name="fazenda" placeholder="informe Fazenda e Lote"><br><br>

     <label>Tipo de Operação: </label>
     <input type="text" name="operacao" placeholder="Informe a Operação (Plantio,Colheita...)"><br><br>

     <label>Lider Frente: </label>
     <input type="text" name="lider" placeholder="Informe o Lider da Frente Trabalho"><br><br>

     <label>Caminhão: </label>
     <input type="text" name="frota" placeholder="Digite nº Frota Caminhão"><br><br>

     <label>Nome Motorista: </label>
     <input type="text" name="motorista" placeholder="Informe o nome do Motorista"><br><br>

     <label>Nº Colhedora: </label>
     <input type="text" name="colhedora" placeholder="Digite nº frota Colhedora"><br><br>

     <label>Nome Operador Colhedora: </label>
     <input type="text" name="operador1" placeholder="Nome Operador Colhedora"><br><br>

     <label>Nº Transbordo: </label>
     <input type="text" name="transbordo" placeholder="Digite Nº Transbordo"><br><br>

     <label>Nome Operador Transbordo: </label>
     <input type="text" name="operador2" placeholder="Informe o nome Operador Transbordo"><br><br>

     <label>Informações ADicionais: </label>
     <input type="text" name="informacao" placeholder="Informações Adicionais ou Ocorrências"><br><br>

     <input type="submit" value="Enviar Dados">
     

    </form>



</body>
</html>