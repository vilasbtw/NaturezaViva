<?php include '../horarios/devolucao.php';

confirmarDevolucao($_POST['horario-id']);
header("Location: ../home/admHome.php");