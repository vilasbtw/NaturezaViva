
<?php
    include "conexao.php";
    include "link.php";

    $nome = $_POST["nome"];
    $endereco = $_POST["endereco"];
    $tipo = $_POST["tipo"];
    $capacidade = $_POST["capacidade"];

    $conexao = conectar();
    $query = "INSERT INTO Espacos(id, nome, tipo, endereco, capacidade) VALUES (default, '$nome', '$tipo', '$endereco', '$capacidade')";
    
    $inseriu = mysqli_query($conexao, $query);

    if ($inseriu) {
        echo "Espaço cadastrado com sucesso!";
     } else {
        echo "Erro ao cadastrar o espaço. Tente novamente.";
    }
    
    mysqli_close($conexao);
?>