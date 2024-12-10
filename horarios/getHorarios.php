<?php 
include_once $_SERVER["DOCUMENT_ROOT"]."/naturezaviva/db/conexao.php";


function getHorariosFrom($espacoId) {
    $con = conectar();
    $res = mysqli_query($con, "SELECT * FROM Horarios WHERE id_espaco=$espacoId");

    $horarios = [];
    while ($arr = mysqli_fetch_array($res)) {
        array_push($horarios, $arr);
    }
    return $horarios;

}

function getHorariosDisponiveis($espacoId) {
    $con = conectar();
    $res = mysqli_query($con, "SELECT * FROM Horarios WHERE id_espaco=$espacoId AND id_usuario is NULL");

    $horarios = [];
    while ($arr = mysqli_fetch_array($res)) {
        array_push($horarios, $arr);
    }
    return $horarios;
}