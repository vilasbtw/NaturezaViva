<?php 
include $_SERVER["DOCUMENT_ROOT"]."/naturezaviva/db/conexao.php";

function reservarHorario($idUsuario, $idHorario) {
  $con = conectar();
  mysqli_query($con, "UPDATE Horarios SET status = 'reservado', id_usuario = $idUsuario WHERE id = $idHorario");
}

function liberarReserva($idHorario) {
  $con = conectar();
  mysqli_query($con, "UPDATE Horarios SET status = 'aguardando aprovação' WHERE id = $idHorario");
}


