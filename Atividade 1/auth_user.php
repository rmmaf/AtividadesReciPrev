<?php
	if(isset($_POST['login'])){
		//include our connection
        include_once 'database_config.php';
        
        $cpf   = $_POST["cpf"];
        $encryptedPass = md5($_POST['senha']);
 
        $sql = "select cpf, senha from users where cpf = :cpf";

    try{
        $query = $db->prepare($sql);
        $query->bindParam(':cpf', $cpf);
        $query->execute();
        $resultado = $query->fetchAll();
        if(count($resultado) > 0){
            
            if($encryptedPass == $resultado[0]->senha){
                header('location: main.php');
            }else{
                header('location: login.php');
                echo "<script type='javascript'>alert('Usuário ou senha inválidos!');";
                echo "javascript:window.location='index.php';</script>";

            }
        }else{

            header('location: login.php');
            echo "<script type='javascript'>alert('Usuário ou senha inválidos!');";
            echo "javascript:window.location='index.php';</script>";
        }

    } catch (\PDOException $e) {
        echo "Falha ao solicitar: " . $e->getMessage();
      }

	}
?>