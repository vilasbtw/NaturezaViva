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
    <link rel="stylesheet" href="styles/pagina-com-form.css">
    <link rel="stylesheet" href="styles/form.css">

    <style>
        .formulario-padrao {
            height: 45vh;
            min-height: 400px;
        }
        .formulario-padrao form .input-row {
            max-width: none;
            height: auto;
        }

        .formulario-padrao form {
            justify-content: space-between;
        }
    </style>
    <title>Bem-vindo!</title>
</head>
<body>
    <div class="formulario-padrao">
        <h1>Natureza Viva</h1>
        <form method="POST" action="actions/entrar.php">
            <p class="error-message"><?php if (isset($_GET['mensagem'])) echo $_GET['mensagem'] ?></p>
            <div class="input-row">
                <label for="nome">Nome</label>
                <input type="text" name="nome" required><br>
            </div>

            <div class="input-row">
                <label for="senha">Senha</label>
                <input type="password" name="senha" required><br>
            </div>

            <input type="submit" value="Enviar">
        </form>
        <p class="cadastrar-p">não possui conta? <a href="formularioCadastro.php">cadastre-se</a></p>
    </div>
</body>
</html>