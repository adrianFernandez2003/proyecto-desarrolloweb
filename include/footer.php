<footer id="footer" class="container">
        <div>
            <p>
                <i class="fa-brands fa-twitter"></i>
                <span>/</span>
                <i class="fa-brands fa-facebook"></i>
                <span>/</span>
                <i class="fa-brands fa-instagram"></i>
                <span>/</span>
                <i class="fa-solid fa-globe"></i>
            </p>

        </div>
        <div id="footerAditional">
            <p>Copyright</p>
            <p>SOUNDTASTIC</p>
            <p>Copyright</p>
            <?php $fechaActual = getdate();?>
            <p><?php echo $fechaActual['mday'].'/'.$fechaActual['month'].'/'.$fechaActual['year'];?></p>
        </div>
    </footer>
    <script src="js/script.js"></script>
    <script src="https://kit.fontawesome.com/f08ceb33cd.js" crossorigin="anonymous"></script>
  </body>
</html>
