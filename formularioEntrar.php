<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar</title>
</head>
<body>
    <?php include "link.php";?>
    <form method="POST" action="entrar.php">
    <label for="nome">Nome</label>
    <input type="text" name="nome" required><br>

    <label for="senha">Senha</label>
    <input type="text" name="senha" required><br>

    <input type="submit" value="Enviar">
    </form>
</body>
</html>