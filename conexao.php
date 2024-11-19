<?php
    function conectar() {
        return $conexao = mysqli_connect("localhost","root",'', "NaturezaViva");
    }
?>