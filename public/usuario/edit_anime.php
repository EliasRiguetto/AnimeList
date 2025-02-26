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
    <section class="container" id="edit-anime">
      <?php foreach ($anime as $anime): ?>
        <form action="./../php/queries/anime_update.php?id=<?= $anime['id_anime'] ?>" method="POST">
          <div id="delete">
            <a href="" data-modal="abrir">
              <img src="./../icon/delete.svg" alt="delete" title="Deletar anime">
              <section class="modal-container" data-modal="container">
                <div class="modal">
                  <p>Realmente deseja deletar o anime?</p>
                  <div class="flex">
                    <a href="" class="btn dark">Não</a>
                    <a href="../php/queries/anime_delete.php?id=<?= $anime['id_anime'] ?>" class="btn dark">Sim</a>
                  </div>
                </div>
              </section>
            </a>
          </div>
          <div class="info-anime">
            <div class="anime-img">
              <img src="<?= $anime['imagem'] ?>" alt="" srcset="" class="image">
              <input type="text" class="input" value="<?= $anime['imagem'] ?>" name="anime_img">
            </div>
            <div class="anime-title">
              <div class="title-name">
                <input type="text" value="<?= $anime['nome'] ?>" class="input" name="anime_name">
                <div class="classification flex">
                  <?php
                  $qtd_img = $anime['classificacao'];
                  ?>
                  <?php for ($i = 0; $i < $qtd_img; $i++): ?>
                    <img src="./../icon/star.svg" alt="">
                  <?php endfor; ?>
                  <input type="number" min="1" max="5" class="input" value="<?= $anime['classificacao'] ?>" name="anime_rate">
                </div>
              </div>
              <div class="title-name-english">
                <input type="text" value="<?= $anime['nome_ingles'] ?>" class="input" name="anime_english">
              </div>
              <div class="anime-situation">
                <p>
                  <select name="my_status" id="">
                    <option value="Acompanhando" <?php echo ($anime['meu_status'] == "Acompanhando") ? "selected" : ""; ?>>Acompanhando</option>
                    <option value="Assistir depois" <?php echo ($anime['meu_status'] == "Assistir depois") ? "selected" : ""; ?>>Assistir depois</option>
                    <option value="Concluído" <?php echo ($anime['meu_status'] == "Concluído") ? "selected" : ""; ?>>Concluído</option>
                    <option value="Desisti" <?php echo ($anime['meu_status']  == "Desisti") ? "selected" : ""; ?>>Desisti</option>
                  </select>
                </p>
              </div>
              <div class="my-informations">
                <ul>
                  <li>Temporada: <span>
                      <select name="anime_season" id="">
                        <option value="Sem temporada" <?php echo ($anime['temporada'] == "Sem temporada") ? "selected" : ""; ?>>Sem temporada</option>
                        <option value="1º Temporada" <?php echo ($anime['temporada'] == "1º Temporada") ? "selected" : ""; ?>>1º Temporada</option>
                        <option value="2º Temporada" <?php echo ($anime['temporada'] == "2º Temporada") ? "selected" : ""; ?>>2º Temporada</option>
                        <option value="3º Temporada" <?php echo ($anime['temporada'] == "3º Temporada") ? "selected" : ""; ?>>3º Temporada</option>
                        <option value="4º Temporada" <?php echo ($anime['temporada'] == "4º Temporada") ? "selected" : ""; ?>>4º Temporada</option>
                        <option value="5º Temporada" <?php echo ($anime['temporada'] == "5º Temporada") ? "selected" : ""; ?>>5º Temporada</option>
                        <option value="6º Temporada" <?php echo ($anime['temporada'] == "6º Temporada") ? "selected" : ""; ?>>6º Temporada</option>
                        <option value="7º Temporada" <?php echo ($anime['temporada'] == "7º Temporada") ? "selected" : ""; ?>>7º Temporada</option>
                        <option value="8º Temporada" <?php echo ($anime['temporada'] == "8º Temporada") ? "selected" : ""; ?>>8º Temporada</option>
                        <option value="9º Temporada" <?php echo ($anime['temporada'] == "9º Temporada") ? "selected" : ""; ?>>9º Temporada</option>
                        <option value="10º Temporada" <?php echo ($anime['temporada'] == "10º Temporada") ? "selected" : ""; ?>>10º Temporada</option>
                        <option value="11º Temporada" <?php echo ($anime['temporada'] == "11º Temporada") ? "selected" : ""; ?>>11º Temporada</option>
                        <option value="12º Temporada" <?php echo ($anime['temporada'] == "12º Temporada") ? "selected" : ""; ?>>12º Temporada</option>
                        <option value="13º Temporada" <?php echo ($anime['temporada'] == "13º Temporada") ? "selected" : ""; ?>>13º Temporada</option>
                        <option value="14º Temporada" <?php echo ($anime['temporada'] == "14º Temporada") ? "selected" : ""; ?>>14º Temporada</option>
                        <option value="15º Temporada" <?php echo ($anime['temporada'] == "15º Temporada") ? "selected" : ""; ?>>15º Temporada</option>
                        <option value="16º Temporada" <?php echo ($anime['temporada'] == "16º Temporada") ? "selected" : ""; ?>>16º Temporada</option>
                        <option value="17º Temporada" <?php echo ($anime['temporada'] == "17º Temporada") ? "selected" : ""; ?>>17º Temporada</option>
                        <option value="18º Temporada" <?php echo ($anime['temporada'] == "18º Temporada") ? "selected" : ""; ?>>18º Temporada</option>
                        <option value="19º Temporada" <?php echo ($anime['temporada'] == "19º Temporada") ? "selected" : ""; ?>>19º Temporada</option>
                        <option value="20º Temporada" <?php echo ($anime['temporada'] == "20º Temporada") ? "selected" : ""; ?>>20º Temporada</option>
                        <option value="21º Temporada" <?php echo ($anime['temporada'] == "21º Temporada") ? "selected" : ""; ?>>21º Temporada</option>
                        <option value="22º Temporada" <?php echo ($anime['temporada'] == "22º Temporada") ? "selected" : ""; ?>>22º Temporada</option>
                        <option value="23º Temporada" <?php echo ($anime['temporada'] == "23º Temporada") ? "selected" : ""; ?>>23º Temporada</option>

                      </select>
                    </span></li>
                  <li>Episodios: <span>
                      <input type="number" value="<?= $anime['episodios'] ?>" min="0" class="input" name="anime_episode">
                    </span></li>
                  <li>Status do anime: <span>
                      <select name="anime_status" id="">
                        <option value="Em lançamento" <?php echo ($anime['anime_status'] == "Em lançamento") ? "selected" : ""; ?>>Em lançamento</option>
                        <option value="Concluído" <?php echo ($anime['anime_status']  == "Concluído") ? "selected" : ""; ?>>Concluído</option>
                        <option value="Em breve" <?php echo ($anime['anime_status'] == "Em breve") ? "selected" : ""; ?>>Em breve</option>
                        <option value="Em hiato" <?php echo ($anime['anime_status'] == "Em hiato") ? "selected" : ""; ?>>Em hiato</option>
                      </select>
                    </span></li>
                  <li>Ano de lançamento: <span>
                      <input type="number" value="<?= $anime['ano_lançamento'] ?>" min="1900" class="input" name="anime_year">
                    </span></li>
                  <li>Onde parei de assistir: <span>
                      <input type="text" class="input" value="<?= $anime['parei'] ?>" name="anime_stop">
                    </span></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="anime-description">
            <textarea name="anime_description">
          <?= trim($anime['descricao']) ?>
          </textarea>
          </div>
          <div>
            <button class="btn">Atualizar</button>
          </div>
        </form>
      <?php endforeach ?>
    </section>
  </main>
  <?php
  include_once('../php/includes/footer.php');
  ?>

  <script src="../js/modal.js"></script>
</body>

</html>