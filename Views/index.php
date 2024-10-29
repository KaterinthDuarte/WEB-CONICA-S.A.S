
<!-- Pagina principal de inicio -->

<?php include "Views/template/header.php"; ?>

<!-- seccion informacion conica-->
<section class="featured spad">
<div class="container-fluid py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 py-0 py-lg-5">
                    <center><h1 class="mb-3">NUESTRA MISIÓN</h1></center>
                    <h5 class="mb-3" style="text-align: center;">CONICA S.A.S</h5>
                    <p style="text-align: justify;">Comida orgánica para animales de granja es una organización que produce alimentos de calidad que cubren las necesidades de los productores, enmarcados en el cuidado del medio ambiente, garantizando la nutrición animal y la optimización de los recursos.</p>
                    
                </div>
                <div class="col-lg-4 py-5 py-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="public/img/about.png" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4 py-0 py-lg-5">
                    <center><h1 class="mb-3">NUESTRA VISIÓN</h1></center>
                    <h5 class="mb-3" style="text-align: center;">CONICA S.A.S</h5>
                    <p style="text-align: justify;">Ser líderes en la producción y comercialización de alimentos balanceados, logrando así un mejor posicionamiento en el futuro; con una marca que distinga la calidad de sus productos, con una productividad altamente efectiva y vanguardista cubriendo los estándares de calidad con precios adecuados.</p>
                </div>
            </div>
        </div>
</section>
<!-- final conica -->


<!-- Inicio de la sección de productos más recientes y agotados -->
<section class="latest-product spad">
    <div class="container">
        <div class="row">

        <div class="col-lg-4 col-md-6">
                
                </div>

                
            <div class="col-lg-4 col-md-6">
                <div class="latest-product__text">
                    <h4>Últimos productos</h4>
                    <div class="latest-product__slider owl-carousel">
                        <?php
                        $productos = $data['destacados']; // Aquí deberías tener tus productos desde la consulta SQL
                        shuffle($productos); // Reordena los productos aleatoriamente
                        $count = 0;
                        foreach ($productos as $producto) {
                            if ($count % 3 === 0) {
                                echo '<div class="latest-prdouct__slider__item">';
                            }
                            echo '<a href="#" class="latest-product__item">';
                            echo '<div class="latest-product__item__pic">';
                            echo '<img src="' . BASE_URL . 'public/img/productos/' . $producto['imagen'] . '" alt="">';
                            echo '</div>';
                            echo '<div class="latest-product__item__text">';
                            echo '<h6>' . $producto['nombre'] . '</h6>';
                            echo '<span>$' . $producto['precio'] . '</span>';
                            echo '</div>';
                            echo '</a>';
                            if ($count % 3 === 0) {
                                echo '</div>';
                            }
                            $count++;
                        }
                        if ($count % 3 !== 0) {
                        }
                        ?>
                    </div>
                </div>
            </div>

           

            <div class="col-lg-4 col-md-6">
                
            </div>
            
        </div>
    </div>
</section>
<!-- final seccion -->

<?php include "Views/template/footer.php"; ?>

<script src="<?php echo BASE_URL; ?>public/js/cart.js"></script>

</body>

</html>