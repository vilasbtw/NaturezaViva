<?php
    session_start();

    if (!isset($_SESSION['id'])) {
        header("Location: index.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Usuario</title>
</head>
<body>
    <a href="logout.php">Sair</a>
    <p>Alugar espaço</p>
    <p>Consultar espaço</p>
</body>
</html>