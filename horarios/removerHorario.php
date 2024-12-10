<?php 
include_once $_SERVER["DOCUMENT_ROOT"]."/naturezaviva/db/conexao.php";

function removerHorarioComId($id) {
  $con = conectar();
  mysqli_query($con, "DELETE FROM Horarios WHERE id = $id");
}