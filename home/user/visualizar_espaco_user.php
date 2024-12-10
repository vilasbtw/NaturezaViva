<?php 
$espaco = getEspacoWithId($_GET['id']);
?>
<div class="popup">
    <div class="espaco-expanded">
        <button class="x"><a href="../home/userHome.php"><img src="../res/x-symbol.png" alt=""></a></button>
        <h2><?php echo $espaco['nome']; ?></h2>
        <p class="endereco">Endereco: <?php echo $espaco['endereco']; ?></p>

        <div class="horario-div">
            <h3>HORARIOS</h3>
        
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
                                <div class="horario-wrapper">
                                    <h4>{$horario["status"]}</h4>
                                    <div class="horario">
                                        <form class="dados-form" method="POST" action="../actions/alterarHorario.php">
                                            <input type="hidden" name="espaco-id" value="{$espaco['id']}" />
                                            <input type="hidden" name="horario-id" value="{$horario['id']}" />

                                            <div class="input-row">
                                                <label for="inicio">inicio</label>
                                                <input type="date" class="visivel" disabled name="inicio" value="{$horario['inicio']}" />
                                            </div>
                                            <div class="input-row">
                                                <label for="fim">fim</label>
                                                <input type="date" class="visivel" disabled name="fim" value="{$horario['fim']}" />
                                            </div>
                                            <div class="enviar-div">
                                                <button class="enviar" type="submit">reservar <img src="../res/check.png" /></button>
                                            </div>

                                        </form>
                                    </div>     
                                </div>                   
                            HTML;
                        }
                    }

                ?>
            </div>
        </div>
    </div>
</div>