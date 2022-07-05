<?php echo $__env->make('Head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<!-- body start -->

<body class="" data-layout-mode="detached" data-layout-color="light" data-topbar-color="dark" data-menu-position="fixed" data-leftbar-color="light" data-leftbar-size="default" data-sidebar-user="true">

    <!-- Begin page -->
    <div id="wrapper">
        <!-- Carga de las vistas del header y menú administrador -->
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
                                        <li class="breadcrumb-item"><a href="#">Horarios</a></li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Horarios</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="modal-body p-4">
                                            <div class="mb-3">
                                                <label for="rol" class="form-label">Servicio: <span class="text-danger">*</span></label>
                                                <select class="form-select" id="servicio" name="servicio">
                                                    <option value="0" selected>Seleccione</option>
                                                    <option value=1>Monitoreo de sistema de inventario</option>
                                                    <option value=2>Monitoreo de sistema de facturación</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="rol" class="form-label">Semana: <span class="text-danger">*</span></label>
                                                <select class="form-select" id="servicio" name="servicio">
                                                    <option value="0" selected>Seleccione</option>
                                                    <option value=1>Semana 1 2022</option>
                                                    <option value=2>Semana 2 2022</option>
                                                </select>
                                            </div>
                                            <div class="text-center">
                                                <button type="button" class="btn btn-success waves-effect waves-light" id="btnGuardar">Cargar fechas</button>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end card body-->
                            </div> <!-- end card -->
                        </div>
                        <!-- end col-12 -->
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="table-responsive">
                                            <table class="table table-bordered mb-0" id="dia1">
                                                <thead>
                                                    <tr>
                                                        <th style="background-color: white;text-align: center;">Ingeniero</th>
                                                        <th style="background-color: white;text-align: center;">Nº de turnos asignados</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td style="background-color: #FDCDE7;">Rosmari Rondón</td>
                                                        <td>10</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="background-color: #DBCDFD;">Simón Álvares</td>
                                                        <td>13</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="background-color: white;">Sin asignar</td>
                                                        <td>29</td>
                                                    </tr>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- end row -->
                                </div> <!-- end card body-->
                            </div> <!-- end card -->
                        </div><!-- end col-12 -->
                    </div>
                    <!-- end row -->

                    <div class="row">

                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row" style="margin-bottom: 15px;">
                                        <div class="text-end">
                                            <button type="button" class="btn btn-success waves-effect waves-light" id="btnGuardar">Guardar</button>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="nav flex-column nav-pills nav-pills-tab" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                <a class="nav-link show mb-1 active" id="v-pills-home-tab" data-bs-toggle="pill" href="#v-pills-dia1" role="tab" aria-controls="v-pills-home" aria-selected="false">
                                                    Lunes 06-06-2022</a>
                                                <a class="nav-link mb-1 " id="v-pills-profile-tab" data-bs-toggle="pill" href="#v-pills-dia2" role="tab" aria-controls="v-pills-profile" aria-selected="true">
                                                    Martes 07-06-2022</a>
                                                <a class="nav-link mb-1" id="v-pills-messages-tab" data-bs-toggle="pill" href="#v-pills-dia3" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                                                    Miércoles 08-06-2022</a>
                                                <a class="nav-link mb-1" id="v-pills-settings-tab" data-bs-toggle="pill" href="#v-pills-dia4" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                                                    Jueves 09-06-2022</a>
                                                <a class="nav-link mb-1" id="v-pills-settings-tab" data-bs-toggle="pill" href="#v-pills-dia5" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                                                    Viernes 10-06-2022</a>
                                                <a class="nav-link mb-1" id="v-pills-settings-tab" data-bs-toggle="pill" href="#v-pills-dia6" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                                                    Sábado 11-06-2022</a>
                                                <a class="nav-link mb-1" id="v-pills-settings-tab" data-bs-toggle="pill" href="#v-pills-dia7" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                                                    Domingo 12-06-2022</a>
                                            </div>
                                        </div> <!-- end col-->
                                        <div class="col-sm-9">
                                            <div class="tab-content pt-0">
                                                <div class="tab-pane fade active show" id="v-pills-dia1" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                                    <div class="table-responsive">
                                                        <table class="table table-borderless mb-0" id="dia1">
                                                            <thead>
                                                                <tr>
                                                                    <th style="background-color: #FEFCCF;">Horario</th>
                                                                    <th style="background-color: #DBCDFD;">Simón Álvarez</th>
                                                                    <th style="background-color: #FDCDE7;">Rosmari Rondón</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td style="background-color: #C1FFBC;">19:00 - 20:00</td>
                                                                    <td><input type="checkbox" class="form-check-input"></td>
                                                                    <td><input type="checkbox" class="form-check-input" checked></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="background-color: #C1FFBC;">20:00 - 21:00</td>
                                                                    <td><input type="checkbox" class="form-check-input"></td>
                                                                    <td><input type="checkbox" class="form-check-input" checked></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="background-color: #C1FFBC;">22:00 - 23:00</td>
                                                                    <td><input type="checkbox" class="form-check-input" checked></td>
                                                                    <td><input type="checkbox" class="form-check-input"></td>
                                                                </tr>

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-dia2" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                                    <div class="table-responsive">
                                                        <table class="table table-borderless mb-0" id="dia2">
                                                            <thead>
                                                                <tr>
                                                                    <th style="background-color: #FEFCCF;">Horario</th>
                                                                    <th style="background-color: #DBCDFD;">Simón Álvarez</th>
                                                                    <th style="background-color: #FDCDE7;">Rosmari Rondón</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td style="background-color: #F9BDBD;">19:00 - 20:00</td>
                                                                    <td><input type="checkbox" class="form-check-input"></td>
                                                                    <td><input type="checkbox" class="form-check-input"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="background-color: #F9BDBD;">20:00 - 21:00</td>
                                                                    <td><input type="checkbox" class="form-check-input"></td>
                                                                    <td><input type="checkbox" class="form-check-input"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="background-color: #F9BDBD;">22:00 - 23:00</td>
                                                                    <td><input type="checkbox" class="form-check-input"></td>
                                                                    <td><input type="checkbox" class="form-check-input"></td>
                                                                </tr>

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-dia3" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                                    <div class="table-responsive">
                                                        <table class="table table-borderless mb-0" id="dia1">
                                                            <thead>
                                                                <tr>
                                                                    <th style="background-color: #FEFCCF;">Horario</th>
                                                                    <th style="background-color: #DBCDFD;">Simón Álvarez</th>
                                                                    <th style="background-color: #FDCDE7;">Rosmari Rondón</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td style="background-color: #C1FFBC;">19:00 - 20:00</td>
                                                                    <td><input type="checkbox" class="form-check-input"></td>
                                                                    <td><input type="checkbox" class="form-check-input" checked></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="background-color: #C1FFBC;">20:00 - 21:00</td>
                                                                    <td><input type="checkbox" class="form-check-input"></td>
                                                                    <td><input type="checkbox" class="form-check-input" checked></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="background-color: #C1FFBC;">22:00 - 23:00</td>
                                                                    <td><input type="checkbox" class="form-check-input" checked></td>
                                                                    <td><input type="checkbox" class="form-check-input"></td>
                                                                </tr>

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-dia4" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                                    <div class="table-responsive">
                                                        <table class="table table-borderless mb-0" id="dia2">
                                                            <thead>
                                                                <tr>
                                                                    <th style="background-color: #FEFCCF;">Horario</th>
                                                                    <th style="background-color: #DBCDFD;">Simón Álvarez</th>
                                                                    <th style="background-color: #FDCDE7;">Rosmari Rondón</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td style="background-color: #F9BDBD;">19:00 - 20:00</td>
                                                                    <td><input type="checkbox" class="form-check-input"></td>
                                                                    <td><input type="checkbox" class="form-check-input"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="background-color: #F9BDBD;">20:00 - 21:00</td>
                                                                    <td><input type="checkbox" class="form-check-input"></td>
                                                                    <td><input type="checkbox" class="form-check-input"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="background-color: #F9BDBD;">22:00 - 23:00</td>
                                                                    <td><input type="checkbox" class="form-check-input"></td>
                                                                    <td><input type="checkbox" class="form-check-input"></td>
                                                                </tr>

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-dia5" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                                    <div class="table-responsive">
                                                        <table class="table table-borderless mb-0" id="dia1">
                                                            <thead>
                                                                <tr>
                                                                    <th style="background-color: #FEFCCF;">Horario</th>
                                                                    <th style="background-color: #DBCDFD;">Simón Álvarez</th>
                                                                    <th style="background-color: #FDCDE7;">Rosmari Rondón</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td style="background-color: #C1FFBC;">19:00 - 20:00</td>
                                                                    <td><input type="checkbox" class="form-check-input"></td>
                                                                    <td><input type="checkbox" class="form-check-input" checked></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="background-color: #C1FFBC;">20:00 - 21:00</td>
                                                                    <td><input type="checkbox" class="form-check-input"></td>
                                                                    <td><input type="checkbox" class="form-check-input" checked></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="background-color: #C1FFBC;">22:00 - 23:00</td>
                                                                    <td><input type="checkbox" class="form-check-input" checked></td>
                                                                    <td><input type="checkbox" class="form-check-input"></td>
                                                                </tr>

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-dia6" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                                    <div class="table-responsive">
                                                        <table class="table table-borderless mb-0" id="dia1">
                                                            <thead>
                                                                <tr>
                                                                    <th style="background-color: #FEFCCF;">Horario</th>
                                                                    <th style="background-color: #DBCDFD;">Simón Álvarez</th>
                                                                    <th style="background-color: #FDCDE7;">Rosmari Rondón</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td style="background-color: #C1FFBC;">19:00 - 20:00</td>
                                                                    <td><input type="checkbox" class="form-check-input"></td>
                                                                    <td><input type="checkbox" class="form-check-input" checked></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="background-color: #C1FFBC;">20:00 - 21:00</td>
                                                                    <td><input type="checkbox" class="form-check-input"></td>
                                                                    <td><input type="checkbox" class="form-check-input" checked></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="background-color: #C1FFBC;">22:00 - 23:00</td>
                                                                    <td><input type="checkbox" class="form-check-input" checked></td>
                                                                    <td><input type="checkbox" class="form-check-input"></td>
                                                                </tr>

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-dia7" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                                    <div class="table-responsive">
                                                        <table class="table table-borderless mb-0" id="dia1">
                                                            <thead>
                                                                <tr>
                                                                    <th style="background-color: #FEFCCF;">Horario</th>
                                                                    <th style="background-color: #DBCDFD;">Simón Álvarez</th>
                                                                    <th style="background-color: #FDCDE7;">Rosmari Rondón</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td style="background-color: #C1FFBC;">19:00 - 20:00</td>
                                                                    <td><input type="checkbox" class="form-check-input"></td>
                                                                    <td><input type="checkbox" class="form-check-input" checked></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="background-color: #C1FFBC;">20:00 - 21:00</td>
                                                                    <td><input type="checkbox" class="form-check-input"></td>
                                                                    <td><input type="checkbox" class="form-check-input" checked></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="background-color: #C1FFBC;">22:00 - 23:00</td>
                                                                    <td><input type="checkbox" class="form-check-input" checked></td>
                                                                    <td><input type="checkbox" class="form-check-input"></td>
                                                                </tr>

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>

                                            </div>
                                        </div> <!-- end col-->
                                    </div>
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

<?php echo $__env->make('scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\sistema-gestion-turnos\resources\views/horarios.blade.php ENDPATH**/ ?>