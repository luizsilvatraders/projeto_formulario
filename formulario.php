<?php
    $host = "localhost";
    $user = "luiz";
    $pass = "teste123";
    $db = "dados_carro";

    $conn =  new PDO("mysql:host=$host;dbname=$db", $user, $pass);


    $sql = "SELECT * FROM   itens_car ORDER BY id DESC";


    $result = $conn->query($sql);

    $lista  = $result->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
</head>

<body>

    <header>
        <h1>FORMULARIO PEÇAS DO CARRO</h1>
    </header>
    <div>

    <form action="/projeto_formulario/salvar.php">

        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required autocomplete="off">


        <label for="descricao">Descricao:</label>
        <input type="text" id="descricao" name="descricao" autocomplete="off">


        <input type="submit" value="Cadastrar Peça" />
    </form>

        <h2>LISTAGEM DE PEÇAS </h2>
        

        <h4>Lista de cadastradas no sistema</h4>

        <ol>
            <?php
            foreach ($lista as $key => $peca) {
                echo '<li value="' . $peca['id'] .  '">';
                echo $peca['peca'] . '-' . $peca['descricao'];
                echo '<a href="/projeto_formulario/editar.php?id=' . $peca['id']
                    . '&nome=' . $peca['peca']
                    . '&descricao=' . $peca['descricao'] . '">ALTERAR</a> | ';
                echo '<a href="/projeto_formulario/deletar.php?id=' . $peca['id'] . '">DELETAR</a>';
                echo '</li>';
            }
            ?>
        </ol>
    </div>
</body>

</html>