<?php
require_once __DIR__ . '/../../vendor/autoload.php';


$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../../');
$dotenv->load();
$host= $_ENV['DB_HOST'];
$user  = $_ENV['DB_USER'];
$password  = $_ENV['DB_PASSWORD'];
$dbname = $_ENV['DB_NAME'];


try {
  $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8";
  $pdo = new PDO($dsn, $user, $password);

  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  echo "Conexão com o banco de dados estabelecida com sucesso!";
} catch (PDOException $e) {
  // Capturar erro caso a conexão falhe
  echo "Falha na conexão com o banco de dados: " . $e->getMessage();
}
?>