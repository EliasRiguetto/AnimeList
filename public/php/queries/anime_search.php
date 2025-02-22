<?php
require_once(__DIR__ . '/../conexao.php');

$sql_count = "SELECT COUNT(*) AS all_animes FROM anime WHERE usuario = $user_id";
$result_count = $conn->query($sql_count);

$row = $result_count->fetch();
$total_animes = $row['all_animes'];


$pesquisa = isset($_POST['search']) ? $_POST['search'] : '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $order = $_POST['order'] ?? 'id_anime';
  $show = $_POST['anime_show'] ?? '';
} else {
  $order = 'id_anime';
}




$sql = "SELECT * FROM anime WHERE usuario = $user_id  ORDER BY $order";
$result = $conn->query($sql);

$animes = $result->fetchAll();
