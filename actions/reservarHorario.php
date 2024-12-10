<?php include '../horarios/reservarHorario.php';

session_start();
reservarHorario($_SESSION['id'], $_POST['horario-id']);
header("Location: ../home/userHome.php");