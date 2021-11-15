<?php

// $servername = "localhost";
// $username = "username";
// $password = "password";

try {
  $conn = new PDO("sqlite:". __DIR__ ."/database.db");
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 // echo "Conectado ao banco de dados";

  // cria uma tabela de usuarios
/*
$sql = 'CREATE TABLE "empresa" (
  "id"	INTEGER,
  "nome"	TEXT,
  "razaosocial"	TEXT,
  "cnpj"	TEXT,
  "email"	TEXT,
  "endereco"	TEXT,
  "cep"	TEXT,
  "pais"	TEXT,
  "estado"	TEXT,
  "cidade"	TEXT,
  "telefone"	TEXT,
   "senha"	TEXT,
   PRIMARY KEY("id" AUTOINCREMENT)
);';
$conn->exec($sql);
*/
} catch(PDOException $e) {  
  /**
    Caso de ERRO 
    Procure o arquivo php.ini 
    e tire o ; desta linha extension=pdo_sqlite
  */    
  echo "Falha ao conectar: " . $e->getMessage();
//   phpinfo();
}
