<?php
if (isset($_GET['error']) && $_GET['error'] == 1) {
  echo '  <div class="warning"><p>Usuário não logado!</p></div>';
}

if (isset($_GET['error']) && $_GET['error'] == 2) {
  echo '  <div class="warning"><p>Nome de usuário já utilizado!</p></div>';
}

if (isset($_GET['error']) && $_GET['error'] == 3) {
  echo '  <div class="warning"><p>Senha não coincidem!</p></div>';
}

if (isset($_GET['error']) && $_GET['error'] == 4) {
  echo '  <div class="warning"><p>Senha incorreta!</p></div>';
}
if (isset($_GET['error']) && $_GET['error'] == 5) {
  echo '  <div class="warning"><p>Usuário não localizado!</p></div>';
}
if (isset($_GET['error']) && $_GET['error'] == 6) {
  echo '  <div class="warning"><p>Não foi possivel adicionar, tente novamente!</p></div>';
}
if (isset($_GET['success']) && $_GET['success'] == 1) {
  echo '  <div class="warning"><p>Usuário cadastrado com sucesso!</p></div>';
}
if (isset($_GET['success']) && $_GET['success'] == 2) {
  echo '  <div class="warning"><p>Anime adicionado com sucesso!</p></div>';
}
