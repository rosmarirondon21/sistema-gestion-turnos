<?php echo $__env->make('Head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<!-- body start -->

<body class="" data-layout-mode="detached" data-layout-color="light" data-topbar-color="dark" data-menu-position="fixed" data-leftbar-color="light" data-leftbar-size="default" data-sidebar-user="true">

    <!-- Begin page -->
    <div id="wrapper">
        <!-- Carga de las vistas del header y menú Administrador -->
        <?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('menuAdministrador', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">

                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                                        <li class="breadcrumb-item"><a href="#">Cambio de contraseña</a></li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Cambio de contraseña</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">

                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="header-title"></h5>
                                    <div class="row mb-2">

                                    </div>
                                    <form id="formCambioClave">
                                        <input type="hidden" class="form-control" id="id" name="id">

                                        <div class="mb-3">
                                            <label for="contrasenaActual" class="form-label">Contraseña actual<span class="text-danger">*</span></label>
                                            <input type="password" class="form-control" id="contrasenaActual" name="contrasenaActual">
                                        </div>

                                        <div class="mb-3">
                                            <label for="contrasena" class="form-label">Contraseña <span class="text-danger">*</span></label>
                                            <input type="password" class="form-control" id="contrasena" name="contrasena">
                                        </div>

                                        <div class="mb-3">
                                            <label for="confirmarContrasena" class="form-label">Confirmar contraseña <span class="text-danger">*</span></label>
                                            <input type="password" class="form-control" id="confirmarContrasena" name="confirmarContrasena">
                                        </div>

                                        <div class="text-end">
                                            <button type="button" class="btn btn-success waves-effect waves-light" id="btnGuardar">Guardar</button>
                                            <button type="button" class="btn btn-danger waves-effect waves-light" data-bs-dismiss="modal">Cancelar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                </div> <!-- container -->
            </div>
        </div>
    </div>

    <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
<!-- END body -->

<?php echo $__env->make('scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\sistema-gestion-turnos\resources\views/cambioClave.blade.php ENDPATH**/ ?>