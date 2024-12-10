<?php include_once '../usuario/cadastrarUsuario.php';

if (isset($_POST['isAdm'])) {
  $erro = cadastrarAdministrador($_POST['nome'], $_POST['senha']);
  if ($erro) { 
    header("Location: ../formularioCadastro.php?mensagem=$erro");
    exit;
  }
}
else {
  $erro = cadastrarUsuario($_POST['nome'], $_POST['senha']);
  if ($erro) {
    header("Location: ../formularioCadastro.php?mensagem=$erro");
    exit;
  }
}

 header("Location: ../index.php");