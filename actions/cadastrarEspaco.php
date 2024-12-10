<?php
include "../espacos/cadastrarEspaco.php";

session_start();

$nome = $_POST["nome"];
$endereco = $_POST["endereco"];


cadastrarEspaco($nome, $endereco, $_SESSION['id']);
header("Location: ../home/admHome.php"); 
