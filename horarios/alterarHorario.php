<?php 
include_once $_SERVER["DOCUMENT_ROOT"]."/naturezaviva/db/conexao.php";


function alterarHorario($horarioId, $inicio, $fim) {
    $con = conectar();
    mysqli_query($con, "UPDATE Horarios SET inicio = '$inicio', fim = '$fim' WHERE id = $horarioId");
}