 <!-- Topbar Start -->
 <div class="navbar-custom">
     <div class="container-fluid">
         <ul class="list-unstyled topnav-menu float-end mb-0">
             <li class="dropdown notification-list topbar-dropdown">
                 <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                     <img src="./assets/img/user.png" alt="user" class="rounded-circle">
                     <span class="pro-user-name ms-1">
                         nombreUsuario
                     </span>
                     <i class="mdi mdi-chevron-down"></i>
                 </a>
                 <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                     <!-- item-->
                     <a href="/" class="dropdown-item notify-item" onclick="cerrarSesion()">
                         <i class="fe-log-out"></i>
                         <span>Cerrar sesión</span>
                     </a>

                 </div>
             </li>

         </ul>
         <!-- LOGO -->
         <div class="logo-box">
             <a href="#" class="logo logo-light text-center">
                 <span class="logo-sm">
                     <img src="./assets/img/logo-sm.png" alt="Logo" height="45">
                 </span>
                 <span class="logo-lg">
                     <img src="./assets/img/logo.png" alt="Logo" height="45">
                 </span>
             </a>
         </div>

         <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
             <li>
                 <button class="button-menu-mobile waves-effect waves-light">
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">
                         <line x1="3" y1="12" x2="21" y2="12"></line>
                         <line x1="3" y1="6" x2="21" y2="6"></line>
                         <line x1="3" y1="18" x2="21" y2="18"></line>
                     </svg>
                 </button>
             </li>

             <li>
                 <!-- Mobile menu toggle (Horizontal Layout)-->
                 <a class="navbar-toggle nav-link" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                     <div class="lines">
                         <span></span>
                         <span></span>
                         <span></span>
                     </div>
                 </a>
                 <!-- End mobile menu toggle-->
             </li>

             <li class="dropdown dropdown-mega d-none d-xl-block">
             </li>
         </ul>
         <div class="clearfix"></div>
     </div>
 </div>
 <!-- end Topbar --><?php /**PATH C:\laragon\www\sistema-gestion-turnos\resources\views/header.blade.php ENDPATH**/ ?>