    <!-- ========== Menú para usuario regular o ingeniero========== -->

    <!-- ========== Left Sidebar Start ========== -->
    <div class="left-side-menu">

        <div class="h-100 menuitem-active" data-simplebar="init">
            <div class="simplebar-wrapper" style="margin: 0px;">
                <div class="simplebar-height-auto-observer-wrapper">
                    <div class="simplebar-height-auto-observer"></div>
                </div>
                <div class="simplebar-mask">
                    <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                        <div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden scroll;">
                            <div class="simplebar-content" style="padding: 0px;">

                                <!-- User box -->
                                <div class="user-box text-center">
                                    <img src="./assets/img/user.png" alt="user" title="user" class="rounded-circle avatar-md">
                                    <div class="dropdown">
                                        <a href="javascript: void(0);" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block" data-bs-toggle="dropdown">nombreUsuario</a>
                                        <div class="dropdown-menu user-pro-dropdown">
                                            <!-- item-->
                                            <!-- item-->
                                            <a href="/" class="dropdown-item notify-item" onclick="cerrarSesion()">
                                                <i class="fe-log-out me-1"></i>
                                                <span>Cerrar Sesión</span>
                                            </a>

                                        </div>
                                    </div>
                                </div>

                                <!--- Sidemenu -->
                                <div id="sidebar-menu">
                                    <ul id="side-menu">
                                        <li class="<?php echo $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"] == $_SERVER["HTTP_HOST"] . '/perfilIngeniero' ? 'menuitem-active' : '' ?>">
                                            <a href="/perfilIngeniero">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay">
                                                    <path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1">
                                                    </path>
                                                    <polygon points="12 15 17 21 7 21 12 15"></polygon>
                                                </svg>
                                                <span> Dashboard </span>
                                            </a>
                                        </li>

                                        <li class="<?php echo $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"] == $_SERVER["HTTP_HOST"] . '/horarioIngeniero' ? 'menuitem-active' : '' ?>">
                                            <a href="/horarioIngeniero">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-briefcase">
                                                    <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                                                    <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                                                </svg>
                                                <span> Horarios </span>
                                            </a>
                                        </li>
                                        <li class="<?php echo $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"] == $_SERVER["HTTP_HOST"] . '/cambioClave' ? 'menuitem-active' : '' ?>">
                                            <a href="/cambioClave">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock">
                                                    <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                                                    <path d="M21 2l-2 2m-7.61 7.61a5.5 5.5 0 1 1-7.778 7.778 5.5 5.5 0 0 1 7.777-7.777zm0 0L15.5 7.5m0 0l3 3L22 7l-3-3m-3.5 3.5L19 4"></path>
                                                </svg>
                                                <span> Cambio de contraseña </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- End Sidebar -->
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <!-- Sidebar -left -->

        </div>
    </div>
    <!-- Left Sidebar End -->