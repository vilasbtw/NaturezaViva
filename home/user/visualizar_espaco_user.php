<?php 
$espaco = getEspacoWithId($_GET['id']);
?>
<div class="popup">
    <div class="espaco-expanded">
        <button class="x"><a href="../home/userHome.php"><img src="../res/x-symbol.png" alt=""></a></button>
        <h2><?php echo $espaco['nome']; ?></h2>

        <p class="endereco">Endereco: <?php echo $espaco['endereco']; ?></p>
        <h3><?php
            include_once $_SERVER["DOCUMENT_ROOT"]."/naturezaviva/usuario/getUsuario.php";
            echo 'administrador: ' . getDadosAdmininstrador($espaco['id_administrador'])['nome'];
        ?></h3>

        <div class="horario-div">
            <h3>HORARIOS</h3>
        
            <div class="exibir-horarios">
                <?php include $_SERVER["DOCUMENT_ROOT"] . "/naturezaviva/horarios/getHorarios.php";
                    $horarios = getHorariosFrom($_GET['id']);
                    if (empty($horarios)) {
                        echo "<p class='horario-msg'>nenhum horário disponível</p>";

                    } else {
                        foreach ($horarios as $horario) {
                            $inicioFormatado = date_format(new DateTime($horario["inicio"]), 'd/m/Y');
                            $finalFormatado = date_format(new DateTime($horario["fim"]), 'd/m/Y');

                            if ($horario['status'] == 'sem reserva') {
                                echo <<<HTML
                                    <div class="horario-wrapper">
                                        <h4>{$horario["status"]}</h4>
                                        <div class="horario">
                                            <form class="dados-form" method="POST" action="../actions/reservarHorario.php">
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
                            } else if ($horario['status'] == 'reservado' && $horario['id_usuario'] == $_SESSION['id']) {
                                echo <<<HTML
                                    <div class="horario-wrapper">
                                        <h4>{$horario["status"]} por você</h4>
                                        <div class="horario" style="border-color: #9DAD6F">
                                            <form class="dados-form" method="POST" action="../actions/liberarReserva.php">
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
                                                    <button class="enviar" type="submit">liberar <img src="../res/check.png" /></button>
                                                </div>
                                            </form>
                                        </div>     
                                    </div>                   
                                HTML;
                            
                        } else if ($horario['status'] == 'aguardando aprovação' && $horario['id_usuario'] == $_SESSION['id']) {
                            echo <<<HTML
                                <div class="horario-wrapper">
                                    <h4>{$horario["status"]} para devolução</h4>
                                    <div class="horario" style="border-color: #F08A4F">
                                        <form class="dados-form" method="POST" action="../actions/liberarReserva.php">
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
                                        </form>
                                    </div>     
                                </div>                   
                            HTML;
                            
                        } else if ($horario['status'] == 'aguardando devolução com ocorrência' && $horario['id_usuario'] == $_SESSION['id']) {
                            echo <<<HTML
                                <div class="horario-wrapper">
                                    <h4>{$horario["status"]}</h4>
                                    <h4 style="font-weight: bold">ocorrência: {$horario["ocorrencia"]}</h4>
                                    <div class="horario" style="border-color: #F08A4F">
                                        <form class="dados-form" method="POST" action="../actions/liberarReserva.php">
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
                                                <button class="enviar" type="submit">liberar <img src="../res/check.png" /></button>
                                            </div>
                                        </form>
                                    </div>     
                                </div>                   
                            HTML;
                        }
                    }
                }
                
                ?>
            </div>
        </div>
    </div>
</div>