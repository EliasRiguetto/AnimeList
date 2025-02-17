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
    <section class="container" id="anime">
      <div class="info-anime">
        <div class="anime-img">
          <img src="https://angelotti.wordpress.com/wp-content/uploads/2023/09/one-piece-capa-anime-001-luffy-nami-zoro-usopp-sanji.webp?w=774" alt="" srcset="" class="image">
        </div>
        <div class="anime-title">
          <div class="title-name">
            <div class="flex">
              <p>One piece</p>
              <a href="../../public/usuario/edit_anime.php">
                <img src="./../icon/edit.svg" alt="" title="Editar">
              </a>
            </div>
            <div class="classification flex">
              <img src="./../icon/star.svg" alt="">
              <img src="./../icon/star.svg" alt="">
              <img src="./../icon/star.svg" alt="">
              <img src="./../icon/star.svg" alt="">
              <img src="./../icon/star.svg" alt="">
            </div>

          </div>
          <div class="title-name-english">
            <p>One piece</p>
          </div>
          <div class="anime-situation">
            <p>Assistindo</p>
          </div>
          <div class="my-informations">
            <ul>
              <li>Temporada: <span>sem temporada</span></li>
              <li>Episodios: <span>1009</span></li>
              <li>Status do anime: <span>em lançamento</span></li>
              <li>Ano de lançamento: <span>1995</span></li>
              <li>Onde parei de assistir: <span>1000</span></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="anime-description">
        <p>Gol D. Roger era conhecido como o "Rei dos Piratas", o ser mais forte e infame que navegou na Grand Line. A captura e execução de Roger pelo Governo Mundial trouxe uma mudança em todo o mundo. Suas últimas palavras antes de sua morte revelaram a existência do maior tesouro do mundo, One Piece. Foi essa revelação que trouxe a Grande Era dos Piratas, homens que sonhavam em encontrar One Piece - que promete uma quantidade ilimitada de riquezas e fama - e muito possivelmente o auge da glória e o título de Rei dos Piratas. Entra Monkey D. Luffy, um garoto de 17 anos que desafia sua definição padrão de pirata. Em vez da personalidade popular de um pirata perverso, endurecido e desdentado que saqueia vilas para se divertir, a razão de Luffy ser um pirata é pura maravilha: o pensamento de uma aventura emocionante que o leva a pessoas intrigantes e, finalmente, ao tesouro prometido. Seguindo os passos de seu herói de infância, Luffy e sua tripulação viajam pela Grand Line, experimentando aventuras loucas, revelando mistérios sombrios e lutando contra inimigos fortes, tudo para alcançar a mais cobiçada de todas as fortunas - One Piece.</p>
      </div>
    </section>
  </main>
  <?php
  include_once('../php/includes/footer.php');
  ?>
</body>

</html>