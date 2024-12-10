<?php 
include $_SERVER["DOCUMENT_ROOT"]."/naturezaviva/db/conexao.php";

function nomeJaExiste($con, $nome) {
  $res1 = mysqli_query($con, "SELECT (nome) FROM Usuarios WHERE nome='$nome'");
  $res2 = mysqli_query($con, "SELECT (nome) FROM Administradores WHERE nome='$nome'");
  if (mysqli_num_rows($res1) != 0 || mysqli_num_rows($res2)) return true;
  else return false;

}
function cadastrarAdministrador($nome, $senha) {
  $con = conectar();
  if (nomeJaExiste($con, $nome)) return 'O nome informado já existe';
  mysqli_query($con, "INSERT INTO Administradores (nome, senha) VALUES ('$nome', '$senha')");


}

function cadastrarUsuario($nome, $senha) {
  $con = conectar();
  if (nomeJaExiste($con, $nome)) return 'O nome informado já existe';
  mysqli_query($con, "INSERT INTO Usuarios (nome, senha) VALUES ('$nome', '$senha')");

}
