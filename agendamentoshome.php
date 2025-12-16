<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamentos - Carvi Clinic</title>
     <link rel="stylesheet" href="agendamentos.css">
    <!-- Importação das fontes utilizadas -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anonymous+Pro:ital,wght@0,400;0,700;1,400;1,700&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
</head>

<?php
    include("header.php");
?>

<body>

    <main>
        <center>
    <h1 class="agendamentoh1">Agende um horário!</h1>
        <div class="form-container">
    <form>
        <label for="nome">Nome completo:</label>
        <input type="text" name="nome"/><br><br>

        <label for="tel">Número de Telefone:</label>
        <input type="tel" name="tel"/><br><br>

        <label for="email">E-mail:</label>
        <input type="email" name="email"/><br><br>

        <label for="data">Data e Horário:</label>
        <input type="datetime-local" name="data" /><br><br>

        <button type="submit">ENVIAR</button>
    </form>
        </div>
        </center>
    </main>
</body>
</html>

<?php
    include("footer.php");
?>
