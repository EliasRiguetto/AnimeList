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
        <div>
          <form action="">
            <select name="" id="">
              <option value="todos">Todos</option>
              <option value="acompanhando">Acompanhando</option>
              <option value="depois">Assistir depois</option>
              <option value="concluidos">Concluidos</option>
            </select>
          </form>
          <form action="">
            <p>Ordernar por:</p>
            <select name="" id="">
              <option value="todos">Alfabetica</option>
              <option value="acompanhando">Classificação</option>
              <option value="depois">Ano</option>
            </select>
          </form>
        </div>

      </div>
      <div class="grid">
        <a href="" class="grid-item">
          <div class="item-img">
            <img src="./../img/one-piece.png" alt="" srcset="">
          </div>
          <div class="item-title">
            <h2>One Piece</h2>
          </div>
        </a>
        <div class="grid-item">Item 2</div>
        <div class="grid-item">Item 3</div>
        <div class="grid-item">Item 4</div>
        <div class="grid-item">Item 5</div>
        <div class="grid-item">Item 6</div>
        <div class="grid-item">Item 7</div>
        <div class="grid-item">Item 8</div>
        <div class="grid-item">Item 9</div>
        <div class="grid-item">Item 10</div>
        <div class="grid-item">Item 11</div>
        <div class="grid-item">Item 12</div>
        <div class="grid-item">Item 13</div>
        <div class="grid-item">Item 14</div>
        <div class="grid-item">Item 15</div>
        <div class="grid-item">Item 16</div>
      </div>

    </section>

  </main>
  <?php
  include_once('../php/includes/footer.php');
  ?>
</body>

</html>