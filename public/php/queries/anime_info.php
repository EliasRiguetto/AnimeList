<?php
require_once(__DIR__ . '/../conexao.php');


$id_anime = $_GET['id'];

$sql_anime = "SELECT * FROM anime WHERE id_anime = $id_anime";
$result_anime = $conn->query($sql_anime);

$anime = $result_anime->fetchAll();
