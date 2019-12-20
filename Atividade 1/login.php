<html>
  <head>
    <meta charset="utf-8" />
    <title>Registro</title>
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
  <?php require_once 'auth_user.php'; ?>
    <form action="auth_user.php" method="POST" id="form_wrapper">
      <h1>Login</h1>

      <div class="input_container">
        <i class="fas fa-envelope"></i>
        <input
          placeholder="CPF"
          type="text"
          name="cpf"
          id="field_email"
          class="input_field"
        />
      </div>
      <div class="input_container">
        <i class="fas fa-lock"></i>
        <input
          placeholder="Senha"
          type="password"
          name="senha"
          id="field_password"
          class="input_field"
        />
      </div>
      <input
        type="submit"
        value="Login"
        name="login"
        id="input_submit"
        class="input_field"
      />
      <a href="registro.php">Criar conta de acesso ➡ </a>
    </form>
  </body>
</html>
