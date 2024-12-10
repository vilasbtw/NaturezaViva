<?php include '../horarios/alterarHorario.php';

alterarHorario($_POST['horario-id'], $_POST['inicio'], $_POST['fim']);

header("Location: ../home/admHome.php?operacao=visualizar-espaco&id={$_POST['espaco-id']}");