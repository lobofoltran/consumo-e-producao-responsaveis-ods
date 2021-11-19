<?php

$nome = $_POST['nome'];
$categoria = $_POST['categoria'];
$marca = $_POST['marca'];
$fabricacao = $_POST['fabricacao'];
$validade = $_POST['validade'];
$peso = $_POST['peso'];

$sql = "INSERT INTO alimento (nome, categoria, marca, fabricacao, validade, peso) 
        VALUES (:nome, :categoria, :marca, :fabricacao, :validade, :peso);";

$statement = $conn->prepare($sql);
$statement->bindParam(':nome', $nome);
$statement->bindParam(':categoria', $categoria);
$statement->bindParam(':marca', $marca);
$statement->bindParam(':fabricacao', $fabricacao);
$statement->bindParam(':validade', $validade);
$statement->bindParam(':peso', $peso);
$statement->execute();

echo $template = $twig->render('sucesso.html', []);