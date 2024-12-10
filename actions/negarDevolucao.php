<?php include '../horarios/devolucao.php';

negarDevolucao($_POST['horario-id'], $_POST['ocorrencia']);
header("Location: ../home/admHome.php");