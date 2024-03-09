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
   <link rel="stylesheet" href="../css/filme.css">
   <title>SB Filmes - Filmes</title>
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
          <li class="side-item ">
            <a href="./inicio.php">
               <i class="fa-solid fa-house"></i>
              <span class="item-description">Inicio</span>
            </a>
          </li>
          <li class="side-item active">
            <a href="./filmes.php">
               <i class="fa-solid fa-film"></i>
               <span class="item-description">Filmes</span>
            </a>
          </li>
          <li class="side-item">
            <a href="./curtidos.html">
               <i class="fa-solid fa-heart"></i>
                <span class="item-description">Curtidos<span>
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
              <span class="item-description">Ver Perfis</span>
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
            <span class="item-description">Sair</ hrspan        </button>
      </div>
    </nav>

    <main>
      <section class="container-main">

         <form class="logo-container" action="#" method="post">
            <div class="input-field">
                <input type="search" name="buscar" placeholder="Buscar Filme"> 
                <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>    
         </form>

         <div class="content-container">
            <div class="principal-text">
                <h2>Veja os principais Filmes!</h2>
                <p>Ai aqui coloca qualquer coisa so para complementar o título!</p>

                <div class="categorias">
                    <a href="#" class="item-categoria">categoria</a>
                    <a href="#" class="item-categoria">categoria</a>
                    <a href="#" class="item-categoria">categoria</a>
                    <a href="#" class="item-categoria">categoria</a>
                    <a href="#" class="item-categoria">categoria</a>
                </div>
            </div>
         </div>
      </section>

      <section class="secundary-section">

        <div class="title-secundary">
           <h2> Categoria</h2>
        </div>

        <div class="content-secundary">
           <!-- Aqui vai ser onde os filmes mais curtidos vao estar -->
           <div class="movie-container">

              <!-- Aqui coloca apenas a imagem que tiver no BD -->
              <img src="https://m.media-amazon.com/images/I/81kz06oSUeL._AC_SL1500_.jpg" alt="" class="img-movie">


              <form class="action-box" >
                 <!-- Aqui é o  botão de curtir,tem que ser relacionado com o id do usuario e do filme -->
                 <button class="like-btn" type="button"> 
                    <i class="fa-regular fa-heart"></i>
                 </button>

                 <!-- Aqui o btn de Ver mais, ai tem que ser redirecionado a pagina filmeDetalhe, acho que tem que pegar o id do filme e enviar pra pagina que vai ser redirecionada -->
                 <button class="coment-btn" type="submit"><i class="fa-solid fa-location-arrow"></i>Ver Mais</button>
              </form>
           </div>
     
        </div>
     </section>
     <section class="secundary-section">

      <div class="title-secundary">
         <h2> Categoria</h2>
      </div>

      <div class="content-secundary">
         <!-- Aqui vai ser onde os filmes mais curtidos vao estar -->
         <div class="movie-container">

            <!-- Aqui coloca apenas a imagem que tiver no BD -->
            <img src="https://m.media-amazon.com/images/I/81kz06oSUeL._AC_SL1500_.jpg" alt="" class="img-movie">


            <form class="action-box" >
               <!-- Aqui é o  botão de curtir,tem que ser relacionado com o id do usuario e do filme -->
               <button class="like-btn" type="button"> 
                  <i class="fa-regular fa-heart"></i>
               </button>

               <!-- Aqui o btn de Ver mais, ai tem que ser redirecionado a pagina filmeDetalhe, acho que tem que pegar o id do filme e enviar pra pagina que vai ser redirecionada -->
               <button class="coment-btn" type="submit"><i class="fa-solid fa-location-arrow"></i>Ver Mais</button>
            </form>
         </div>
   
      </div>
   </section>
   <section class="secundary-section">

    <div class="title-secundary">
       <h2> Categoria</h2>
    </div>

    <div class="content-secundary">
       <!-- Aqui vai ser onde os filmes mais curtidos vao estar -->
       <div class="movie-container">

          <!-- Aqui coloca apenas a imagem que tiver no BD -->
          <img src="https://m.media-amazon.com/images/I/81kz06oSUeL._AC_SL1500_.jpg" alt="" class="img-movie">


          <form class="action-box" >
             <!-- Aqui é o  botão de curtir,tem que ser relacionado com o id do usuario e do filme -->
             <button class="like-btn" type="button"> 
                <i class="fa-regular fa-heart"></i>
             </button>

             <!-- Aqui o btn de Ver mais, ai tem que ser redirecionado a pagina filmeDetalhe, acho que tem que pegar o id do filme e enviar pra pagina que vai ser redirecionada -->
             <button class="coment-btn" type="submit"><i class="fa-solid fa-location-arrow"></i>Ver Mais</button>
          </form>
       </div>
 
    </div>
 </section>

    </main>

   <!-- Modal -->


   <script src="../js/like.js"></script>
    <script src="../js/sidebar.js"></script>
</body>
</html>