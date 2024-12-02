<?php echo <<<HTML
    <div class="popup">
        <div class="formulario-padrao cadastrar-espaco">
            <button class="x"><a href="../home/admHome.php">x</a></button>
            <h1>Cadastrar Espaço</h1>
            <form action="../cadastrarEspaco.php" method="POST">
            <label for="nome">nome:</label>
            <input type="text" id="nome" name="nome" />

            <label for="endereco">endereco</label>
            <input type="text" id="endereco" name="endereco" />
            
            <input type="submit" value="enviar" />
            </form>
        </div>
    </div>
HTML;