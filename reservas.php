<?php
// Escribir lógica en script-reservas.php
include('./scripts-php/script-reservas.php');
?>
<?php
     include('./partes/head.php')
?>

    <main class="main-content">
        <h2>RESERVAS</h2>
       
        <!-- span mensaje cantidad peronas -->
        <span id="msg-cantidad" class="gui-message-w__length" role="alert">Por la mañana un máximo de 4 personas.</span>
        <?php
            if($reservado){
        ?>
        <div class="gui-message__success" role="alert">
            <h4>
                Gracias por su reserva <?php echo $nombre ?>
            </h4>
            <p>
                Dia: <?php echo $fecha ?>
            </p>
            <p>
                Hora: <?php echo $hora ?> hs.
            </p>
            <p>
                Cantidad personas: <?php echo $cantidad ?>
            </p>
            <div>
                Te esperamos!
            </div>
        </div>
        <?php
        }else
         {
        ?>
        <section class="reserva-seccion">
        <p>Reservá tu mesa</p>
            <img src="./assets/images/imagen-reserva.jpg" alt="Mesa de cafe">
            <form actiom="" method="POST" id="form" class="reserva-form">
                <label class="reserva-form__label" for="fecha">
                    <span class="reserva-form__label-text">Fecha</span>
                    <input class="reserva-form__components" type="date" required id="fecha" name="fecha">
                </label>
                <label class="reserva-form__label" for="hora">
                    <span class="reserva-form__label-text">Hora</span>
                    <select class="reserva-form__components" required id="hora" name="hora">
                        <optgroup label="Mañana">
                            <option value="9">9:00</option>
                            <option value="10">10:00</option>
                            <option value="11">11:00</option>
                        </optgroup>
                        <optgroup label="Tarde">
                            <option value="16">16:00</option>
                            <option value="17">17:00</option>
                            <option value="18">18:00</option>
                        </optgroup>
                    </select>
                </label>
                <label class="reserva-form__label" for="cantidad">
                    <span class="reserva-form__label-text">Cantidad de personas</span>
                    <input class="reserva-form__components" min="1" type="number" required id="cantidad" name="cantidad">
                </label>
                <label class="reserva-form__label" for="nombre">
                    <span class="reserva-form__label-text">A nombre de</span>
                    <input class="reserva-form__components" type="text" min="4" required id="nombre" name="nombre">
                </label>
                <label class="reserva-form__label" for="email">
                    <span class="reserva-form__label-text">Email</span>
                    <input class="reserva-form__components" type="text" required id="email" nombre="email">
                </label>
                <button class="reserva-form__submit" type="submit" id="btn-reserva" name="btn-reserva">Reservar mesa</button>
            </form>

        </section>
        <!-- script validacion js -->
        <script src="./assets/js/validar-formulario.js"></script>
        <?php
            }
        ?>
    </main>
    <?php
        include('./partes/footer.php')
    ?>