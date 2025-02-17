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
        <a href="../public/cadastrar.php">
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
        <a href="index.php" class="btn dark">Entrar</a>
        <a href="#" class="btn">Cadastrar</a>
      </div>
      <form action="../public/php/add_user.php" id="cadastrar" method="POST">
        <div class="form-group">
          <input type="text" placeholder="Usuário" class="input" name="username" required>
          <img src="icon/user.svg" alt="Usuário">
        </div>
        <div class="form-group">
          <label for="">Sexo</label>
          <div class="radio">
            <input type="radio" name="sexo" value="M" checked>
            <label for="masc">Masculino</label>
            <input type="radio" name="sexo" value="F">
            <label for="fem">Feminino</label>
          </div>
        </div>
        <div class="form-group">
          <input type="password" placeholder="Senha" class="input" name="pw1" id="pw1" required>
          <img src="icon/password.svg" alt="Senha">
        </div>
        <div class="form-group">
          <input type="password" placeholder="Confirmar Senha" class="input" name="pw2" id="pw2" required>
          <img src="icon/password.svg" alt="Senha">
        </div>
        <input type="submit" value="Cadastrar" class="btn">
      </form>
    </section>
  </main>
  <script src="../public/js/check_password.js"></script>
</body>

</html>