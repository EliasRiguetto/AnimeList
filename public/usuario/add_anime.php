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
      <form action="">
        <div class="form-group">
          <label for="">Link da Imagem</label>
          <input type="text" class="input">
        </div>
        <div class="form-group">
          <label for="">Nome do anime</label>
          <input type="text" class="input">
        </div>
        <div class="form-group">
          <label for="">Nome do anime em Inglês (opcional)</label>
          <input type="text" class="input">
        </div>
        <div class="flex">
          <div class="form-group">
            <label for="">Classificação</label>
            <input type="number" value="5" min="1" max="5" class="input">
          </div>

          <div class="form-group">
            <label for="">Meu status</label>
            <select name="" id="">
              <option value="">Acompanhando</option>
              <option value="">Assistir depois</option>
              <option value="">Concluído</option>
              <option value="">Assistindo</option>
            </select>
          </div>
        </div>
        <div class="flex">
          <div class="form-group">
            <label for="">Episodios: </label>
            <input type="number" value="20" class="input">
          </div>
          <div class="form-group">
            <label for="">Temporada</label>
            <select name="" id="">
              <option value="">Acompanhando</option>
              <option value="">Assistir depois</option>
              <option value="">Concluído</option>
              <option value="">Assistindo</option>
            </select>
          </div>
        </div>
        <div class="flex">
          <div class="form-group">
            <label for="">Ano de lançamento: </label>
            <input type="number" value="2000" class="input">
          </div>
          <div class="form-group">
            <label for="">Status do anime:</label>
            <select name="" id="">
              <option value="">Em lançamento</option>
              <option value="">Concluído</option>
              <option value="">Em breve</option>
              <option value="">Em hiato</option>
            </select>
          </div>

        </div>
        <div class="form-group">
          <label for="">Onde parei de assistir:</label>
          <input type="text" class="input">
        </div>

        <div class="form-group">
          <label for="">Descrição do anime</label>
          <textarea name="" id="anime-description" class="input" rows="7">
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