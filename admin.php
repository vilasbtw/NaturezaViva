<?php
    session_start();

    if (!isset($_SESSION['id'])) {
        header("Location: index.php");
        exit();
    }

    if ($_SESSION['tipoUsuario'] != 1) {
        header("Location: user.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Administrador</title>
</head>
<body>
    <a href="logout.php">Sair</a>
    <a href="formularioCadastroEspaco.php">Cadastrar novo espaço</a>
    <p>Alterar espaços</p>
    <p>Mudar permissão de usuários</p>
</body>
</html>