<?php
 include_once 'database_config.php';
if(isset($_GET["cpf"])){
	$cpf_url = $_GET["cpf"];
	$sql = "SELECT cpf,nome,email FROM users where cpf = $cpf_url";
	try{
		$query = $db->prepare($sql);
		$query->execute(); 
		$resultado = $query->fetch();
	} catch (\PDOException $e) {
		echo "Falha ao solicitar: " . $e->getMessage();
	  }
}

	if(isset($_POST['atualizar'])){
	
		//include our connection
        $cpf   = $_POST['cpf'];
        $nome   = $_POST["nome"];
		$email  = $_POST["email"];
        $encryptedPass = md5($_POST['senha']);
 
		//insert query
		$sql = "update users set cpf = :cpf, nome = :nome, email = :email, senha = :senha where cpf = $cpf";
		try{
	$query = $db->prepare($sql);
	$param = array(':cpf' => $cpf, ':nome' => $nome, ':email' => $email, ':senha' => $encryptedPass);
	$query->execute($param);
	header('location: main.php');
} catch (\PDOException $e) {
    echo "Falha ao solicitar: " . $e->getMessage();
  }
 
		
 
	}
?>