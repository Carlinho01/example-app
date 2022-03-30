<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloWorld;
use App\Http\Controllers\EmpleadoController;

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
    return view ('welcome');
});

//Route::get('hello', [HelloWorld::class,'sayHello']);
Route::get('/helloworld', [HelloWorld::class,'sayHello']);

/*Route::get('/empleado', function () {
    return view ('empleado.index');
});

Route::get('/empleado/create',[EmpleadoController::class,'create']);
*/
Route::resource('empleado', EmpleadoController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
