<?php include('connection.php')?>
<?php include('include/header.php') ?>
<section class="formContainer container">
    <h2>Contactanos y deja un comentario</h2>

    <div class="form container">
        <form action="create_user.php" method="POST">
            <input class="formVar1" type="text" name="nombre" placeholder="Nombre">
            <div class="lastName">
                <input class="formVar2" type="text" name="apellidoP" placeholder="Apellido paterno">
                <input class="formVar2" type="text" name="apellidoM" placeholder="Apellido materno">
            </div>
                <input class="formVar1" type="email" name="correo" placeholder="correo electronico">
            <input class="formVar1" type="number" name="telefono" placeholder="numero de telefono">
            <label for="textarea">comentarios</label>
            <textarea name="comentario" ></textarea>
            <div class="submitContainer">
                <input type="submit" name="create_user" value="Enviar">
                <?php if(isset($_SESSION['message'])) {?>
                    <div class="alert-<?= $_SESSION['message_type'];?>">
                        <?= $_SESSION['message'];?>
                    </div>
                <?php session_unset(); }?>

            </div>
        </form>

    </div>
</section>
<?php include('include/footer.php') ?>