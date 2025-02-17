<?php
require_once "conexao.php";


$username =  $_POST['username'];
$username = htmlspecialchars(trim($username));
$password1 = $_POST['pw1'];
$password2 = $_POST['pw2'];


$sql = "SELECT id FROM user WHERE username= :username";
$stmt = $conn->prepare($sql);
$stmt->execute(['username' => $username]);

if ($stmt->rowCount() > 0) {
  header("Location: ../cadastrar.php?error=2");
} else if ($password1 !== $password2) {
  header("Location: ../cadastrar.php?error=3");
} else {
  $sex = $_POST['sexo'];
  $password_hash = password_hash($password1, PASSWORD_BCRYPT);
  $sql_insert = "INSERT INTO user(username, pw,date_create, sexo) VALUES (:nome, :senha, NOW(), :sex)";
  $stmt_insert = $conn->prepare($sql_insert);
  $stmt_insert->execute([
    'nome' => $username,
    'senha' => $password_hash,
    'sex' => $sex
  ]);

  header("Location: login.php?success=1");
}
