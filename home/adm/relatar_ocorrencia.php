<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../styles/index.css">
  <link rel="stylesheet" href="../../styles/form.css">
  <title>Document</title>
  <style>
    body {
      width: 100vw; height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      overflow: hidden;
    }
    .formulario-padrao {
      height: 30vh;
    }
    form {
      display: flex;
      flex-direction: column;
    }

  </style>
</head>
<body>
  <div class="formulario-padrao">
    <form action="../../actions/negarDevolucao.php" method="POST">
      <a href="../admHome.php">voltar</a>
      <input type="hidden" name="horario-id" value="<?php echo $_GET['id'] ?>" />
      <label for="ocorrencia">se desejar, informe uma ocorrência</label>
      <input type="text" name="ocorrencia" placeholder="ocorrência" />
      <input type="submit" value="enviar" />
    </form>
  </div>
</body>
</html>