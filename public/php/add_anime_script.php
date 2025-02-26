<?php
require_once "conexao.php";
require_once(__DIR__ . '/includes/session.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $nome = $_POST['anime_name'];
  $nome_ingles = $_POST['anime_english'];
  $classificacao = $_POST['anime_rate'];
  $meu_status = $_POST['my_status'];
  $temporada = $_POST['anime_season'];
  $episodios = $_POST['anime_episode'];
  $anime_status = $_POST['anime_status'];
  $ano_lancamento = $_POST['anime_year'];
  $parei = $_POST['anime_stop'];
  $imagem = $_POST['anime_img'];
  $descricao = $_POST['anime_description'];
  $usuario = $user_id;

  if (empty($imagem))
    $imagem = 'https://wallpaper.forfun.com/fetch/76/762ac0f88e1157dc990f78a4cdf24e42.jpeg?h=600&r=0.5';

  $sql = "INSERT INTO anime (
                nome, nome_ingles, classificacao, meu_status, temporada, episodios, anime_status, ano_lançamento, parei, imagem, descricao, usuario
            ) VALUES (
                :nome, :nome_ingles, :classificacao, :meu_status, :temporada, :episodios, :anime_status, :ano_lancamento, :parei, :imagem, :descricao, :usuario
            )";

  $stmt = $conn->prepare($sql);


  $stmt->bindParam(':nome', $nome);
  $stmt->bindParam(':nome_ingles', $nome_ingles);
  $stmt->bindParam(':classificacao', $classificacao);
  $stmt->bindParam(':meu_status', $meu_status);
  $stmt->bindParam(':temporada', $temporada);
  $stmt->bindParam(':episodios', $episodios);
  $stmt->bindParam(':anime_status', $anime_status);
  $stmt->bindParam(':ano_lancamento', $ano_lancamento);
  $stmt->bindParam(':parei', $parei);
  $stmt->bindParam(':imagem', $imagem);
  $stmt->bindParam(':descricao', $descricao);
  $stmt->bindParam(':usuario', $usuario);

  $stmt->execute();
  header('Location: ../usuario/add_anime.php?success=2');
} else {
  header('Location: ../usuario/add_anime.php?error=6');
}
