<?php

$sql = "SELECT * FROM ordem;";
$sql2 = "SELECT count(id_ordem) as 'totalordens' FROM ordem;";

$statement = $conn->prepare($sql);
$statement->execute();

$result = $statement->setFetchMode(PDO::FETCH_ASSOC);
$resultadoConsulta = $statement->fetchAll();

$statement = $conn->prepare($sql2);
$statement->execute();

$result = $statement->setFetchMode(PDO::FETCH_ASSOC);
$resultadoConsulta2 = $statement->fetchAll();

echo $twig->render('ordens.html', [
    'ordens' => $resultadoConsulta2[0]['totalordens'],
    'id' => $resultadoConsulta[0]['id_ordem'],
    'nome' => $resultadoConsulta[0]['nome'],
    'qtde' => $resultadoConsulta[0]['qtde'],
    'pesototal' => $resultadoConsulta[0]['pesototal'],
    'dataentrega' => $resultadoConsulta[0]['dataentrega']
]);

/*
for ($i = 0; $i < 33; $i++) {
    echo $twig->render([
    'id'[$i] => $resultadoConsulta[$i]['id_ordem'],
    'nome'[$i] => $resultadoConsulta[$i]['nome'],
    'qtde'[$i] => $resultadoConsulta[$i]['qtde'],
    'pesototal'[$i] => $resultadoConsulta[$i]['pesototal'],
    'dataentrega'[$i] => $resultadoConsulta[$i]['dataentrega']
]);
}
*/