<?php
require_once(__DIR__ . '/../conexao.php');
require_once(__DIR__ . '/../includes/session.php');

$id_anime = $_GET['id'];

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







  $sql = "UPDATE anime SET nome = :nome , nome_ingles = :nome_ingles, classificacao = :classificacao, meu_status= :meu_status, temporada=:temporada, episodios=:episodios, anime_status=:anime_status, ano_lançamento=:ano_lancamento, parei=:parei, imagem=:imagem, descricao=:descricao WHERE id_anime = :id_anime";

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
  $stmt->bindParam(':id_anime', $id_anime);

  $stmt->execute();
  header('Location: ../../usuario/anime.php?id=' . $id_anime . '&success=3');
} else {
  header('Location: ../../usuario/edit_anime.php?id=' . $id_anime . '&error=7');
}
