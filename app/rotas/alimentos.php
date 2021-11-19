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
    'alimentos' => $resultadoConsulta2[0]['totalalimentos'],
    'id' => $resultadoConsulta[0]['id_alimento'],
    'nome' => $resultadoConsulta[0]['nome'],
    'categoria' => $resultadoConsulta[0]['categoria'],
    'marca' => $resultadoConsulta[0]['marca'],
    'fabricacao' => $resultadoConsulta[0]['fabricacao'],
    'validade' => $resultadoConsulta[0]['validade'],
    'peso' => $resultadoConsulta[0]['peso']
]);
