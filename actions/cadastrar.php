
<?php
    include "../db/conexao.php";

    $nome = $_POST["nome"];
    $senha = $_POST["senha"];

    $conexao = conectar();

    $queryVerificaUsuario = "SELECT * FROM Usuarios WHERE nome = '$nome'";
    $resultado = mysqli_query($conexao, $queryVerificaUsuario);

    if (mysqli_num_rows($resultado) > 0) {
        echo "Usuário já existente. Escolha outro nome.";
    } else {
        $queryCadastro = "INSERT INTO Usuarios(nome, senha) VALUES ('$nome', '$senha')";
        $inseriu = mysqli_query($conexao, $queryCadastro);

        if ($inseriu) {
            echo "Usuário cadastrado com sucesso!";
        } else {
            echo "Erro ao cadastrar o usuário. Tente novamente.";
        }
    }
    mysqli_close($conexao);
?>