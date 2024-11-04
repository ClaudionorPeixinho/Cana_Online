<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PESQUISAR</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <style>
        * {
            margin: 0;
        }

        .pesquisar {

            width: 100%;
            height: 85 px;
            background-color: green;

        }

        p {
            font-size: 25px;
            line-height: 80px;
            margin-left: 25%;
            color: white;
        }


        hr {
            border: 3px solid;

        }

        input {


            padding: 15px;
            font-size: 22px;

        }

        .Entrar {

            border-radius: 10px;
            background-color: yellow;
            cursor: pointer;
            border: none;
        }

        .Entrar:hover {
            border: 2px solid;
            border-color: whitesmoke;
        }

        h1 {
            margin-left: 25%;
            margin-top: 5%;

        }

        table {
            margin-left: 15%;
            margin-top: 2%;
            width: 1100px;
            font-size: 19px;
            text-align: justify;
        }

        tr:nth-child(even) {
            background-color: #dee2e6;
        }

        tr:hover {
            background-color: lemonchiffon;
        }

        th {
            background-color: greenyellow;
        }
    </style>


</head>

<body>

    <div class="pesquisar">
        <form action="" method="POST">
            <p> Pesquisar: <input type="text" name="pesquisar" size="40">
                <input class="Entrar" type="submit" value="Entrar">
            </p>
        </form>

    </div>
    <hr>
    <a href="index.html">Tela Cadastro</a>
    <br>
    <a href="Consultar_Equipamentos.php"> Pesquisar Equipamentos</a>

    <?php
    $conexao = mysqli_connect('localhost', 'root', '', 'canaonline');
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $pesquisar = $_POST['pesquisar'];


        $sql = "SELECT * FROM pontodigital where nome like '%$pesquisar%'";
        $query = mysqli_query($conexao, $sql);
        $registro = mysqli_num_rows($query);

        echo '<h1>';

        echo $registro . " Total de Registro(s) Encontrado(s)";

        echo '</h1>';

        echo '<table>';
        echo '<tr><th>id:</th><th>Data Lançamento:</th><th>Inicio Jornada:</th><th>Fim Jornada:</th>
        <th>Colaborador:</th><th>Matricula:</th><th>Função:</th><th>Frota:</th>
         <th>KM inicial:</th><th>Km Final:</th><th>Fazenda Lote:</th><th>Turno:</th>
        <th>Lider:</th><th>Informações:</th><th>Editar:</th><th>Excluir:</th>';

        while ($dados = mysqli_fetch_assoc($query)) {

            $Id = $dados['id'];
            $Data_lancamento = $dados['data_lancamento'];
            $inicio_Jornada = $dados['hi_jornada'];
            $Fim_Jornada= $dados['hf_jornada'];
            $Colaborador = $dados['colaborador'];
            $Matricula = $dados['matricula'];
            $Funcao = $dados['funcao'];
            $Frota = $dados['frota'];
            $Km_inicial = $dados['kmi'];
            $Km_final = $dados['kmf'];            
            $Fazenda_Lote = $dados['fazenda_lote'];
            $Turno = $dados['turno'];            
            $Lider = $dados['lider'];
            $Informacao = $dados['informacao'];        



            echo '<tr><td>' . $Id . '</td><td>' . $Data_lancamento . '</td><td>' . $Inicio_Jornada . '</td><td>' . $Fim_jornada .
                '</td><td>' . $Colaborador . '</td><td>' . $Matricula . '</td><td>'. $Funcao . '</td><td>'. $Frota 
                . '</td><td>' . $Km_inicial . '</td><td>'. $Km_final . '</td><td>'                  
                    . $Fazenda_Lote . '</td><td>'. $Turno . '</td><td>'. $Lider . '</td><td>' . $Informacao . '</td>

<td><a href="edita.php?id=' . $Id . '"><i class="fa-solid fa-pencil fa-1x"></i>
<td><a href="Analise.php?id=' . $Id . '"><i class="fa-solid fa-trash fa-1x"></i>
</a></td>';
        }
        echo '</table>';
    }

    ?>


</body>

</html>