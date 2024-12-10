<?php 
include $_SERVER["DOCUMENT_ROOT"]."/naturezaviva/db/conexao.php";

function getEspacos($query) { 
    $con = conectar();

    if ($query) {
        $res = mysqli_query($con, "SELECT * FROM Espacos WHERE nome LIKE '%$query%'");
    } else {
        $res = mysqli_query($con, "SELECT * FROM Espacos");
    }

    $espacos = [];
    while ($arr = mysqli_fetch_array($res)) {
        array_push($espacos, $arr);
    }
    return $espacos;
}

function getEspacoWithId($id) {
    $con = conectar();

    $res = mysqli_query($con, "SELECT * FROM Espacos WHERE id = $id");

    $espaco = mysqli_fetch_array($res);
    return $espaco;
}

function getEspacosFromAdm($idAdm) {
    $con = conectar();

    $res = mysqli_query($con, "SELECT * FROM Espacos WHERE id_administrador=$idAdm");

    $espacos = [];
    while ($arr = mysqli_fetch_array($res)) {
        array_push($espacos, $arr);
    }
    return $espacos;
}


function getEspacosReservadosPor($usuarioId) {
    $con = conectar();
    $res = mysqli_query($con, "SELECT Espacos.id, Espacos.nome, Espacos.endereco FROM Espacos INNER JOIN Horarios ON Horarios.id_espaco = Espacos.id WHERE Horarios.id_usuario = $usuarioId");

    $espacos = [];
    while ($arr = mysqli_fetch_array($res)) {
        array_push($espacos, $arr);
    }
    return $espacos;
}