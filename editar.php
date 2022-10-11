<?php

$id = $_GET['id'];
$nome = $_GET['nome'];
$descricao = $_GET['descricao'];

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
        <h1>EDITAR FORMULARIO PEÇAS DO CARRO</h1>
    </header>

    <form action="/projeto_formulario/salvar.php">
        <input type="hidden" name="id" value="<?php echo $id ?>">


        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="<?php echo $nome ?>" required autocomplete="off">


        <label for="descricao">Descricao:</label>
        <input type="text" id="descricao" name="descricao" value="<?php echo $descricao ?>" autocomplete="off">


        <input type="submit" value="Cadastrar Peça" />
    </form>
</body>
</html>
