<?php include '../horarios/adicionarHorario.php';

echo $_POST['espaco-id'];
inserirHorarioNoEspaco($_POST['espaco-id'], $_POST['inicio'], $_POST['fim']);

header("Location: home/admHome.php?operacao=visualizar-espaco?id={$_POST['espaco-id']}");