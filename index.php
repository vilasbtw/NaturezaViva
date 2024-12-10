<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="styles/pagina-com-form.css">
    <link rel="stylesheet" href="styles/form.css">
    <title>Bem-vindo!</title>
</head>
<body>
    <div class="formulario-padrao">
        <div class="checkbox-wrapper-5">
        <div class="check">
            <input checked="" id="check-5" type="checkbox">
            <label for="check-5"></label>
        </div>
        </div>

        <h1>Entrar</h1>
        <form method="POST" action="actions/entrar.php">
            <div class="input-row">
                <label for="nome">Nome</label>
                <input type="text" name="nome" required><br>
            </div>

            <div class="input-row">
                <label for="senha">Senha</label>
                <input type="text" name="senha" required><br>
            </div>

            <input type="submit" value="Enviar">
        </form>
        <p>não possui conta?<a href="formularioCadastro.php">cadastre-se</a></p>
    </div>
</body>
</html>