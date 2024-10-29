<?php include "Views/template/header.php"; ?>

<!-- Breadcrumb Comienzo de la seccion-->
<section class="breadcrumb-section set-bg" data-setbg="<?php echo BASE_URL; ?>public/img/breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Contáctenos</h2>
                    <div class="breadcrumb__option">
                        <a href="<?php echo BASE_URL; ?>">Inicio</a>
                        <span>Contáctenos</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Final de la seccion -->

<!-- Inicio de la Sección de Contacto -->
<section class="contact spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                <div class="contact__widget">
                    <span class="icon_phone"></span>
                    <h4>Teléfono</h4>
                    <p>+607 345 67890</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                <div class="contact__widget">
                    <span class="icon_pin_alt"></span>
                    <h4>Ubicación</h4>
                    <p>Colombia</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                <div class="contact__widget">
                    <span class="icon_clock_alt"></span>
                    <h4>Horario apertura</h4>
                    <p>Lunes -  Viernes</p>
                    <p>8:00 am a 6:00 pm</p>
                    <p>Sabado - Domingo</p>
                    <p>8:00 am a 2:00 pm</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                <div class="contact__widget">
                    <span class="icon_mail_alt"></span>
                    <h4>Correo</h4>
                    <p>ConicaSAS3@gmail.com</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  Final de la Sección de Contacto  -->

<!-- Comienzo del mapa -->
<div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.986657730005!2d-72.50772233206807!3d7.896461988314805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e6645718a71cc4d%3A0xce1e81b5829d655f!2sCl%201%20%233-74%2C%20Barrio%20Lleras%20Restrepo%2C%20C%C3%BAcuta%2C%20Norte%20de%20Santander!5e0!3m2!1ses!2sco!4v1726178695992!5m2!1ses!2scoerpolicy=" height="500" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    <div class="map-inside">
        <i class="icon_pin"></i>
        <div class="inside-widget">
            <h4>Colombia</h4>
            <ul>
                <li>Celular: +57 3152996063</li>
                <li>Ubicación: Cucúta, Norte de Santander</li>
            </ul>
        </div>
    </div>
</div>
<!-- Final del mapa -->



<?php include "Views/template/footer.php"; ?>

</body>

</html>