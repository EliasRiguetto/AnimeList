<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Anime List</title>
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>
  <?php
  include_once('../php/includes/header-admin.php');
  ?>
  <main class="background" id="main">
    <section class="container formulario">
      <form action="" id="perfil">
        <h1>Alterar Perfil</h1>
        <div class="form-group">
          <input type="text" placeholder="Usuário" class="input">
          <img src="../icon/user.svg" alt="Usuário">
        </div>
        <div class="form-group">
          <label for="">Sexo</label>
          <div class="radio">
            <input type="radio" name="sexo" id="masc" checked>
            <label for="masc">Masculino</label>
            <input type="radio" name="sexo" id="fem">
            <label for="fem">Feminino</label>
          </div>
        </div>
        <div class="form-group">
          <input type="password" placeholder="Senha" class="input">
          <img src="../icon/password.svg" alt="Senha">
        </div>
        <div class="form-group">
          <input type="password" placeholder="Confirmar Senha" class="input">
          <img src="../icon/password.svg" alt="Senha">
        </div>
        <input type="submit" value="Atualizar" class="btn">
      </form>
    </section>
  </main>
</body>

</html>