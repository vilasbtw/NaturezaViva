<?php include "db/conexao.php"; 

function cadastrarEspaco($nome, $endereco) {
  $con = conectar();
  mysqli_query($con, "INSERT INTO Espacos (nome, endereco) VALUES ('$nome', '$endereco')");
}