<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="css/styles.css" />

  </head>
  <body>

  <header id="hero" class="container">
      <div id="navBar">
          <a class="logo" href="index.php">SOUNDTASTIC</a>
          <nav id="show">
              <ul>
                  <li><a href="explorar.php" class="line-hover active">Explorar</a></li>
                  <li><a href="#" class="line-hover">Subir</a></li>
                  <li><a href="contacto.php" class="line-hover">Contacto</a></li>
                </ul>
            </nav>
            <svg
              class="menu"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 448 512"
            >
              <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
              <path
                d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"
              />
            </svg>
      </div>
      <div id="headerContainer">
        <!-- start info header  -->
        <div id="infoHeader">
          <p id="titleHeader" class="animate__animated animate__fadeInLeft">
            Explora, Escucha y Agrega nuevas canciones a tu playlist
          </p>
          <p id="pHeader" class="animate__animated animate__fadeInLeft animate__delay-1s">
            Mas de 5 millones de canciones de todo tipo esperan a ser
            descubiertas por ti y el mundo entero hoy mismo.
          </p>
        </div>
        <!-- end info header  -->
        <!-- start music player  -->
        <div id="musicPlayer" class="animate__animated animate__fadeInUp animate__delay-1s">
          <img
            class="album"
            src="img/ab67616d0000b2738811fa68fbd0d04df58055fe.jpg"
            alt="album-desrocs"
          />
          <div class="albumInfoContainer">
            <div class="albumInfo">
              <p>
                <span class="song">Nothing Personal</span> <br />
                <span class="autor">des rocs</span>
              </p>
            </div>
            <img
              class="play"
              src="img/—Pngtree—music player screen transparent background_8724562.png"
              alt=""
            />
          </div>
        </div>
        <!-- end music player  -->
      </div>
      <!-- arrow -->
      <div class="box">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </header>
    <!-- end header -->