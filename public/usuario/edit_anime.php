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
                    <option value="Acompanhando">Acompanhando</option>
                    <option value="Assistir depois">Assistir depois</option>
                    <option value="Concluído">Concluído</option>
                    <option value="Desisti">Desisti</option>
                  </select>
                </p>
              </div>
              <div class="my-informations">
                <ul>
                  <li>Temporada: <span>
                      <select name="anime_season" id="">
                        <option value="Sem temporada">Sem temporada</option>
                        <option value="1º Temporada">1º Temporada</option>
                        <option value="2º Temporada">2º Temporada</option>
                        <option value="3º Temporada">3º Temporada</option>
                        <option value="4º Temporada">4º Temporada</option>
                        <option value="5º Temporada">5º Temporada</option>
                        <option value="6º Temporada">6º Temporada</option>
                        <option value="7º Temporada">7º Temporada</option>
                        <option value="8º Temporada">8º Temporada</option>
                        <option value="9º Temporada">9º Temporada</option>
                        <option value="10º Temporada">10º Temporada</option>
                        <option value="11º Temporada">11º Temporada</option>
                        <option value="12º Temporada">12º Temporada</option>
                        <option value="13º Temporada">13º Temporada</option>
                        <option value="14º Temporada">14º Temporada</option>
                        <option value="15º Temporada">15º Temporada</option>
                        <option value="16º Temporada">16º Temporada</option>
                        <option value="17º Temporada">17º Temporada</option>
                        <option value="18º Temporada">18º Temporada</option>
                        <option value="19º Temporada">19º Temporada</option>
                        <option value="20º Temporada">20º Temporada</option>
                        <option value="21º Temporada">21º Temporada</option>
                        <option value="22º Temporada">22º Temporada</option>
                        <option value="23º Temporada">23º Temporada</option>
                      </select>
                    </span></li>
                  <li>Episodios: <span>
                      <input type="number" value="<?= $anime['episodios'] ?>" min="0" class="input" name="anime_episode">
                    </span></li>
                  <li>Status do anime: <span>
                      <select name="anime_status" id="">
                        <option value="Em lançamento">Em lançamento</option>
                        <option value="Concluído" ckecked>Concluído</option>
                        <option value="Em breve">Em breve</option>
                        <option value="Em hiato">Em hiato</option>
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