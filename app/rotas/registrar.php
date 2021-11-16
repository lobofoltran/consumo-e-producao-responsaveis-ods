<?php

/*
echo '<pre>';
var_dump($_POST);
echo '</pre>';
*/

$nome = $_POST['name'];
$razaosocial = $_POST['razaosocial'];
$cnpj = $_POST['cnpj'];
$email = $_POST['email'];
$endereco = $_POST['endereco'];
$cep = $_POST['cep'];
$pais = $_POST['pais'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
$telefone = $_POST['telefone'];
$senha = hash('sha256', $_POST['password']);

$sql = "INSERT INTO empresa (nome, razaosocial, cnpj, email, endereco, cep, pais, estado, cidade, telefone, senha) 
        VALUES (:nome, :razaosocial, :cnpj, :email, :endereco, :cep, :pais, :estado, :cidade, :telefone, :senha);";

$statement = $conn->prepare($sql);
$statement->bindParam(':nome', $nome);
$statement->bindParam(':razaosocial', $razaosocial);
$statement->bindParam(':cnpj', $cnpj);
$statement->bindParam(':email', $email);
$statement->bindParam(':endereco', $endereco);
$statement->bindParam(':cep', $cep);
$statement->bindParam(':pais', $pais);
$statement->bindParam(':estado', $estado);
$statement->bindParam(':cidade', $cidade);
$statement->bindParam(':telefone', $telefone);
$statement->bindParam(':senha', $senha);
$statement->execute();

echo $template = $twig->render('painel.html', []);