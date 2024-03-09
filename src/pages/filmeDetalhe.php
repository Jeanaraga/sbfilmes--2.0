<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link rel="stylesheet" href="../css/inicio.css">
   <link rel="stylesheet" href="../css/sidebar.css">
   <link rel="stylesheet" href="../css/filmeDetalhe.css">
   <title>SB Filmes - Detalhe do Filme</title>
</head>
<body>
   <nav id="sidebar">
      <div id="sidebar_content">
        <div id="user">
          <img src="../img/avatar.png" alt="avatar" id="user_avatar"/>
          <p id="user_infos">
            <span class="item-description"> Fulano de Tal </span>
            <span class="item-description"> De Coisa e Tal </span>
          </p>
        </div>
        <ul id="side_items">
          <li class="side-item active">
            <a href="./inicio.html">
               <i class="fa-solid fa-house"></i>
              <span class="item-description">Inicio</span>
            </a>
          </li>
          <li class="side-item">
            <a href="./filmes.html">
               <i class="fa-solid fa-film"></i>
               <span class="item-description">Filmes</span>
            </a>
          </li>
          <li class="side-item">
            <a href="./curtidos.html">
               <i class="fa-solid fa-heart"></i>
              <span class="item-description">Curtidos</span>
            </a>
          </li>
          
          <li class="side-item">
            <a href="./ajuda.html">
               <i class="fa-solid fa-circle-question"></i>
              <span class="item-description">Ajuda</span>
            </a>
          </li>
          <li class="side-item">
            <a href="./usuario.html">
               <i class="fa-solid fa-user"></i>
              <span class="item-description">Ver Perfil</span>
            </a>
          </li>
        </ul>
        <button id="open_btn">
          <i class="fa-solid fa-chevron-right" id="open_btn_icon"></i>
        </button>
      </div>
      <div id="logout">
        <button id="logout_btn">
            <i class="fa-solid fa-right-from-bracket"></i>
            <span class="item-description">Sair</span>
        </button>
      </div>
    </nav>

    <main>
      <section class="container-main">

         <div class="logo-container">
            <h1>Logo</h1>
         </div>

         <!-- Aqui vai colocar as info do filme mais curtidos -->
         <div class="content-container">

            <div class="img-container">
               <img src="https://m.media-amazon.com/images/I/81ai6zx6eXL._AC_SL1304_.jpg" alt="">
            </div>

            <div class="text-movie-container">

               <h2 class="title-movie-main">Titulo do Filme</h2>

               <ul class="infos-movie-main">
                  <li>Ano de Lançamento: 0000</li>
                  <li>Diretor: Fulano de Tal</li>
                  <li>Duração: 00:00</li>
               </ul>

               <p class="desc-movie-main">
                  Ai eu teva pensando, nesta parte aqui ser o filme que tiver mais curtidas no banco de dados,ai só preencher as informações. Ai na parte de baixo vamo colocar uma setion para os top 10 filmes mais curtidos no banco e depois uma outra section com os 10 ultimos adcionados no banco de dados.
               </p>

               <form class="action-box">
                  <button class="like-btn"> 
                     <i class="fa-regular fa-heart"></i>
                  </button>
                  <button class="coment-btn"><i class="fa-solid fa-location-arrow"></i>Ver Mais</button>
               </form>

            </div>
         </div>
         
      </section>

      <section class="secundary-section">
         <form class="form-container" action="#" method="post">
            <div class="input-field">
               <label for="avaliacao">Avaliar de 1 a 5</label>
               <input type="number" name="avaliacao" min="1" max="5" required>
            </div>
            <div class="input-field">
               <label for="comentario">Comentar</label>
               <textarea name="comentario"  cols="30" rows="5"></textarea>
            </div>
            <button type="submit">Enviar</button>
         </form>
      </section>

    </main>

   <!-- Modal -->


    <script src="../js/sidebar.js"></script>
</body>
</html>