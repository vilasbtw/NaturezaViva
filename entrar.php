<?php   
    include "conexao.php";
    include "link.php";
    
    $conexao = conectar();

    $nome = $_POST["nome"];
    $senha = $_POST["senha"];

    $queryVerificaUsuario = "SELECT * FROM Usuarios WHERE nome = '$nome'";
    $linhas = mysqli_query($conexao,$queryVerificaUsuario);

    if (mysqli_num_rows($linhas) > 0) {
        $usuario = mysqli_fetch_assoc($linhas);

        if ($usuario['senha'] == $senha) {
            if ($usuario['tipoUsuario'] == 1) {
                header('Location: admin.php');
            } else {
                header('Location: user.php');
            }
            exit();
        } else {
            echo "Senha incorreta.";
        }

    } else {
        echo "Usuario não encontrado.";
    }

?>