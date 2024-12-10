<?php 
include_once '../horarios/removerHorario.php';

removerHorarioComId($_POST['horario-id']);
header("Location: ../home/admHome.php?operacao=visualizar-espaco&id={$_POST['espaco-id']}");