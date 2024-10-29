<!-- Comienzo de la sección de pie de página -->
<footer class="footer spad">
  <div class="container">
   
    <div class="row">
      <div class="col-lg-12">
        <div class="footer__copyright">
          <div class="footer__copyright__text">
          <p>
              Copyright &copy;<script>
                document.write(new Date().getFullYear());
              </script> Todos los derechos reservados CONICA S.A.S </a>
             </p>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- final pie pagina-->

<!-- Js Plugins -->
<script src="<?php echo BASE_URL; ?>public/js/jquery-3.3.1.min.js"></script>
<script src="<?php echo BASE_URL; ?>public/js/bootstrap.min.js"></script>
<script src="<?php echo BASE_URL; ?>public/js/jquery.nice-select.min.js"></script>
<script src="<?php echo BASE_URL; ?>public/js/jquery-ui.min.js"></script>
<script src="<?php echo BASE_URL; ?>public/js/jquery.slicknav.js"></script>
<script src="<?php echo BASE_URL; ?>public/js/mixitup.min.js"></script>
<script src="<?php echo BASE_URL; ?>public/js/owl.carousel.min.js"></script>
<script src="<?php echo BASE_URL; ?>public/js/main.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>public/js/toastify-js.js"></script>
<script>
  const ruta = '<?php echo BASE_URL; ?>';
  function alerta(mensaje, type) {
  let color = type == 1 ? "#46cd93" : "#f24734";
  Toastify({
    text: mensaje,
    duration: 3000,
    close: true,
    gravity: "top", // `superior` o `inferior
    position: "right", // `izquierda`, `centro` o `derecha`.
    stopOnFocus: true, // revienta el rechazo del toast al pasar el ratón por encima
    style: {
      background: color,
      borderRadius: "2rem",
      textTransform: "uppercase",
      fontSize: ".75rem",
    },
    offset: {
      x: "1.5rem", // eje horizontal - puede ser un número o una cadena que indique unidad. ej: '2em'
      y: "1.5rem", // eje vertical - puede ser un número o una cadena que indique unidad. ej: '2em'
    },
    onClick: function () {}, // Callback after click
  }).showToast();
}
</script>
<script src="<?php echo BASE_URL; ?>public/js/sweetalert2.all.min.js"></script>
