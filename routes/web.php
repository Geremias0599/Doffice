<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\CustomAuthController;

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

Route::resource('/productos','App\Http\Controllers\ProductosController');


Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');

Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
//Route::post('custom-login', [ProductosController::class, 'index'])->name('login.custom'); 

Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

//routas de producto controller
Route::get('productos/create', [ProductosController::class, 'create'])->name('productos-create'); 
Route::get('productos', [ProductosController::class, 'index'])->name('productos-edit'); 
Route::get('productosShow', [ProductosController::class, 'show'])->name('productos-show'); 

Route::get('AddProductoExistente', [ProductosController::class, 'invocarVistaSuma'])->name('productos-AddCantidad'); 

//vistas para la entrada de productos
Route::get('/addCantidad/{id}', [ProductosController::class, 'addCantidad'])->name('addCantidad');
Route::put('/addFinalsuma/{producto}', [ProductosController::class, 'masProducto'])->name('addFinalsuma');

//vistas para la salida de productos
Route::get('/restarCantidad/{id}', [ProductosController::class, 'restarCantidad'])->name('restarCantidad');
Route::put('/addFinalResta/{producto}', [ProductosController::class, 'menosProducto'])->name('addFinalResta');