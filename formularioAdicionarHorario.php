<?php
    session_start();

    if ($_SESSION['tipoUsuario'] != 1) {
        header("Location: user.php");
        exit();
    }

    $espaco_id = $_GET["espaco_id"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Horário</title>
</head>
<body>
    <?php include "link.php";?>

    <p>Adicionar Horários para o Espaço #<?= $espaco_id ?></p>

    <form method="POST" action="adicionarHorario.php">
        <input type="hidden" name="espaco_id" value="<?= $espaco_id ?>">

        <label for="data">Data:</label>
        <input type="date" id="data" name="data" required><br><br>

        <label for="horario">Horário:</label>
        <input type="time" id="horario" name="horario" required><br><br>

        <input type="submit" value="Adicionar horário">
    </form>
</body>
</html>