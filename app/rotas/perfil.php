<?php 

// buscar no banco se um usuario existe e se a senha está correta
$cpnj = $_POST['cpnj'];
$senha = hash('sha256', $_POST['password']);

$sql = "SELECT * FROM usuarios WHERE cpnj = '$cpnj' and senha = '$senha';";
// preparar o comando SQL para rodar no banco
$statement = $conn->prepare($sql); // cria um statament
$statement->execute(); // statament roda o comando preparando no banco

$result = $statement->setFetchMode(PDO::FETCH_ASSOC);

$resultadoConsulta = $statement->fetchAll();

// echo '<pre>';
// var_dump($resultadoConsulta);
// echo 'Tamanho Array: ' . count($resultadoConsulta);
// echo '</pre>';

if (count($resultadoConsulta) == 1) {
    $template = $twig->render('perfil.html', [
        'empresa' => $resultadoConsulta[0]['nome']
    ]);
} else {
    $template = $twig->render('login.html', [
        'empresa' => $_POST['cpnj'],
        'ehErro'  => true
    ]);
}

echo $template;