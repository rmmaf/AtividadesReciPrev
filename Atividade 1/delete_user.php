<?php
		//include our connection
        include_once 'database_config.php';
        
        $cpf   = $_GET["cpf"];
 
        try{
		$sql = "update users set ativo = 0 where cpf = :cpf";
        $query = $db->prepare($sql);
        $param = array(':cpf' => $cpf);
        $query->execute($param);
 
		header('location: main.php');
 
    
} catch (\PDOException $e) {
    echo "Falha ao solicitar: " . $e->getMessage();
  }
  
?>