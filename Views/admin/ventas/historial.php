<?php include_once 'Views/template/header-admin.php'; ?>

<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <h4 class="page-title m-0">Historial de ventas</h4>
                </div>
                <!-- Final -->
            </div>
            <!-- fin de línea -->
        </div>
        <!-- Final pagina-titulo-box -->
    </div>
</div>
<!-- Final titulo de pagina -->

<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover align-middle" style="width: 100%;" id="tblHistorial">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Productos</th>
                        <th>Fecha</th>
                        <th>Cliente</th>
                        <th>Monto</th>
                        <th>Estado</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include_once 'Views/template/footer-admin.php'; ?>

<script src="<?php echo BASE_URL . 'public/admin/js/page/historial_ventas.js'; ?>"></script>

</body>

</html>