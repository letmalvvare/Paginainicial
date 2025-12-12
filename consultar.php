<?php
include "proteger.php";
include "conexao.php";

// Captura filtros
$busca = $_GET['busca'] ?? '';
$f_data = $_GET['data'] ?? '';

// Monta query base
$sql = "SELECT id, nome, telefone, email, data_horario FROM agendamentos WHERE 1=1";

// Filtro unificado (nome, telefone e email)
if (!empty($busca)) {
    $b = $conn->real_escape_string($busca);
    $sql .= " AND (nome LIKE '%$b%' OR telefone LIKE '%$b%' OR email LIKE '%$b%')";
}

// Filtro de data (dia inteiro)
if (!empty($f_data)) {
    $d = $conn->real_escape_string($f_data);
    $sql .= " AND DATE(data_horario) = '$d'";
}

$sql .= " ORDER BY data_horario ASC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<title>Consulta de Agendamentos</title>
<link rel="stylesheet" href="styhome.css">
</head>
<body>

<center>
    <h1 class="agendamentoh1">Agendamentos Registrados</h1>

    <!-- FORMULÁRIO DE FILTROS -->
    <div class="form-container" style="width: 500px; margin-bottom: 20px;">
        <form method="GET" action="consultar.php">

            <label>Buscar (nome, telefone ou e-mail):</label>
            <input type="text" name="busca" value="<?= htmlspecialchars($busca) ?>">

            <label>Data:</label>
            <input type="date" name="data" value="<?= htmlspecialchars($f_data) ?>">

            <br><br>
            <button type="submit">Filtrar</button>
            <a href="consultar.php" class="botao-limpar">Limpar Filtros</a>
        </form>
    </div>

    <!-- TABELA -->
    <table border="1" cellpadding="8" cellspacing="0" style="width:80%; text-align:center;">
        <tr>
            <th>Nome</th>
            <th>Telefone</th>
            <th>E-mail</th>
            <th>Data e Horário</th>
            <th>Ações</th>
        </tr>

        <?php while ($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?= htmlspecialchars($row['nome']) ?></td>
            <td><?= htmlspecialchars($row['telefone']) ?></td>
            <td><?= htmlspecialchars($row['email']) ?></td>
            <td><?= date("d/m/Y H:i", strtotime($row['data_horario'])) ?></td>
            <td>
                <a href="agendamento_acao.php?id=<?= $row['id'] ?>">Editar</a> |
                <a href="agendamento_acao.php?acao=excluir&id=<?= $row['id'] ?>" onclick="return confirm('Excluir este agendamento?')">Excluir</a>
            </td>
        </tr>
        <?php } ?>

    </table>

    <br>
    <a href="index.html">Voltar</a>
</center>

</body>
</html>
