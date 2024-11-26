
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
        $espaco_id = mysqli_insert_id( $conexao );

        echo "Espaço cadastrado com sucesso!";
        echo "<br><button><a href='formularioAdicionarHorario.php?=$espaco_id'>Adicionar um horário</a></button>";
     } else {
        echo "Erro ao cadastrar o espaço.";
    }
    
    mysqli_close($conexao);
?>