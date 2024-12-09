<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Models\Usuario;

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

// index routing via Route feature
Route::redirect('/', '/Dashboard');


/*
|--------------------------------------------------------------------------
| Dashboards
|--------------------------------------------------------------------------
|
*/
Route::view('/Dashboard', 'dashboard');

/*
|--------------------------------------------------------------------------
| Usuarios
|--------------------------------------------------------------------------
|
*/
Route::prefix('Usuario')->group(function () {
    Route::get('/index', [UsuarioController::class, 'index']);
    Route::get('/create', [UsuarioController::class, 'create']); // Mostrar lista de usuarios
    
    //Route::view('Login', 'usuarios/login');
    /*
    Route::view('Register', 'usuarios/register');
    Route::view('ForgotPassword', 'usuarios/forgot_password');
    Route::view('ResetPassword', 'usuarios/reset_password');
    Route::view('Editable_rows', 'usuarios/editable_rows');
    Route::view('Settings', 'usuarios/settings');
    */
});

//Route::get('usuario', function(){
   // return view('usuario.index');
//});
//Route::get('/usuario/create',[UsuarioController::class,'create']);


//Route::resource('usuario',UsuarioController::class);

/*
|--------------------------------------------------------------------------
| Productos
|--------------------------------------------------------------------------
|
*/
Route::prefix('Product')->group(function () {
    Route::view('/', 'product/index');
    Route::view('', 'product/detail');

    //CATEGORIA
    Route::view('Categoria/Aperitivos/Aperi_List', 'product/categoria/aperitivos/aperi_list');
    Route::view('Categoria/Aguardiente/Aguard_List', 'product/categoria/aguardiente/aguard_list');
    Route::view('Categoria/Cerveza/Lata/Lata_List', 'product/categoria/cerveza/lata/lata_list');
    Route::view('Categoria/Cerveza/Vidrio/Vidrio_List', 'product/categoria/cerveza/vidrio/vidrio_list');
    Route::view('Categoria/Comestibles/Come_List', 'product/categoria/comestibles/come_list');
    Route::view('Categoria/Energizantes/Energi_List', 'product/categoria/energizantes/energi_list');
    Route::view('Categoria/Gaseosa_Jugo/Gj_List', 'product/categoria/gaseosa_jugo/gj_list');
    Route::view('Categoria/Otros_productos/Otro_List', 'product/categoria/otros_producos/otro_list');
    Route::view('Categoria/Ron/Ron_List', 'product/categoria/ron/ron_list');
    Route::view('Categoria/Tequila/Teq_List', 'product/categoria/tequila/teq_list');
    Route::view('Categoria/Vino_Champ/Vc_List', 'product/categoria/vino_champ/vc_list');
    Route::view('Categoria/Vodka/Vodka_List', 'product/categoria/vodka/vodka_list');
    Route::view('Categoria/Whisky/whisky_List', 'product/categoria/whisky/whisky_list');

    //CREAR PRODUCTO
    route::view('', 'product/validation');
});
/*
|--------------------------------------------------------------------------
| Ventas
|--------------------------------------------------------------------------
|
*/
Route::prefix('Ventas')->group(function () {

    Route::view('List', 'ventas/list');
    
});
/*
|--------------------------------------------------------------------------
| Compra
|--------------------------------------------------------------------------
|
*/
Route::prefix('Compras')->group(function () {
    Route::view('List', 'compras/list');
});
/*
|--------------------------------------------------------------------------
| Proveedores
|--------------------------------------------------------------------------
|
*/
Route::prefix('Proveedores')->group(function () {
    Route::view('List', 'proveedores/list');

});
