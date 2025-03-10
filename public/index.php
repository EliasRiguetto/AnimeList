<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Anime List</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <header id="header">
    <nav class="container">
      <div class="logo">
        <a href="../public/index.php">
          <img src="icon/logo.svg" alt="Logo do Site">
        </a>
      </div>
    </nav>
    <?php
    require_once "../public/php/includes/warning.php";
    ?>
  </header>
  <main class="background" id="main">
    <section class="container formulario">
      <div class="flex btn-options">
        <a href="#" class="btn">Entrar</a>
        <a href="cadastrar.php" class="btn dark">Cadastrar</a>
      </div>
      <form action="php/login.php" id="login" method="post">
        <h1>Bem-Vindo!</h1>
        <div class="form-group">
          <input type="text" placeholder="Usuário" class="input" name="username">
          <img src="icon/user.svg" alt="Usuário">
        </div>
        <div class="form-group">
          <input type="password" placeholder="Senha" class="input" name="pw">
          <img src="icon/password.svg" alt="Senha">
        </div>
        <input type="submit" value="Login" class="btn">
        <a href="#">Esqueceu a Senha?</a>
      </form>
    </section>
  </main>
</body>

</html>