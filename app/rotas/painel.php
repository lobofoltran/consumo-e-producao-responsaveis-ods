<?php 

$cnpj = $_POST['cnpj'];
$senha = hash('sha256', $_POST['password']);

$sql = "SELECT * FROM empresa WHERE cnpj = '$cnpj' and senha = '$senha';";

$statement = $conn->prepare($sql);
$statement->execute();

$result = $statement->setFetchMode(PDO::FETCH_ASSOC);

$resultadoConsulta = $statement->fetchAll();

if (count($resultadoConsulta) == 1) {
    $template = $twig->render('painel.html', [
        'razaosocial' => $resultadoConsulta[0]['razaosocial']
    ]);
} else {
    $template = $twig->render('login.html', [
        'ehErro'  => true
    ]);
}

echo $template;