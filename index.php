<?php include('connection.php') ?>
<?php include('include/header.php') ?>
<!-- start section -->
<section class="aboutUs container hidden">
    <div class="subheading">
        <div class="circle"></div>
        <h3>SOBRE NOSOTROS</h3>
        <div class="circle"></div>
    </div>
    </div>
    <h2>Compartiendo Nuestro Gusto Por La Musica</h2>

    <p class="whatIs">SOUNDTASTIC es una pagina web dedicada a darles visualización a artistas musicales cuyo talento es
        sorprendente, y que a pesar de ello no son tan conocidos, o por lo menos no de este lado del charco. </p>
    <div class="aboutUsContent">
        <div>
            <div class="achievements">
                <div class="icon">
                    <i class="fa-solid fa-heart fa-2xl" style="color: #ffffff;"></i>
                </div>
                <div>
                    <h3 class="achievementsH3">Amados Por Los Musicos</h3>
                    <p class="achievementsP">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus,
                        deserunt!</p>
                </div>
            </div>
            <div class="achievements">
                <div class="icon">
                    <i class="fa-solid fa-face-smile fa-2xl" style="color: #ffffff;"></i>
                </div>
                <div>
                    <h3 class="achievementsH3">Invertimos En El Futuro</h3>
                    <p class="achievementsP">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus,
                        deserunt!</p>
                </div>
            </div>
            <div class="achievements">
                <div class="icon">
                    <i class="fa-solid fa-clock fa-2xl" style="color: #ffffff;"></i>
                </div>
                <div>
                    <h3 class="achievementsH3">Soporte 24/7</h3>
                    <p class="achievementsP">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus,
                        deserunt!</p>
                </div>
            </div>
            <div class="achievements">
                <div class="icon">
                    <i class="fa-solid fa-music fa-2xl" style="color: #ffffff;"></i>
                </div>
                <div>
                    <h3 class="achievementsH3">Tu Playlist Nos Importa</h3>
                    <p class="achievementsP">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus,
                        deserunt!</p>
                </div>
            </div>
        </div>
        <img class="achievementsImg" src="img/long-hair-artist-holding-hands-air-stage.jpg" alt="mujer bailando">
    </div>
</section>
<section class="testimonials container hidden">
    <div class="subheading">
        <div class="circle"></div>
        <h3>TESTIMONIOS</h3>
        <div class="circle"></div>
    </div>
    </div>
    <h2>Mas De 40000 Usuarios De Todo El Mundo Nos Respaldan</h2>
    <p class="backItUp">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis hic doloremque magni
        officiis tempora suscipit temporibus, quasi voluptate deserunt sapiente error similique delectus rerum,
        veritatis, provident sint aperiam libero alias?</p>
    <div class="wrapperContainer">
        <div class="wrapper">
            <i id="left" class="fa-solid fa-angle-left"></i>
            <ul class="carousel">
                <li class="card">
                    <div class="img"><img src="img/1200x1200bf-60.jpg" alt="img" draggable="false"></div>
                    <h2>Lorem, ipsum.</h2>
                    <span>Lorem ipsum dolor sit.</span>
                </li>
                <li class="card">
                    <div class="img"><img src="img/694358158_1447620095_1151611281.jpg" alt="img" draggable="false">
                    </div>
                    <h2>Lorem, ipsum.</h2>
                    <span>Lorem ipsum dolor sit.</span>
                </li>
                <li class="card">
                    <div class="img"><img src="img/ab67616d0000b2738811fa68fbd0d04df58055fe.jpg" alt="img"
                            draggable="false"></div>
                    <h2>Lorem, ipsum.</h2>
                    <span>Lorem ipsum dolor sit.</span>
                </li>
                <li class="card">
                    <div class="img"><img src="img/artworks-R3zYUL3ZvtbDPhFd-l0G4Xw-t500x500.jpg" alt="img"
                            draggable="false"></div>
                    <h2>Lorem, ipsum.</h2>
                    <span>Lorem ipsum dolor sit.</span>
                </li>
                <li class="card">
                    <div class="img"><img src="img/d2dba878f0afcee3a921bbcc297a68c9.webp" alt="img" draggable="false">
                    </div>
                    <h2>Lorem, ipsum.</h2>
                    <span>Lorem ipsum dolor sit.</span>
                </li>
            </ul>
            <i id="right" class="fa-solid fa-angle-right"></i>
        </div>
    </div>
</section>
<section class="comments container hidden">
<div class="subheading">
        <div class="circle"></div>
        <h3>COMENTARIOS</h3>
        <div class="circle"></div>
    </div>
    <h2>Mira lo que la comunidad habla sobre nosotros</h2>

    <div class="commentscontainer">
        <?php
        $query = "SELECT * FROM contacto";
        $resultado_contactos = mysqli_query($conn, $query);

        while ($row = mysqli_fetch_array($resultado_contactos)) { ?>
        <div class="commentSingle">
            <div class="nameDateUser">
                <p>
                    <?php echo $row['nombre'] . ' ' . $row['apellidoP'] . ' ' . $row['apellidoM'] ?>
                </p>
                <p>
                    <?php echo $row['fecha'] ?>
                </p>
            </div>
            <p>
                <?php echo $row['comentario'] ?>
            </p>
        </div>
    <?php } ?>
    </div>


</section>
<?php include('include/footer.php') ?>