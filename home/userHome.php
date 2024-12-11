<?php 
  session_start(); 
  if (!isset($_SESSION['id'])) {
    header('Location: ../index.php');
    exit;
  }
?>


<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" defer>
    <link rel="stylesheet" href="../styles/index.css">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="user/visualizar_espaco_user.css">

    <title>User Home</title>
  </head>
  <body>
    <main>
      <a href="../logout.php" id="sair">sair</a>

      <button class="hamburguer">
        <img src="../res/menu-bar.png">
      </button>
      <div class="left-panel">
        <div class="content">
          <a href="http://" id="perfil"> <h3><?php echo $_SESSION['nome'] ?></h3></a>
            <div class="botoes">
              <a href="?query=minhas reservas" id="botaoTexto"> <button class="botaoMenu"><h3 >Minhas Reservas</h3></button></a>
              <a href="?" id="botaoTexto"> <button class="botaoMenu"><h3 >Exibir Todos</h3></button></a>
          </div>
        </div>
      </div>
      <section class="alugueis">
      <?php require '../espacos/getEspacos.php'; 
          if (isset($_GET['operacao'])) {
            switch ($_GET['operacao']) {
              case 'visualizar-espaco':
                include "user/visualizar_espaco_user.php";
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
          <h2>Espaços disponíveis</h2>
        </div>

        <?php require_once "../espacos/getEspacos.php";
          $query = "";
          if (isset($_GET["query"])) {
            $query = $_GET["query"];
          }

          if (isset($_GET["query"]) && $_GET["query"] == "minhas reservas") {
            $espacos = getEspacosReservadosPor($_SESSION['id']);
          }
          else $espacos = getEspacos($query);
          
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
        console.log('pau');
        leftPanel.classList.toggle('disabled');
      }
    </script>
      <div vw class="enabled">
    <div vw-access-button class="active"></div>
    <div vw-plugin-wrapper>
      <div class="vw-plugin-top-wrapper"></div>
    </div>
  </div>
  <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
  <script>
    new window.VLibras.Widget('https://vlibras.gov.br/app');
  </script>
  </body>
</html>