<?php echo $__env->make('Head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<!-- body start -->

<body class="" data-layout-mode="detached" data-layout-color="light" data-topbar-color="dark" data-menu-position="fixed" data-leftbar-color="light" data-leftbar-size="default" data-sidebar-user="true">

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Carga de las vistas del header y menú del administrador -->
        <?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('menuAdministrador', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">

                <div class="container-fluid">
                    <div class="modal fade" id="custom-modal" tabindex="-1" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header bg-light">
                                    <h4 class="modal-title" id="myCenterModalLabel">Datos Usuario</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                                </div>
                                <div class="modal-body p-4">
                                    <form id="formCliente">
                                        <input type="hidden" class="form-control" id="id" name="id">

                                        <div class="mb-3">
                                            <label for="nombre" class="form-label">Nombre <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Simón Rondón">
                                        </div>

                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control letters" id="email" name="email" placeholder="rosmari@gmail.com">
                                        </div>

                                        <div class="mb-3">
                                            <label for="cedula" class="form-label">Cédula <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control letters" id="cedula" name="cedula" placeholder="V9876123">
                                        </div>

                                        <div class="mb-3">
                                            <label for="fechaNacimiento" class="form-label">Fecha nacimiento <span class="text-danger">*</span></label>
                                            <input type="date" class="form-control letters" id="fechaNacimiento" name="fechaNacimiento">
                                        </div>

                                        <div class="mb-3">
                                            <label for="telefono" class="form-label">Teléfono <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control numbers" id="telefono" name="telefono" placeholder="04167991136" maxlength="20">
                                        </div>

                                        <div class="mb-3">
                                            <label for="rol" class="form-label">Rol <span class="text-danger">*</span></label>
                                            <select class="form-select" id="rol" name="rol">
                                                <option value="0" selected>Seleccione</option>
                                                <option value=1>Administrador</option>
                                                <option value=2>Ingeniero</option>
                                            </select>
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
                                            <button type="button" class="btn btn-danger waves-effect waves-light" data-bs-dismiss="modal">Cerrar</button>
                                        </div>
                                    </form>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Inicio</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Usuarios</a></li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Usuarios</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="header-title"></h5>
                                    <div class="row mb-2">

                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-sm-4">
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="text-sm-end mt-2 mt-sm-0">
                                                <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#custom-modal"><i class="mdi mdi-plus-circle me-1" onclick=""></i>Nuevo</button>
                                            </div>
                                        </div><!-- end col-->
                                    </div>
                                    <div class="table-responsive" id="contenedorTable">
                                        <table id="usuariosTable" class="table table-striped table-bordered" style="width:100%">
                                            <thead class="table-light">
                                                <tr>
                                                    <th style="text-align: center; ">
                                                        <div class="th-inner sortable both">ID</div>
                                                        <div class="fht-cell"></div>
                                                    </th>
                                                    <th style="text-align: center; ">
                                                        <div class="th-inner sortable both">Nombre</div>
                                                        <div class="fht-cell"></div>
                                                    </th>
                                                    <th style="text-align: center; ">
                                                        <div class="th-inner sortable both">Email</div>
                                                        <div class="fht-cell"></div>
                                                    </th>
                                                    <th style="text-align: center; ">
                                                        <div class="th-inner sortable both">Cédula</div>
                                                        <div class="fht-cell"></div>
                                                    </th>
                                                    <th style="text-align: center; ">
                                                        <div class="th-inner sortable both">Teléfono</div>
                                                        <div class="fht-cell"></div>
                                                    </th>
                                                    <th style="text-align: center; ">
                                                        <div class="th-inner sortable both">Rol</div>
                                                        <div class="fht-cell"></div>
                                                    </th>
                                                    <th style="text-align: center; ">
                                                        <div class="th-inner sortable both">Estatus</div>
                                                        <div class="fht-cell"></div>
                                                    </th>
                                                    <th style="text-align: center;">
                                                        <div>Acciones
                                                        </div>
                                                        <div class="fht-cell"></div>
                                                    </th>
                                                </tr>
                                            </thead>


                                            <tbody id="tbodyusuarios">
                                                <tr id="">
                                                    <td>1</td>
                                                    <td>David Medina</td>
                                                    <td>davidm@gmail.com</td>
                                                    <td>V21325456</td>
                                                    <td>04167991138</td>
                                                    <td>Administrador</td>
                                                    <td>Activo</td>
                                                    <td style="text-align: center; ">
                                                        <a href="#" id="" class="action-icon" data-bs-toggle="modal" data-bs-target="#custom-modal"><span title="Ver o editar"><i class="mdi mdi-square-edit-outline"></i></span></a>
                                                        <a href="#" id="" class="action-icon"><span title="Eliminar"> <i class="mdi mdi-delete"></i></span></a>
                                                    </td>
                                                </tr>
                                                <tr id="">
                                                    <td>2</td>
                                                    <td>Rosmari Medina</td>
                                                    <td>Rosmari@gmail.com</td>
                                                    <td>V28129951</td>
                                                    <td>04167993456</td>
                                                    <td>Administrador</td>
                                                    <td>Activo</td>
                                                    <td style="text-align: center; ">
                                                        <a href="#" id="" class="action-icon" data-bs-toggle="modal" data-bs-target="#custom-modal"><span title="Ver o editar"><i class="mdi mdi-square-edit-outline"></i></span></a>
                                                        <a href="#" id="" class="action-icon"><span title="Eliminar"> <i class="mdi mdi-delete"></i></span></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div> <!-- end card-->
                        </div>
                    </div>
                    <!-- end row-->
                </div> <!-- container -->

            </div>

        </div>

    </div>

    <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
<!-- END body -->

<?php echo $__env->make('scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<script>
    jQuery("document").ready(function() {
        $("#usuariosTable").DataTable({
            scrollX: true,
            language: {
                url: "http://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json",
            },
        });
    });
</script><?php /**PATH C:\laragon\www\sistema-gestion-turnos\resources\views/usuarios.blade.php ENDPATH**/ ?>