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