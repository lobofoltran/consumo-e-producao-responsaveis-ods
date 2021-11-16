<?php 

// buscar no banco se um usuario existe e se a senha está correta
$cnpj = $_POST['cnpj'];
$senha = hash('sha256', $_POST['password']);

$sql = "SELECT * FROM empresa WHERE cnpj = '$cnpj' and senha = '$senha';";
// preparar o comando SQL para rodar no banco
$statement = $conn->prepare($sql); // cria um statament
$statement->execute(); // statament roda o comando preparando no banco

$result = $statement->setFetchMode(PDO::FETCH_ASSOC);

$resultadoConsulta = $statement->fetchAll();

/*
echo '<pre>';
var_dump($resultadoConsulta);
echo 'Tamanho Array: ' . count($resultadoConsulta);
echo '</pre>';
*/

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