<?php 
$espaco = getEspacoWithId($_GET['id']);
?>
<div class="popup">
    <div class="espaco-expanded">
        <button class="x"><a href="../home/admHome.php">x</a></button>
        <h2><?php echo $espaco['nome']; ?></h2>
        <p>Endereco: <?php echo $espaco['endereco']; ?></p>

        <div class="horario-div">
            <h3>HORARIOS</h3>
            <form action="../actions/cadastrarHorario.php" method="POST">
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
                    foreach ($horarios as $horario) {
                        echo <<<HTML
                            {$horario["inicio"]}                        
                        HTML;
                    }

                ?>
            </div>
        </div>
    </div>
</div>