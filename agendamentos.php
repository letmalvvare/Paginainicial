<?php
require "conexao.php";

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: agendamentoshome.php");
    exit;
}

$nome  = $_POST['nome'] ?? '';
$tel   = $_POST['tel'] ?? '';
$email = $_POST['email'] ?? '';
$data  = $_POST['data'] ?? '';

// validação básica (pode ampliar)
if (empty($nome) || empty($tel) || empty($email) || empty($data)) {
    die("Dados incompletos.");
}

$stmt = $conn->prepare("INSERT INTO agendamentos (nome, telefone, email, data_horario) VALUES (?, ?, ?, ?)");
if (!$stmt) {
    die("Prepare falhou: " . $conn->error);
}
$stmt->bind_param("ssss", $nome, $tel, $email, $data);
if ($stmt->execute()) {
    header("Location: agendamentoshome.php?sucesso=1");
    exit;
} else {
    die("Erro ao salvar: " . $stmt->error);
}
?>
