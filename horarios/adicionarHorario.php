<?php 
include $_SERVER["DOCUMENT_ROOT"]."/naturezaviva/db/conexao.php";


function inserirHorarioNoEspaco($espacoId, $inicio, $fim) {
    $con = conectar();
    mysqli_query($con, "INSERT INTO Horarios (inicio, fim, id_espaco) VALUES ('$inicio', '$fim', $espacoId);");
}