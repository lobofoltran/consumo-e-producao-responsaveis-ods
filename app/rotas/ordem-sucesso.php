<?php

$nome = $_POST['nome'];
$quantidade = $_POST['qtde'];
$pesototal = $_POST['peso'];
$dataentrega = $_POST['dataentrega'];

$sql = "INSERT INTO ordem (nome, qtde, pesototal, dataentrega) 
        VALUES (:nome, :qtde, :pesototal, :dataentrega);";

$statement = $conn->prepare($sql);
$statement->bindParam(':nome', $nome);
$statement->bindParam(':qtde', $quantidade);
$statement->bindParam(':pesototal', $pesototal);
$statement->bindParam(':dataentrega', $dataentrega);
$statement->execute();

echo $template = $twig->render('sucesso.html', []);