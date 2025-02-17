<?php
include_once "../php/includes/session.php";
?>
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
  include_once('../php/includes/anime_search.php');
  ?>
  <main class="background" id="main">
    <section id="animes" class="container">
      <div class="header-anime">
        <h1>Animes <span><?= $total_animes; ?></span></h1>
        <div class="flex">
          <form action="">
            <p>Animes:</p>
            <select name="" id="" class="form-select">
              <option value="todos" class="form-option">Todos</option>
              <option value="acompanhando" class="form-option">Acompanhando</option>
              <option value="depois" class="form-option">Assistir depois</option>
              <option value="concluidos" class="form-option">Concluidos</option>
            </select>
          </form>
          <form action="">
            <p>Por ordem:</p>
            <select name="" id="" class="form-select">
              <option value="alfapetica" class="form-option">Alfabetica</option>
              <option value="classificação" class="form-option">Classificação</option>
              <option value="ano" class="form-option">Ano</option>
            </select>
          </form>
        </div>

      </div>
      <div class="grid">
        <?php foreach ($animes as $anime): ?>
          <a href="anime.php" class="grid-item">
            <div class="item-img">
              <img src="<?= $anime['imagem']; ?>" alt="<?= $anime['nome']; ?>" srcset="" class="image">
              <div class="overlay">
                <div class="text"><?= $anime['nome']; ?></div>
              </div>
            </div>
          </a>
        <?php endforeach; ?>
      </div>
      <div class="pagination">
        <a href="#" class="prev">&laquo;</a>
        <a href="#" class="page">1</a>
        <a href="#" class="page">2</a>
        <a href="#" class="page">3</a>
        <a href="#" class="next">&raquo;</a>
      </div>
    </section>
  </main>
  <?php
  include_once('../php/includes/footer.php');
  ?>
</body>

</html>