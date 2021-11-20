<?php

$sql = "SELECT * FROM alimento;";
$sql2 = "SELECT count(id_alimento) as 'totalalimentos' FROM alimento;";

$statement = $conn->prepare($sql);
$statement->execute();

$result = $statement->setFetchMode(PDO::FETCH_ASSOC);
$resultadoConsulta = $statement->fetchAll();

$statement = $conn->prepare($sql2);
$statement->execute();

$result = $statement->setFetchMode(PDO::FETCH_ASSOC);
$resultadoConsulta2 = $statement->fetchAll();

echo $twig->render('alimentos.html', [
    'countalimentos' => $resultadoConsulta2[0]['totalalimentos'],
    'alimentos' => $resultadoConsulta
]);
