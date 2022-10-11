<?php

    $id = $_GET["id"];

    $host = "localhost";
    $user = "luiz";
    $pass = "teste123";
    $db = "dados_carro";

    $conn =  new PDO("mysql:host=$host;dbname=$db", $user, $pass);

    $sql = "DELETE FROM itens_car WHERE id = :id";

    $query = $conn->prepare($sql);

    $query->bindParam(":id", $id);

    $query->execute();

    header('location: formulario.php'); // redireciona para formulario.php
