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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::resource('empleados', App\Http\Controllers\EmpleadosController::class);


Route::resource('empresas', App\Http\Controllers\EmpresaController::class);


Route::resource('precios', App\Http\Controllers\PreciosController::class);


Route::resource('clientes', App\Http\Controllers\ClientesController::class);


Route::resource('proveedors', App\Http\Controllers\ProveedorController::class);


Route::resource('vehiculos', App\Http\Controllers\VehiculosController::class);


Route::resource('usuarios', App\Http\Controllers\UsuariosController::class);

Route::post('change_password', 'App\Http\Controllers\UsuariosController@change_password')-> name('change_password');

Route::get('change_password_profile', 'App\Http\Controllers\UsuariosController@change_password_profile')->name('change_password_profile');

Route::post('change_password_profile', 'App\Http\Controllers\UsuariosController@change_password_profile')->name('change_password_profile');

Route::resource('inventarios', App\Http\Controllers\InventarioController::class);
Route::post('/inventarios/create/busca_vehiculos','App\Http\Controllers\VehiculosController@busca_vehiculos')
->name('busca_vehiculos');

Route::post('/inventarios/create/GetAutoById','App\Http\Controllers\VehiculosController@GetAutoById')
->name('getautobyid');

Route::post('/inventarios/{id}/edit/busca_vehiculos','App\Http\Controllers\VehiculosController@busca_vehiculos')
->name('busca_vehiculos');

Route::post('/inventarios/{id}/edit/GetAutoById','App\Http\Controllers\VehiculosController@GetAutoById')
->name('getautobyid');

Route::post('/inventarios/destroy_dt','App\Http\Controllers\InventarioController@destroy_dt')
->name('destroy_dt');




Route::resource('clinicas', App\Http\Controllers\ClinicaController::class);


Route::resource('doctores', App\Http\Controllers\DoctoresController::class);


Route::resource('pacientes', App\Http\Controllers\PacientesController::class);


Route::resource('salas', App\Http\Controllers\SalasController::class);
