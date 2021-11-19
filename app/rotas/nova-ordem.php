<?php

$sql = "SELECT * FROM alimento;";
$sql2 = "SELECT * FROM organizacao;";

$statement = $conn->prepare($sql);
$statement->execute();

$result = $statement->setFetchMode(PDO::FETCH_ASSOC);
$resultadoConsulta = $statement->fetchAll();

$statement = $conn->prepare($sql2);
$statement->execute();

$result = $statement->setFetchMode(PDO::FETCH_ASSOC);
$resultadoConsulta2 = $statement->fetchAll();

echo $twig->render('nova-ordem.html', [
    'nomeAlim' => $resultadoConsulta[0]['nome'],
    'nomeOng' => $resultadoConsulta[0]['nome'],
]);