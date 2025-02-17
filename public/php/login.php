<?php
require_once 'conexao.php';

$username =  $_POST['username'];
$username = htmlspecialchars(trim($username));
$password = $_POST['pw'];

$sql = "SELECT id, pw FROM user WHERE username = :username";
$stmt = $conn->prepare($sql);
$stmt->execute(['username' => $username]);

if ($stmt->rowCount() > 0) {
  $user = $stmt->fetch(PDO::FETCH_ASSOC);
  $hash_armazenado = $user['pw'];
  $user_id = $user['id'];
  if (password_verify($password, $hash_armazenado)) {
    session_start();
    $_SESSION['user_id'] = $user_id;
    header("Location: ../usuario/search_anime.php");
  } else {
    header("Location: ../index.php?error=4");
  }
} else {
  header("Location: ../index.php?error=5");
}
