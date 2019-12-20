<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <title>Pagina incial</title>
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
      integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
      crossorigin="anonymous"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:300,400"
      rel="stylesheet"
    />
    <link href="styles.css" rel="stylesheet" />
  </head>
  <body>
    <div class="wrapper">
    <h1>Usuários cadastrados</h1>
    <div class="card_user">
      <p><b>CPF</b></p>
      <p><b>Nome</b></p>
      <p><b>Email</b></p>
      <p></p>
      <p></p>
    </div>
      <?php require_once 'get_users.php';
     foreach ($resultado as $user) { ?>
    
    <div class="card_user">
      <p><?php echo $user->cpf?></p>
      <p><?php echo $user->nome?></p>
      <p><?php echo $user->email?></p>
      <a href="editar.php?cpf=<?php echo $user->cpf?>">Editar</a>
      <a id="deleteButton" href="delete_user.php?cpf=<?php echo $user->cpf?>">Deletar</a>
    </div>
  
  
  
  <?php 
  };
  ?>
  </div>
  </body>
</html>
