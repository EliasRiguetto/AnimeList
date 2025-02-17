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
  ?>
  <main class="background" id="main">
    <section class="container" id="add-anime">
      <h1>Adicionar anime</h1>
      <form action="../php/add_anime_script.php" method="post">
        <div class="form-group">
          <label for="anime-img">Link da Imagem</label>
          <input type="text" class="input" name="anime_img" id="anime-img">
        </div>
        <div class="form-group">
          <label for="anime-name">Nome do anime</label>
          <input type="text" class="input" name="anime_name" id="anime-name" required>
        </div>
        <div class="form-group">
          <label for="anime-english">Nome do anime em Inglês (opcional)</label>
          <input type="text" class="input" name="anime_english" id="anime-english">
        </div>
        <div class="flex">
          <div class="form-group">
            <label for="anime-rate">Classificação (1 a 5)</label>
            <input type="number" value="5" min="1" max="5" class="input" name="anime_rate" id="anime-rate" required>
          </div>

          <div class="form-group">
            <label for="my-status">Meu status</label>
            <select name="my_status" id="my-status">
              <option value="Acompanhando">Acompanhando</option>
              <option value="Assistir depois">Assistir depois</option>
              <option value="Concluído">Concluído</option>
              <option value="Desisti">Desisti</option>
            </select>
          </div>
        </div>
        <div class="flex">
          <div class="form-group">
            <label for="anime-episode">Episodios: </label>
            <input type="number" value="20" class="input" name="anime_episode" id="anime-episode">
          </div>
          <div class="form-group">
            <label for="anime-season">Temporada</label>
            <select name="anime_season" id="anime-season">
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
          </div>
        </div>
        <div class="flex">
          <div class="form-group">
            <label for="anime-year">Ano de lançamento: </label>
            <input type="number" value="2000" class="input" name="anime_year" id="anime-year">
          </div>
          <div class="form-group">
            <label for="anime-status">Status do anime:</label>
            <select name="anime_status" id="anime-status">
              <option value="Em lançamento">Em lançamento</option>
              <option value="Concluído">Concluído</option>
              <option value="Em breve">Em breve</option>
              <option value="Em hiato">Em hiato</option>
            </select>
          </div>

        </div>
        <div class="form-group">
          <label for="anime-stop">Onde parei de assistir:</label>
          <input type="text" class="input" name="anime_stop" id="anime-stop" required>
        </div>

        <div class="form-group">
          <label for="anime-description">Descrição do anime</label>
          <textarea name="anime_description" id="anime-description" class="input">
          </textarea>
        </div>
        <input type="submit" value="Cadastrar" class="btn">
      </form>
    </section>
  </main>
  <?php
  include_once('../php/includes/footer.php');
  ?>
</body>

</html>