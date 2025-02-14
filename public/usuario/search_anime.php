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
    <section id="animes" class="container">
      <div class="header-anime">
        <h1>Animes - Todos <span>2</span></h1>
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
        <a href="anime.php" class="grid-item">
          <div class="item-img">
            <img src="https://angelotti.wordpress.com/wp-content/uploads/2023/09/one-piece-capa-anime-001-luffy-nami-zoro-usopp-sanji.webp?w=774" alt="" srcset="" class="image">
            <div class="overlay">
              <div class="text">One Piece</div>
            </div>
          </div>
        </a>
        <a href="" class="grid-item">
          <div class="item-img">
            <img src="./../img/slime.jpg" alt="" srcset="" class="image">
            <div class="overlay">
              <div class="text">That Time I Got Reincarnated as a Slime is Tensei Shitara Slime Datta Ken</div>
            </div>
          </div>
        </a>
        <div class="grid-item">
          <a href="" class="item-img">
            <img src="https://a.storyblok.com/f/178900/1280x1809/68550494ec/frieren-beyond-journey-s-end-key-visual.jpg/m/filters:quality(95)format(webp)" alt="" class="image">
            <div class="overlay">
              <div class="text">Frieren</div>
            </div>
          </a>
        </div>
        <div class="grid-item">
          <a href="" class="item-img">
            <img src="https://pm1.aminoapps.com/6581/d6a1bfe314957c219124a90994a2da58c1fadfab_hq.jpg" alt="" class="image">
            <div class="overlay">
              <div class="text">Naruto Classico</div>
            </div>
          </a>
        </div>
        <div class="grid-item">
          <a href="" class="item-img">
            <img src="http://doublesama.com/wp-content/uploads/2018/08/Code-Geass-cover.jpg" alt="" class="image">
            <div class="overlay">
              <div class="text">Code Geass</div>
            </div>
          </a>
        </div>
        <div class="grid-item">Item 6</div>
        <div class="grid-item">Item 7</div>
        <div class="grid-item">Item 8</div>
        <div class="grid-item">Item 9</div>
        <div class="grid-item">Item 10</div>
        <div class="grid-item">Item 11</div>
        <div class="grid-item">Item 12</div>
        <div class="grid-item">

          <a href="" class="item-img">
            <img src="http://doublesama.com/wp-content/uploads/2018/08/Code-Geass-cover.jpg" alt="" class="image">
            <div class="overlay">
              <div class="text">Code Geass</div>
            </div>
          </a>
        </div>
        <div class="grid-item">Item 14</div>
        <div class="grid-item">Item 15</div>
        <div class="grid-item">Item 16</div>
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