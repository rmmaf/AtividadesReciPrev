<html>
  <head>
    <meta charset="utf-8" />
    <title>Editar usuario</title>
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
    <?php require_once 'edit_user.php'; ?>
    <form action="edit_user.php" method="POST" id="form_wrapper">
      <h1>Editar usuário</h1>

      <div class="input_container">
        <input
        readonly
          placeholder="CPF"
          type="text"
          name="cpf"
          value="<?php echo $resultado->cpf ?>"
          class="input_field"
        />
      </div>
      <div class="input_container">
          <input
            placeholder="Nome"
            type="text"
            name="nome"
            value="<?php echo $resultado->nome ?>"
            class="input_field"
          />
        </div>
      <div class="input_container">
          <input
            placeholder="Email"
            type="email"
            name="email"
            value="<?php echo $resultado->email ?>"
            class="input_field"
          />
        </div>
      <div class="input_container">
        <input
          placeholder="Senha"
          type="password"
          name="senha"
          class="input_field"
        />
      </div>
      <input
        type="submit"
        value="Atualizar"
        name="atualizar"
        id="input_submit"
        class="input_field"
      />
    </form>
  </body>
</html>
