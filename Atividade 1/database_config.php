<?php
//Create a new SQLite3 Database
$db = new PDO('sqlite:users.db');
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
 
//Create a new table to our database 
$query = "CREATE TABLE IF NOT EXISTS users (cpf STRING PRIMARY KEY, nome STRING, email STRING, senha STRING, ativo INT)";
$db->exec($query);
 
?>