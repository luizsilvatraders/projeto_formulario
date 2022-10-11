<?php

    $host = "localhost";
    $user = "luiz";
    $pass = "teste123";
    $db = "dados_carro";

    $conn =  new PDO("mysql:host=$host;dbname=$db", $user, $pass);


    $sql = "SELECT * FROM   itens_car";


    $result = $conn->query($sql);

    $lista  = $result->fetchAll();

    var_dump($lista);
