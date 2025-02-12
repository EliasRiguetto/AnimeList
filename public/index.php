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
        <a href="#">
          <img src="icon/logo.svg" alt="Logo do Site">
        </a>
      </div>
    </nav>
  </header>
  <main class="background" id="main">
    <section class="container formulario">
      <div class="flex btn-options">
        <a href="#" class="btn">Entrar</a>
        <a href="cadastrar.php" class="btn dark">Cadastrar</a>
      </div>
      <form action="" id="login">
        <h1>Bem-Vindo!</h1>
        <div class="form-group">
          <input type="text" placeholder="Usuário" class="input">
          <img src="icon/user.svg" alt="Usuário">
        </div>
        <div class="form-group">
          <input type="password" placeholder="Senha" class="input">
          <img src="icon/password.svg" alt="Senha">
        </div>
        <input type="submit" value="Login" class="btn">
        <a href="#">Esqueceu a Senha?</a>
      </form>
    </section>
  </main>
</body>

</html>