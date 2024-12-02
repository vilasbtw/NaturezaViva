<?php 
include $_SERVER["DOCUMENT_ROOT"]."/naturezaviva/db/conexao.php";

function cadastrarEspaco($nome, $endereco) {
  $con = conectar();
  mysqli_query($con, "INSERT INTO Espacos (nome, endereco) VALUES ('$nome', '$endereco')");
}