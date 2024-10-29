<?php include "Views/template/header.php"; ?>

<!-- Breadcrumb Inicio de la sección  -->
<section class="breadcrumb-section set-bg" data-setbg="<?php echo BASE_URL; ?>public/img/breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Carrito</h2>
                    <div class="breadcrumb__option">
                        <a href="<?php echo BASE_URL; ?>">Inicio</a>
                        <span>Carrito</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Final de la sección -->

<!-- Inicio de la sección del carro de la compra -->
<section class="shoping-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="shoping__cart__table">
                    <table>
                        <thead>
                            <tr>
                                <th class="shoping__product">Producto</th>
                                <th>Precio</th>
                                <th>Cantidad</th>
                                <th>Total</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody id="tblCarrito">
                        </tbody>
                    </table>
                </div>
                <div class="shoping__cart__btns">
                    <a href="#" class="primary-btn cart-btn cart-btn-right" id="botonVaciar"><span class="icon_loading"></span>
                        Vaciar carrito</a>
                </div>
            </div>
            <div class="col-lg-4">
               
                <div class="shoping__checkout">
                    <h5>Precio total</h5>
                    <ul>
                        <li>Total <span id="total">$454.980</span></li>
                    </ul>
                    <a href="<?php echo BASE_URL . 'principal/order'; ?>" class="primary-btn mb-2">TARJETA</a> 
                    <input type="hidden" id="whatsapp-negocio" value="<?php echo $data['negocio']['whatsapp']; ?>">
                    <a href="#" class="btn btn-success btn-block" id="carrito-whatsapp">WHATSAPP</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Final sección del carro de la compra ->

<?php include "Views/template/footer.php"; ?>

<script src="<?php echo BASE_URL; ?>public/js/carrito.js"></script>
</body>

</html>