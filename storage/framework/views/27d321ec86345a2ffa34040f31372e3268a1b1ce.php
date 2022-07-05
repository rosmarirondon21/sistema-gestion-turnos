<?php echo $__env->make('Head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- ========== Start Stylesheet ========== -->
<!-- Plugin css -->
<link href="./assets/css/main.min.css" rel="stylesheet" type="text/css">
<!-- ========== End Stylesheet ========== -->
</head>

<!-- body start -->

<body class="" data-layout-mode="detached" data-layout-color="light" data-topbar-color="dark" data-menu-position="fixed" data-leftbar-color="light" data-leftbar-size="default" data-sidebar-user="true">


    <!-- Begin page -->
    <div id="wrapper">

        <!-- Carga de las vistas del header y menú ingeniero -->
        <?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('menuIngeniero', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

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

                                    <div class="row">
                                        <div class="col-lg-3">
                                            <!-- <button class="btn btn-lg font-16 btn-primary w-100" id="btn-new-event"><i class="mdi mdi-plus-circle-outline"></i> Create New Event</button> -->

                                            <div id="external-events">
                                                <br>
                                                <p class="text-muted">Arrastra y suelta en el calendario</p>
                                                <div class="external-event bg-success" data-class="bg-success">
                                                    <i class="mdi mdi-checkbox-blank-circle me-2 vertical-middle"></i>Disponible
                                                </div>
                                                <div class="external-event bg-danger" data-class="bg-danger">
                                                    <i class="mdi mdi-checkbox-blank-circle me-2 vertical-middle"></i>No disponible
                                                </div>
                                            </div>

                                        </div> <!-- end col-->

                                        <div class="col-lg-9">
                                            <div id="calendar" class="fc fc-media-screen fc-direction-ltr fc-theme-bootstrap" style="height: 400px;">
                                                <div class="fc-header-toolbar fc-toolbar fc-toolbar-ltr">
                                                    <div class="fc-toolbar-chunk">
                                                        <div class="btn-group"><button class="fc-prev-button btn btn-primary" type="button">Anterior</button><button class="fc-next-button btn btn-primary" type="button">SIguiente</button></div><button disabled="" class="fc-today-button btn btn-primary" type="button">Today</button>
                                                    </div>
                                                    <div class="fc-toolbar-chunk">
                                                        <h2 class="fc-toolbar-title">June 2022</h2>
                                                    </div>
                                                    <div class="fc-toolbar-chunk">
                                                        <div class="btn-group"><button class="fc-dayGridMonth-button btn btn-primary active" type="button">Month</button><button class="fc-timeGridWeek-button btn btn-primary" type="button">Week</button><button class="fc-timeGridDay-button btn btn-primary" type="button">Day</button><button class="fc-listMonth-button btn btn-primary" type="button">List</button></div>
                                                    </div>
                                                </div>
                                                <div class="fc-view-harness fc-view-harness-active">
                                                    <div class="fc-daygrid fc-dayGridMonth-view fc-view">
                                                        <table class="fc-scrollgrid table-bordered fc-scrollgrid-liquid">
                                                            <thead>
                                                                <tr class="fc-scrollgrid-section fc-scrollgrid-section-header ">
                                                                    <td>
                                                                        <div class="fc-scroller-harness">
                                                                            <div class="fc-scroller" style="overflow: hidden scroll;">
                                                                                <table class="fc-col-header " style="width: 597px;">
                                                                                    <colgroup></colgroup>
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <th class="fc-col-header-cell fc-day fc-day-sun">
                                                                                                <div class="fc-scrollgrid-sync-inner"><a class="fc-col-header-cell-cushion ">Sun</a></div>
                                                                                            </th>
                                                                                            <th class="fc-col-header-cell fc-day fc-day-mon">
                                                                                                <div class="fc-scrollgrid-sync-inner"><a class="fc-col-header-cell-cushion ">Mon</a></div>
                                                                                            </th>
                                                                                            <th class="fc-col-header-cell fc-day fc-day-tue">
                                                                                                <div class="fc-scrollgrid-sync-inner"><a class="fc-col-header-cell-cushion ">Tue</a></div>
                                                                                            </th>
                                                                                            <th class="fc-col-header-cell fc-day fc-day-wed">
                                                                                                <div class="fc-scrollgrid-sync-inner"><a class="fc-col-header-cell-cushion ">Wed</a></div>
                                                                                            </th>
                                                                                            <th class="fc-col-header-cell fc-day fc-day-thu">
                                                                                                <div class="fc-scrollgrid-sync-inner"><a class="fc-col-header-cell-cushion ">Thu</a></div>
                                                                                            </th>
                                                                                            <th class="fc-col-header-cell fc-day fc-day-fri">
                                                                                                <div class="fc-scrollgrid-sync-inner"><a class="fc-col-header-cell-cushion ">Fri</a></div>
                                                                                            </th>
                                                                                            <th class="fc-col-header-cell fc-day fc-day-sat">
                                                                                                <div class="fc-scrollgrid-sync-inner"><a class="fc-col-header-cell-cushion ">Sat</a></div>
                                                                                            </th>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr class="fc-scrollgrid-section fc-scrollgrid-section-body  fc-scrollgrid-section-liquid">
                                                                    <td>
                                                                        <div class="fc-scroller-harness fc-scroller-harness-liquid">
                                                                            <div class="fc-scroller fc-scroller-liquid-absolute" style="overflow: hidden scroll;">
                                                                                <div class="fc-daygrid-body fc-daygrid-body-unbalanced " style="width: 597px;">
                                                                                    <table class="fc-scrollgrid-sync-table" style="width: 597px; height: 242px;">
                                                                                        <colgroup></colgroup>
                                                                                        <tbody>

                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- end col -->

                                    </div> <!-- end row -->
                                </div> <!-- end card body-->
                            </div> <!-- end card -->

                            <!-- Add New Event MODAL -->
                            <div class="modal fade" id="event-modal" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header py-3 px-4 border-bottom-0 d-block">
                                            <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                                            <h5 class="modal-title" id="modal-title">Event</h5>
                                        </div>
                                        <div class="modal-body px-4 pb-4 pt-0">
                                            <form class="needs-validation" name="event-form" id="form-event" novalidate="">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="mb-3">
                                                            <label class="form-label">Event Name</label>
                                                            <input class="form-control" placeholder="Insert Event Name" type="text" name="title" id="event-title" required="">
                                                            <div class="invalid-feedback">Please provide a valid event name</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="mb-3">
                                                            <label class="form-label">Category</label>
                                                            <select class="form-select" name="category" id="event-category" required="">
                                                                <option value="bg-danger" selected="">Danger</option>
                                                                <option value="bg-success">Success</option>
                                                                <option value="bg-primary">Primary</option>
                                                                <option value="bg-info">Info</option>
                                                                <option value="bg-dark">Dark</option>
                                                                <option value="bg-warning">Warning</option>
                                                            </select>
                                                            <div class="invalid-feedback">Please select a valid event category</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col-md-6 col-4">
                                                        <button type="button" class="btn btn-danger" id="btn-delete-event">Delete</button>
                                                    </div>
                                                    <div class="col-md-6 col-8 text-end">
                                                        <button type="button" class="btn btn-light me-1" data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-success" id="btn-save-event">Save</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div> <!-- end modal-content-->
                                </div> <!-- end modal dialog-->
                            </div>
                            <!-- end modal-->
                        </div>
                        <!-- end col-12 -->
                    </div>
                    <!-- end row -->

                </div> <!-- container -->

            </div>

        </div>

    </div>

    <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
<!-- END body -->

<?php echo $__env->make('scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- plugin js -->
<script src="./assets/js/moment.min.js"></script>
<script src="./assets/js/main.min.js"></script>
<!-- Calendar init -->
<script src="./assets/js/calendar.init.js"></script><?php /**PATH C:\laragon\www\sistema-gestion-turnos\resources\views/horarioIngeniero.blade.php ENDPATH**/ ?>