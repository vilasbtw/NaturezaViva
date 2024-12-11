
<?php
    include "../db/conexao.php";

    $nome = $_POST["nome"];
    $senha = $_POST["senha"];

    $conexao = conectar();

    $queryVerificaUsuario = "SELECT * FROM Usuarios WHERE nome = '$nome'";
    $resultadoUsuario = mysqli_query($conexao, $queryVerificaUsuario);
    $linhasUsuario = mysqli_num_rows($resultadoUsuario);

    $queryVerificaAdministrador = "SELECT * FROM Administradores WHERE nome = '$nome'";
    $resultadoAdministrador = mysqli_query($conexao, $queryVerificaAdministrador);
    $linhasAdministrador = mysqli_num_rows($resultadoAdministrador);

    if ($linhasUsuario > 0 || $linhasAdministrador > 0) {
        echo "Usuário já existente. Escolha outro nome.";
    } else {
        $queryCadastro = "INSERT INTO Usuarios(nome, senha) VALUES ('$nome', '$senha')";
        $inseriu = mysqli_query($conexao, $queryCadastro);

        if ($inseriu) {
            echo "<a href='../index.php'>voltar ao inicio</a><br>";
            echo "Usuário cadastrado com sucesso!";
        } else {
            echo "<a href='../index.php'>voltar ao inicio</a><br>";
            echo "Erro ao cadastrar o usuário. Tente novamente.";
        }
    }
    mysqli_close($conexao);
?>