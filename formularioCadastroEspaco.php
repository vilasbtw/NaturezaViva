<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Espaco</title>
</head>
<body>
    <?php include "link.php";?>
    <form method="POST" action="cadastrarEspaco.php">
    <label for="nome">Nome do espaço:</label>
    <input type="text" name="nome" required><br>

    <label for="endereco">Endereço:</label>
    <input type="text" name="endereco" required><br>

    <label for="tipo">Tipo:</label>
    <select name="tipo" id="tipo">
        <option value="salão">Salão</option>
        <option value="auditório">Auditório</option>
    </select><br>

    <label for="capacidade">Capacidade Total:</label>
    <input type="number" name="capacidade" required><br>

    <input type="submit" value="Enviar">
    </form>
</body>
</html>