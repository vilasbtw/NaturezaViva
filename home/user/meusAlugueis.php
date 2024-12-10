<?php
session_start(); 

if (!isset($_SESSION['id'])) {
    header("Location: ../../index.php");
    exit;
}

include "../../db/conexao.php";

$conexao = conectar();
$id_usuario = $_SESSION['id'];

if (isset($_POST['cancelar_id'])) {
    $cancelar_id = $_POST['cancelar_id'];
    $query_cancelar = "DELETE FROM Horarios WHERE id = $cancelar_id AND id_usuario = $id_usuario";
    mysqli_query($conexao, $query_cancelar);
}

$query = "SELECT H.id, H.inicio, H.fim, H.ocorrencia, H.status, E.nome AS espaco_nome 
          FROM Horarios H
          INNER JOIN Espacos E 
          ON H.id_espaco = E.id
          WHERE H.id_usuario = $id_usuario";

$resultado = mysqli_query($conexao, $query);

echo "<h2>Meus Alugueis</h2>";

if ($resultado && mysqli_num_rows($resultado) > 0) {
    echo "<table border='1'>
            <tr>
            <th>Espaço</th>
            <th>Início</th>
            <th>Fim</th>
            <th>Ação</th>
            </tr>";

    while ($row = mysqli_fetch_assoc($resultado)) {
        echo "<tr>
              <td>".$row['espaco_nome']."</td>
              <td>".$row['inicio']."</td>
              <td>".$row['fim']."</td>
              <td>
                  <form action='' method='POST'>
                      <input type='hidden' name='cancelar_id' value='".$row['id']."'>
                      <input type='submit' value='Desistir da Reserva'>
                  </form>
              </td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "Você não possui nenhuma reserva!";
}
mysqli_close($conexao);
?>