<?php 
include $_SERVER["DOCUMENT_ROOT"]."/naturezaviva/db/conexao.php";

function confirmarDevolucao($idHorario) {
  $con = conectar();
  mysqli_query($con, "UPDATE Horarios SET status = 'devolucao confirmada' WHERE id = $idHorario");
}

function negarDevolucao($idHorario, $ocorrencia) {
  $con = conectar();
  mysqli_query($con, "UPDATE Horarios SET status = 'aguardando devolução com ocorrência', ocorrencia = '$ocorrencia' WHERE id = $idHorario");
}
