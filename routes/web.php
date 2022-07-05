<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/**Ruta de vista principal **/
Route::get('/', function () {
    return view('index');
});

/**Ruta de login **/
Route::get('login', function () {
    return view('login');
});

/**Ruta de dashboard del usuario administrador **/
Route::get('perfilAdministrador', function () {
    return view('perfilAdministrador');
});

/**Ruta de dashboard del usuario ingeniero **/
Route::get('perfilIngeniero', function () {
    return view('perfilIngeniero');
});

/**Ruta de carga de disponibilidad/ocupación de usuario ingeniero **/
Route::get('horarioIngeniero', function () {
    return view('horarioIngeniero');
});

/**Ruta de gestión de horarios de usuario administrador **/
Route::get('horarios', function () {
    return view('horarios');
});

/**Ruta de gestión de usuarios para usuario administrador **/
Route::get('usuarios', function () {
    return view('usuarios');
});

/**Ruta para cambio de contraseña de usuario ingeniero **/
Route::get('cambioClave', function () {
    return view('cambioClave');
});

