<?php
require_once(__DIR__ . '/../conexao.php');
require_once(__DIR__ . '/../includes/session.php');

$user_id = $_SESSION['user_id'];

// Definir o termo de pesquisa
$pesquisa = isset($_POST['search']) ? $_POST['search'] : '';

// Definir o meu status do anime se houver
$status = isset($_POST['anime_show']) ? $_POST['anime_show'] : '';

// Definir a ordenação
$order = isset($_POST['order']) ? $_POST['order'] : 'id_anime';

// Contar o total de animes para o usuário
$sql_count = "SELECT COUNT(*) AS all_animes FROM anime WHERE usuario = ?";
$params = [$user_id];

// Construir a consulta SQL base
$sql = "SELECT * FROM anime WHERE usuario = ?";

// Adicionar a condição de pesquisa, se houver um termo
if ($pesquisa) {
  $sql .= " AND (nome LIKE ? OR nome_ingles LIKE ?)";
  $pesquisa = "%$pesquisa%";
  $params[] = $pesquisa;
  $params[] = $pesquisa;
}

// Adicionar a condição de status, se houver
if ($status) {
  $sql .= " AND meu_status = ? ";

  $params[] = $status;
}


if ($order == 'classificacao') {
  $desc = "DESC";
} else {
  $desc = '';
}

// Adicionar a ordenação
$sql .= " ORDER BY $order $desc";

// Preparar a consulta
$stmt = $conn->prepare($sql);

// Executar a consulta com os parâmetros
$stmt->execute($params);

// Obter os resultados
$animes = $stmt->fetchAll();

// Contar os animes filtrados (para mostrar o número de resultados)
$sql_count = "SELECT COUNT(*) AS all_animes FROM anime WHERE usuario = ?";

if ($pesquisa) {
  $sql_count .= " AND (nome LIKE ? OR nome_ingles LIKE ?)";
}

if ($status) {
  $sql_count .= " AND meu_status = ?";
}

$stmt_count = $conn->prepare($sql_count);
$stmt_count->execute($params);
$row = $stmt_count->fetch();
$total_animes = $row['all_animes'];
