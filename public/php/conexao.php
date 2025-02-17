<?php
require_once __DIR__ . '/../../vendor/autoload.php';


$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../../');
$dotenv->load();
$host = $_ENV['DB_HOST'];
$user  = $_ENV['DB_USER'];
$password  = $_ENV['DB_PASSWORD'];
$dbname = $_ENV['DB_NAME'];

try {
  $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo 'ERROR: ' . $e->getMessage();
}
