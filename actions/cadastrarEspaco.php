<?php
include "../espacos/cadastrarEspaco.php";

$nome = $_POST["nome"];
$endereco = $_POST["endereco"];


cadastrarEspaco($nome, $endereco);
header("Location: ../home/admHome.php"); 
