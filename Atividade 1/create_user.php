<?php
	if(isset($_POST['registrar'])){
		//include our connection
        include_once 'database_config.php';
        
        $cpf   = $_POST["cpf"];
        $nome   = $_POST["nome"];
		$email  = $_POST["email"];
        $encryptedPass = md5($_POST['senha']);
 
		$sql = "INSERT INTO users (cpf, nome, email, senha, ativo) VALUES (:cpf, :nome, :email, :senha, 1)";

try {
  $query = $db->prepare($sql);
  $param = array(':cpf' => $cpf, ':nome' => $nome, ':email' => $email, ':senha' => $encryptedPass);
  $query->execute($param);
		
		  } catch (\PDOException $e) {
			echo "Erro ao inserir registro: " . $e->getMessage();
		  }
 
		header('location: login.php');
 
	}
?>