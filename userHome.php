<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" defer>
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="styles/home.css">

    <title>Document</title>
  </head>
  <body>
    <main>
      <button class="hamburguer"><img src="res/menu-bar.png"></button>
      <div class="left-panel"></div>
      <section class="alugueis">
        <div class="top-section">
          <div class="pesquisar-div">
            <input type="text" class="pesquisar" placeholder="pesquisar" />
          </div>
        </div>
        <div class="espacos-div">
          <div class="espaco"></div>
          <div class="espaco"></div>
          <div class="espaco"></div>
        </div>
      </section>
    </main>

    <script>
      const hamburguer = document.querySelector('.hamburguer');
      
      const leftPanel = document.querySelector('.left-panel');
      

      hamburguer.onclick = ev => {
        leftPanel.classList.toggle('disabled');
      }
    </script>
  </body>
</html>