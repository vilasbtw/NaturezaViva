<?php   
    session_start();

    include "../db/conexao.php";
    
    $conexao = conectar();

    $nome = $_POST["nome"];
    $senha = $_POST["senha"];

    // Verificar se existe esse nome na tabela usuários (Se é usuário comum)
    $queryVerificaUsuario = "SELECT * FROM Usuarios WHERE nome = '$nome'";
    $linhas = mysqli_query($conexao,$queryVerificaUsuario);

    if (mysqli_num_rows($linhas) > 0) {
        $usuario = mysqli_fetch_assoc($linhas);

        if ($usuario['senha'] == $senha) {

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header('Location: ../home/userHome.php');
            
            exit();
        } else {
            echo "<a href='../index.php'>voltar ao inicio</a><br>";
            echo "Senha incorreta.";
        }
    }

    // Verificar se existe esse nome na tabela administradores (Se é administrador)
    $queryVerificaAdministradores = "SELECT * FROM Administradores WHERE nome = '$nome'";
    $linhasAdm = mysqli_query($conexao,$queryVerificaAdministradores);

    if (mysqli_num_rows($linhasAdm) > 0) {
        $administrador = mysqli_fetch_assoc($linhasAdm);

        if ($administrador['senha'] == $senha) {

            $_SESSION['id'] = $administrador['id'];
            $_SESSION['nome'] = $administrador['nome'];

            header('Location: ../home/admHome.php');
            
            exit();
        } else {
            echo "<a href='../index.php'>voltar ao inicio</a><br>";
            echo "Senha incorreta.";
        }

    }  else {
         echo "<a href='../index.php'>voltar ao inicio</a><br>";
         echo "Usuario não encontrado.";
    }

    mysqli_close($conexao);
?>