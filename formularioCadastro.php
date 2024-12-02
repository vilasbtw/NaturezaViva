<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="styles/pagina-com-form.css" >
    <link rel="stylesheet" href="styles/form.css">
    <title>Cadastrar</title>
</head>
<body>
    <div class="formulario-padrao">
        <h1>Cadastrar-se</h1>
        <form method="POST" action="cadastrar.php">
            <label for="nome">Nome</label>
            <input type="text" name="nome" required><br>

            <label for="senha">Senha</label>
            <input type="text" name="senha" required><br>

            <input type="submit" value="Enviar">
        </form>
        <p>já possui conta? <a href="index.php">entre no sistema</a></p>
    </div>
</body>
</html>