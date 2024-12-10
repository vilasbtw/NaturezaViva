<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="styles/pagina-com-form.css" >
    <link rel="stylesheet" href="styles/form.css">
    <style>
        .formulario-padrao {
            height: 48vh;
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
    <title>Cadastrar</title>
</head>
<body>
    <div class="formulario-padrao">
        <h1>Cadastrar-se</h1>
        <form method="POST" action="actions/cadastrarUsuario.php">
            <p class="error-message"><?php if (isset($_GET['mensagem'])) echo $_GET['mensagem'] ?></p>
            <div class="input-row">
                <label for="nome">Nome</label>
                <input type="text" name="nome" required>
            </div>

            <div class="input-row">
                <label for="senha">Senha</label>
                <input type="password" name="senha" required>
            </div>

            <div class="check-row">
                <input type="checkbox" name="isAdm" value="sim" id="isAdm" />
                <label for="isAdm">administrador?</label>
            </div>

            <input type="submit" value="Enviar">
        </form>
        <p>já possui conta? <a href="index.php">entre no sistema</a></p>
    </div>
</body>
</html>