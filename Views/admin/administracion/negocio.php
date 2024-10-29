<?php include_once 'Views/template/header-admin.php'; ?>

<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <h4 class="page-title m-0">Negocio</h4>
                </div>
                <!-- Final -->
            </div>
            <!-- fin de línea -->
        </div>
        <!-- Final pagina-titulo-box -->
    </div>
</div>
<!-- Final de pagina de titulo -->

<div class="card">
    <div class="card-body">
        <form id="frmRegistro" autocomplete="off">
            <input type="hidden" id="id" name="id" value="<?php echo $data['negocio']['id']; ?>">
            <div class="row mb-3">
                <div class="col-md-6 mb-3">
                    <label for="nombre">Nombre <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-list"></i></span>
                        <input class="form-control" type="text" name="nombre" id="nombre" value="<?php echo $data['negocio']['nombre']; ?>" placeholder="Nombre">
                    </div>
                    <span id="errorNombre" class="text-danger"></span>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="telefono">Teléfono <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                        <input class="form-control" type="number" name="telefono" id="telefono" value="<?php echo $data['negocio']['telefono']; ?>" placeholder="Telefono">
                    </div>
                    <span id="errorTelefono" class="text-danger"></span>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="correo">Correo</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                        <input class="form-control" type="text" name="correo" id="correo" value="<?php echo $data['negocio']['correo']; ?>" placeholder="Correo Electrónico">
                    </div>
                    <span id="errorCorreo" class="text-danger"></span>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="whatsapp">WhatsApp <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fab fa-whatsapp-square"></i></span>
                        <input class="form-control" type="number" name="whatsapp" id="whatsapp" value="<?php echo $data['negocio']['whatsapp']; ?>" placeholder="WhatsApp">
                    </div>
                    <span id="errorWhatsApp" class="text-danger"></span>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="host_smtp">Host SMTP <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                        <input class="form-control" type="text" name="host_smtp" id="host_smtp" value="<?php echo $data['negocio']['host_smtp']; ?>" placeholder="Host Smtp">
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="user_smtp">User SMTP <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                        <input class="form-control" type="text" name="user_smtp" id="user_smtp" value="<?php echo $data['negocio']['user_smtp']; ?>" placeholder="User Smtp">
                    </div>
                </div>
                <
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="direccion">Dirreción <span class="text-danger">*</span></label>
                        <textarea id="direccion" class="form-control" name="direccion" rows="3" placeholder="Dirección"><?php echo $data['negocio']['direccion']; ?></textarea>
                    </div>
                    <span id="errorDireccion" class="text-danger"></span>
                </div>
            </div>
            
        </form>
    </div>
</div>

<?php include_once 'Views/template/footer-admin.php'; ?>

<script src="<?php echo BASE_URL . 'public/admin/js/page/negocio.js'; ?>"></script>

</body>

</html>