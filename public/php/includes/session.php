<?php
require_once(__DIR__ . '/../conexao.php');
session_start();

if (isset($_SESSION['user_id'])) {
  $user_id = $_SESSION['user_id'];
} else {
  header('Location: ../index.php?error=1');
  exit();
}
