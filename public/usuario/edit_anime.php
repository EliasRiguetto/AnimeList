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
    <section class="container" id="edit-anime">
      <div id="delete">
        <img src="./../icon/delete.svg" alt="delete" title="Deletar Anime">
      </div>
      <div class="info-anime">
        <div class="anime-img">
          <img src="https://angelotti.wordpress.com/wp-content/uploads/2023/09/one-piece-capa-anime-001-luffy-nami-zoro-usopp-sanji.webp?w=774" alt="" srcset="" class="image">
          <input type="text" class="input" value="https://angelotti.wordpress.com/wp-content/uploads/2023/09/one-piece-capa-anime-001-luffy-nami-zoro-usopp-sanji.webp?w=774">
        </div>
        <div class="anime-title">
          <div class="title-name">
            <input type="text" value="One Piece" class="input">
            <div class="classification flex">
              <img src="./../icon/star.svg" alt="">
              <img src="./../icon/star.svg" alt="">
              <img src="./../icon/star.svg" alt="">
              <img src="./../icon/star.svg" alt="">
              <img src="./../icon/star.svg" alt="">
              <input type="number" min="1" max="5" class="input" value="5">
            </div>


          </div>
          <div class="title-name-english">
            <input type="text" value="One Piece" class="input">
          </div>
          <div class="anime-situation">
            <p>
              <select name="" id="">
                <option value="">Acompanhando</option>
                <option value="">Assistir depois</option>
                <option value="">Concluído</option>
                <option value="">Desisti</option>
              </select>
            </p>
          </div>
          <div class="my-informations">
            <ul>
              <li>Temporada: <span>
                  <select name="" id="">
                    <option value="">Sem temporada</option>
                    <option value="">1º Temporada</option>
                    <option value="">2º Temporada</option>
                    <option value="">3º Temporada</option>
                    <option value="">4º Temporada</option>
                    <option value="">5º Temporada</option>
                    <option value="">6º Temporada</option>
                    <option value="">7º Temporada</option>
                    <option value="">8º Temporada</option>
                    <option value="">9º Temporada</option>
                    <option value="">10º Temporada</option>
                    <option value="">11º Temporada</option>
                    <option value="">12º Temporada</option>
                    <option value="">13º Temporada</option>
                    <option value="">14º Temporada</option>
                    <option value="">15º Temporada</option>
                    <option value="">16º Temporada</option>
                    <option value="">17º Temporada</option>
                    <option value="">18º Temporada</option>
                    <option value="">19º Temporada</option>
                    <option value="">20º Temporada</option>
                    <option value="">21º Temporada</option>
                    <option value="">22º Temporada</option>
                    <option value="">23º Temporada</option>
                  </select>
                </span></li>
              <li>Episodios: <span>
                  <input type="number" value="1" min="0" class="input">
                </span></li>
              <li>Status do anime: <span>
                  <select name="" id="">
                    <option value="">Em lançamento</option>
                    <option value="" ckecked>Concluido</option>
                    <option value="">Em breve</option>
                    <option value="">Em hiato</option>
                  </select>
                </span></li>
              <li>Ano de lançamento: <span>
                  <input type="number" value="2000" min="1900" class="input">
                </span></li>
              <li>Onde parei de assistir: <span>
                  <input type="text" class="input" value="primeiro episodio">
                </span></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="anime-description">
        <textarea>Gol D. Roger era conhecido como o "Rei dos Piratas", o ser mais forte e infame que navegou na Grand Line. A captura e execução de Roger pelo Governo Mundial trouxe uma mudança em todo o mundo. Suas últimas palavras antes de sua morte revelaram a existência do maior tesouro do mundo, One Piece. Foi essa revelação que trouxe a Grande Era dos Piratas, homens que sonhavam em encontrar One Piece - que promete uma quantidade ilimitada de riquezas e fama - e muito possivelmente o auge da glória e o título de Rei dos Piratas. Entra Monkey D. Luffy, um garoto de 17 anos que desafia sua definição padrão de pirata. Em vez da personalidade popular de um pirata perverso, endurecido e desdentado que saqueia vilas para se divertir, a razão de Luffy ser um pirata é pura maravilha: o pensamento de uma aventura emocionante que o leva a pessoas intrigantes e, finalmente, ao tesouro prometido. Seguindo os passos de seu herói de infância, Luffy e sua tripulação viajam pela Grand Line, experimentando aventuras loucas, revelando mistérios sombrios e lutando contra inimigos fortes, tudo para alcançar a mais cobiçada de todas as fortunas - One Piece.</textarea>
      </div>
      <div class="flex">
        <button class="btn">Atualizar</button>
      </div>
    </section>
  </main>
  <?php
  include_once('../php/includes/footer.php');
  ?>
</body>

</html>