<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" defer>
    <link rel="stylesheet" href="../styles/index.css">
    <link rel="stylesheet" href="../styles/form.css">
    <link rel="stylesheet" href="home.css">

    <title>Adm Home</title>
  </head>
  <body>
    <main>
      <a href="../logout.php" id="sair">sair</a>
      <button class="hamburguer"><img src="../res/menu-bar.png"></button>
        <div class="left-panel">
       
          <div class="content">
            <a href="http://" id="perfil"> <h3>Meu perfil</h3></a>
              <div class="botoes">
                <a href="?operacao=cadastrar-espaco" id="botaoTexto"> <button class="botaoMenu"><h3 >Cadastrar um Espaco</h3></button></a>
              </div>
          </div>
        </div>

      <section class="alugueis">
        <?php require '../espacos/getEspacos.php'; 
          if (isset($_GET['operacao'])) {
            switch ($_GET['operacao']) {
              case 'cadastrar-espaco':
                include "adm/form_cadastrar_espaco.php";
                break;

              case 'visualizar-espaco':
                include "adm/visualizar_espaco_adm.php";
                break;
            }
          }
        ?>
        <div class="top-section">
          <div class="pesquisar-div">
            <form action="#" class="pesquisar-form">
              <input type="text" value="<?php echo isset($_GET['query']) ? $_GET['query'] : ''?>" name="query" class="pesquisar" placeholder="pesquisar" />
              <button type="submit"><img src="../res/lupa.png" alt="lupa"></button>
            </form>
          </div>
        </div>

        <div id="titulo2">
          <h2>Meus espaços </h2>
        </div>

        <?php
          $query = "";
          if (isset($_GET["query"])) {
            $query = $_GET["query"];
          }
          $espacos = getEspacos($query);
          
          if (empty($espacos)) {
            echo <<<HTML
              <p class="espaco-msg">Nenhum espaço foi cadastrado ainda...</p>;
            HTML;
          } else { 
            echo '<div class="espacos-div">';
            foreach ($espacos as $espaco) {
              echo <<<HTML
                  <a href="?operacao=visualizar-espaco&id={$espaco["id"]}">
                    <div class="espaco">
                      <h3>{$espaco["nome"]}</h3>
                      <h4>{$espaco["endereco"]}</h4>
                    </div>
                  </a>
                  HTML;
                }
              echo '</div>';
          }
        ?>
      </section>
    </main>

    <script>
      const hamburguer = document.querySelector('.hamburguer');
      
      const leftPanel = document.querySelector('.left-panel');

      if (document.querySelector('.popup')) {
        [...document.querySelector('.popup').parentElement.children].forEach(el => {
          if (el != document.querySelector('.popup')) el.style.filter = 'blur(2px)';
        });
      }
        

      hamburguer.onclick = ev => {
        leftPanel.classList.toggle('disabled');
      }
    </script>
  </body>
</html>