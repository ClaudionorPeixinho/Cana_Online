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


        $sql = "SELECT * FROM cad_colaborador where nome like '%$pesquisar%'";
        $query = mysqli_query($conexao, $sql);
        $registro = mysqli_num_rows($query);

        echo '<h1>';

        echo $registro . " Total de Registro(s) Encontrado(s)";

        echo '</h1>';

        echo '<table>';
        echo '<tr><th>id:</th><th>Matricula:</th><th>Nome:</th><th>Função:</th><th>Telefone:</th><th>Apelido:</th><th>Turno:</th>
<th>Editar:</th><th>Excluir:</th>';

        while ($dados = mysqli_fetch_assoc($query)) {

            $Id = $dados['id'];
            $Matricula = $dados['matricula'];
            $Nome = $dados['nome'];
            $Funcao = $dados['funcao'];
            $Telefone = $dados['telefone'];
            $Apelido = $dados['apelido'];
            $Turno = $dados['turno'];



            echo '<tr><td>' . $Id . '</td><td>' . $Matricula . '</td><td>' . $Nome . '</td><td>' . $Funcao .
                '</td><td>' . $Telefone . '</td><td>' . $Apelido . '</td><td>' . $Turno . '</td>

<td><a href="edita.php?id=' . $Id . '"><i class="fa-solid fa-pencil fa-1x"></i>
<td><a href="Analise.php?id=' . $Id . '"><i class="fa-solid fa-trash fa-1x"></i>
</a></td>';
        }
        echo '</table>';
    }

    ?>


</body>

</html>