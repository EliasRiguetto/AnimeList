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
  include_once('../php/queries/anime_search.php');
  ?>
  <main class="background" id="main">
    <section id="animes" class="container">
      <div class="header-anime">
        <h1>Animes <span><?= $total_animes; ?></span></h1>
        <div class="flex">
          <form action="" method="POST">
            <p>Animes:</p>
            <select name="anime_show" id="" class="form-select" onchange="this.form.submit()">
              <option value="" <?= isset($_POST['anime_show']) && $_POST['anime_show'] == '' ? 'selected' : ' ' ?> class="form-option">Todos</option>
              <option value="acompanhando" <?= isset($_POST['anime_show']) && $_POST['anime_show'] == 'acompanhando' ? 'selected' : ' ' ?> class="form-option">Acompanhando</option>
              <option value="depois" <?= isset($_POST['anime_show']) && $_POST['anime_show'] == 'depois' ? 'selected' : ' ' ?> class="form-option">Assistir depois</option>
              <option value="concluidos" <?= isset($_POST['anime_show']) && $_POST['anime_show'] == 'concluidos' ? 'selected' : ' ' ?> class="form-option">Concluídos</option>
            </select>
          </form>
          <form action="" method="post">
            <p>Por ordem:</p>
            <select name="order" id="" class="form-select" onchange="this.form.submit()">
              <option value="id_anime" <?= isset($_POST['order']) && $_POST['order'] == 'id_anime' ? 'selected' : ' ' ?> class="form-option">Inserção</option>
              <option value="nome" <?= isset($_POST['order']) && $_POST['order'] == 'nome' ? 'selected' : ' ' ?> class="form-option">Alfabetica</option>
              <option value="classificacao" <?= isset($_POST['order']) && $_POST['order'] == 'classificacao' ? 'selected' : ' ' ?> class="form-option">Classificação</option>
              <option value="ano_lançamento" <?= isset($_POST['order']) && $_POST['order'] == 'ano_lançamento' ? 'selected' : ' ' ?> class="form-option">Ano</option>
            </select>
          </form>
        </div>

      </div>
      <div class="grid">
        <?php foreach ($animes as $anime): ?>
          <a href="anime.php?id=<?= $anime['id_anime']; ?>" class="grid-item" ?>
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