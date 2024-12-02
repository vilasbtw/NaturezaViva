<?php 
$espaco = getEspacoWithId($_GET['id']);
?>
<div class="popup">
    <div class="espaco-expanded">
        <button class="x"><a href="../home/admHome.php">x</a></button>
        <h2><?php echo $espaco['nome']; ?></h2>
        <p class="endereco">Endereco: <?php echo $espaco['endereco']; ?></p>

        <div class="horario-div">
            <h3>HORARIOS</h3>
            <form class="adicionar-horario-form" action="../actions/cadastrarHorario.php" method="POST">
                <input type="hidden" name="espaco-id" value="<?php echo $_GET['id']; ?>"/>
                <div class="input-row">
                    <label for="inicio">inicio: </label>
                    <input type="date" name="inicio" />
                </div>
                <div class="input-row">
                    <label for="fim">fim: </label>
                    <input type="date" name="fim" />
                </div>

                <input type="submit" value="inserir horario">
            </form>
            <div class="exibir-horarios">
                <?php include $_SERVER["DOCUMENT_ROOT"] . "/naturezaviva/horarios/getHorarios.php";
                    $horarios = getHorariosFrom($_GET['id']);
                    if (empty($horarios)) {
                        echo "<p class='horario-msg'>nenhum horário cadastrado</p>";

                    } else {
                        foreach ($horarios as $horario) {
                            $inicioFormatado = date_format(new DateTime($horario["inicio"]), 'd/m/Y');
                            $finalFormatado = date_format(new DateTime($horario["fim"]), 'd/m/Y');
                            echo <<<HTML
                                <div class="horario">
                                    <form method="POST" action="../actions/removerHorario.php">
                                        <input type="hidden" name="espaco-id" value="{$espaco['id']}" />
                                        <input type="hidden" name="horario-id" value="{$horario['id']}" />

                                        <button type="submit"><img src="../res/lixo.png" /></button>
                                    </form>
                                    <p>{$inicioFormatado}</p>
                                    <p>{$finalFormatado}</p>
                                </div>                        
                            HTML;
                        }
                    }

                ?>
            </div>
        </div>
    </div>
</div>