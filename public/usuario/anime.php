<?php
include_once "../php/includes/session.php";
include_once "../php/queries/anime_info.php";
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
  ?>
  <main class="background" id="main">
    <section class="container" id="anime">
      <?php foreach ($anime as $anime): ?>
        <div class="info-anime">
          <div class="anime-img">
            <img src="<?= $anime['imagem'] ?>" alt="" srcset="" class="image">
          </div>
          <div class="anime-title">
            <div class="title-name">
              <div class="flex">
                <p><?= $anime['nome'] ?></p>
                <a href="../../public/usuario/edit_anime.php?id=<?= $anime['id_anime'] ?>">
                  <img src="./../icon/edit.svg" alt="" title="Editar">
                </a>
              </div>
              <div class="classification flex">
                <?php
                $qtd_img = $anime['classificacao'];
                ?>
                <?php for ($i = 0; $i < $qtd_img; $i++): ?>
                  <img src="./../icon/star.svg" alt="">
                <?php endfor; ?>
              </div>

            </div>
            <div class="title-name-english">
              <p><?= $anime['nome_ingles'] ?></p>
            </div>
            <div class="anime-situation">
              <p><?= $anime['meu_status'] ?></p>
            </div>
            <div class="my-informations">
              <ul>
                <li>Temporada: <span><?= $anime['temporada'] ?></span></li>
                <li>Episodios: <span><?= $anime['episodios'] ?></span></li>
                <li>Status do anime: <span><?= $anime['anime_status'] ?></span></li>
                <li>Ano de lançamento: <span><?= $anime['ano_lançamento'] ?></span></li>
                <li>Onde parei de assistir: <span><?= $anime['parei'] ?></span></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="anime-description">
          <p><?= trim($anime['descricao']) ?></p>
        </div>
      <?php endforeach; ?>
  </main>
  <?php
  include_once('../php/includes/footer.php');
  ?>
</body>

</html>