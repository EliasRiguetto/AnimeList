<?php
require_once(__DIR__ . '/../conexao.php');
require_once(__DIR__ . '/../includes/session.php');

$user_id = $_SESSION['user_id'];

$nome = $_POST['username'];
$senha = $_POST['pw1up'];
$senha2 = $_POST['pw2up'];
$sexo = $_POST['sexo'];

if ($senha !== $senha2) {
  header('Location: ../../usuario/perfil.php?error=3');
} else if (!$conn) {
  header('Location: ../../usuario/perfil.php?error=7');
} else {
  $sql = "UPDATE user SET username = :nome , pw = :senha, sexo= :sexo WHERE id = :id_user";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':nome', $nome);
  $stmt->bindParam(':senha', $senha);
  $stmt->bindParam(':sexo', $sexo);
  $stmt->bindParam(':id_user', $user_id);
  $stmt->execute();
  header('Location: ../../usuario/perfil.php?success=4');
}
