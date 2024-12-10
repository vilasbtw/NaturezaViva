<?php 
require_once $_SERVER["DOCUMENT_ROOT"]."/naturezaviva/db/conexao.php";

function getDadosUsuario($id) {
  $con = conectar();
  $res = mysqli_query($con, "SELECT nome FROM Usuarios WHERE id = $id LIMIT 1");
  return mysqli_fetch_array($res);
}

function getDadosAdmininstrador($id) {
  $con = conectar();
  $res = mysqli_query($con, "SELECT nome FROM Administradores WHERE id = $id LIMIT 1");
  return mysqli_fetch_array($res);
}
