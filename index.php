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
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="styles/form.css">
    <title>Bem-vindo!</title>
</head>
<body>
    <main>
        <h1>Natureza Viva</h1>
        <form method="POST" action="entrar.php">
            <label for="nome">Nome</label>
            <input type="text" name="nome" required><br>

            <label for="senha">Senha</label>
            <input type="text" name="senha" required><br>

            <input type="submit" value="Enviar">
        </form>
        <p>não possui conta? <a href="formularioCadastro.php">cadastre-se</a></p>
    </main>
</body>
</html>