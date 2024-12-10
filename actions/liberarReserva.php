<?php include '../horarios/reservarHorario.php';

liberarReserva($_POST['horario-id']);
header("Location: ../home/userHome.php");