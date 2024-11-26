<?php
    include "conexao.php";
    include "link.php";

    $espaco_id = $_POST["espaco_id"];
    $data = $_POST["data"];
    $horario = $_POST["horario"];

    $conexao = conectar();
    $query = "INSERT INTO Horarios(espaco_id, data, horario) VALUES('$espaco_id','$data','$horario')";

    $adicionou = mysqli_query($conexao, $query);

    if ($adicionou) {
        echo "Horário adicionado!";
        echo "<button><a href='formularioAdicionarHorario.php?espaco_id=$espaco_id'>Adicionar outro horário</a></button>";
    } else {
        echo "ops";
    }
    mysqli_close($conexao);
?>