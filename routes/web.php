<?php

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

/*
+---------------------------
| VISTAS
+---------------------------
*/

/* Route::get('/', function () {
    return view('home');
}); */


Route::get('/','WeatherController@index');


Route::get('/login', function () {
    return view('LoginRegistro/login');
});


Route::get('/registro', function () {
    return view('LoginRegistro/registro');
});
/*
+------------
| Vista clientes
*/ 
Route::get('/cliente', function () {
    return view('VistaCliente/cliente');
});

/** RUTAS PARA PROBAR EL LONGIN **/
/**
 * ESTE METODO SE COMUNICA CON EL LOGINCONTROLLER EN EL METODO LOGIN
 * SE NECESITA MANDAR: email y password en el REQUEST
 */
Route::post('Login', 'LogInController@Login');

/**
 * METODO QUE SE COMUNICOA CON USER CONTROLLER EN EL METODO REGISTRACLIENTE
 * SE NECESITA MANDAR: nombre, email y password
 */
Route::post('Registrar', 'UserController@RegistrarCliente');

/*
+------------
| VISTA DE ADMINISTRACION
*/ 
Route::get('/Admin', 'LogInController@admin'); 

Route::get('/Crear_Empleado', function(){
    return view('VistaAdmin/nuevoEmpleado');
});
Route::get('/Lista_Empleado', function(){
    return view('VistaAdmin/listaEmpleado');
});
 

/*
 +----------------------------
 | Clientes
 -----------------------------
 */
/* RUTA PARA REGISTAR PRODUCTOS */
Route::post('Nuevo_Empleado/', 'EmpleadoController@RegistrarEmpleado');
/* RUTA PARA PODER ELIMINAR UN PRODUCTO */
Route::get('Eliminar_Empleado/{id}', 'EmpleadoController@eliminar');
/* RUTA PARA PODER LISTAR LOS PRODUCTOS */
//Route::get('/Empleados', 'EmpleadoController@ListarEmpleados')->name('get_empleados');

Route::get('/Empleados','EmpleadoController@index');
 



/*
 +----------------------------
 | Clientes
 -----------------------------
 */
/* RUTA PARA REGISTAR PRODUCTOS */
Route::post('Nuevo_Empleado/', 'EmpleadoController@RegistrarEmpleado');
/* RUTA PARA PODER ELIMINAR UN PRODUCTO */
Route::get('Eliminar_Empleado/{id}', 'EmpleadoController@eliminar');
/* RUTA PARA PODER LISTAR LOS PRODUCTOS */
//Route::get('/Empleados', 'EmpleadoController@ListarEmpleados')->name('get_empleados');
