<?php
require_once(__DIR__ . '/../conexao.php');
require_once(__DIR__ . '/../includes/session.php');

$id_anime = $_GET['id'];

$sql = "DELETE FROM anime WHERE id_anime = $id_anime";
$stmt = $conn->prepare($sql);
$stmt->execute();


if ($conn) {
  header('Location: ../../usuario/search_anime.php?success=5');
} else {
  header('Location: ../../usuario/edit_anime.php?id=' . $id_anime . '&error=8');
}
