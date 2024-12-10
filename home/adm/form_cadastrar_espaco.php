<div class="popup">
    <div class="formulario-padrao cadastrar-espaco">
        <button class="x"><a href="../home/admHome.php"><img src="../res/x-symbol.png" alt="" /></a></button>
        <h1>Cadastrar Espaço</h1>
        <form action="../actions/cadastrarEspaco.php" method="POST">
            <div class="input-row">
                <label for="nome">nome:</label>
                <input type="text" id="nome" name="nome" />
            </div>

            <div class="input-row">
                <label for="endereco">endereco</label>
                <input type="text" id="endereco" name="endereco" />
            </div>
            
            <input type="submit" value="enviar" />
        </form>
    </div>
</div>