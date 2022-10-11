<?php

// var_dump($_GET);

$id = isset($_GET["id"]) ? $_GET["id"] : null;
$nome = $_GET["nome"];
$descricao = $_GET["descricao"];

$host = "localhost";
$user = "luiz";
$pass = "teste123";
$db = "dados_carro";

$conn =  new PDO("mysql:host=$host;dbname=$db", $user, $pass);

if (is_null($id)) {
    $query = $conn->prepare("INSERT INTO itens_car(peca, descricao)VALUE (:nome, :descricao)");
} else {
    $sql = "UPDATE itens_car SET peca = :nome, descricao = :descricao WHERE id = :id";

    $query = $conn->prepare($sql);

    $query->bindParam(":id", $id);
}

$query->bindParam(":nome", $nome);
$query->bindParam(":descricao", $descricao);

$query->execute();

header('location: formulario.php'); // redireciona para formulario.php
