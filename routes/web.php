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
    return view('principal');
});



Route::get('informativo', function () {
    return view('administracion.informacion') ;
});


Route::get('clientes', function () {
    return view('clientes.clientela');
});


Route::get('clientes/preferenciales', function () {

    return view('clientes.preferenciales.favoritos');
});






Route::get('ofertas', function () {
    return view('promociones');
});

Route::get('productos', function () {
    return view('inventario.productos');

});




Route::get('papeleria', function () {
    return view('inventario.papeleria',array('id'=>'1','nombre'=>'Cuadernos','precio'=>'30000'));
});

Route::get('servicios/{descripcion}', function ($descripcion) {
    return "Descripcion : {$descripcion}";




});



/*
Route::get('productos/{id}', function ($id) {
    return "Producto :" .$id;
})->where('id','[0-9 ]+');

Route::get('productos/hogar', function () {
    return "Producto Hogar ";
});
*/


Route::get('productos/hogar', function () {
    return 'Productos del hogar';
});

Route::get('productos/{id}/{descripcion?}', function ($id,$descripcion  = null) {


    if($descripcion){

        return "Productos con id: {$id}, cuya descripcion es :{$descripcion}";

    }else{

        return "producto con id: {$id}, sin descripcion";
    }
});



