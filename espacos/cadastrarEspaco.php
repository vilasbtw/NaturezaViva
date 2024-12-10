<?php 
include $_SERVER["DOCUMENT_ROOT"]."/naturezaviva/db/conexao.php";

function cadastrarEspaco($nome, $endereco, $idAdm) {
  $con = conectar();
  mysqli_query($con, "INSERT INTO Espacos (nome, endereco, id_administrador) VALUES ('$nome', '$endereco', $idAdm)");
}