<?php
require_once(__DIR__ . '/../conexao.php');

$sql = "SELECT * FROM user where id = $user_id";

$result = $conn->query($sql);

$usuario = $result->fetchAll();
