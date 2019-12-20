<?php
include_once 'database_config.php';
$sql = "SELECT cpf,nome,email FROM users where ativo = 1";
try{
    $query = $db->prepare($sql);
    $query->execute(); 
    $resultado = $query->fetchAll();
} catch (\PDOException $e) {
    echo "Falha ao solicitar: " . $e->getMessage();
  }


?>