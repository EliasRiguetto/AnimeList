<?php
require_once(__DIR__ . '/../conexao.php');
$sql = "SELECT * FROM anime WHERE usuario = $user_id";
$result = $conn->query($sql);


$sql_count = "SELECT COUNT(*) AS all_animes FROM anime WHERE usuario = $user_id";
$result_count = $conn->query($sql_count);

$row = $result_count->fetch();
$total_animes = $row['all_animes'];

$animes = $result->fetchAll();
