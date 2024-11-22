<?php
session_start();

if (isset($_SESSION['tipoUsuario'])) {
    if ($_SESSION['tipoUsuario'] == 1) {
        header("Location: admin.php");
    } else {
        header("Location: user.php");
    }
    exit(); 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>
    <a href="formularioCadastro.php">Cadastrar</a><br>
    <a href="formularioEntrar.php">Entrar</a>
</body>
</html>