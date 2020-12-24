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

Route::get('/', 'Login\LoginController@login')->name('login'); //quando acessar a home localhost:8000

Route::get('/admin', 'Login\LoginController@dashboard')->name('admin'); // caso tente acessar o dashboard sem passar pelo login

Route::get('/admin/logout', 'Login\LoginController@logout')->name('logout'); // rota para fazer o logout

Route::post('/login/AutenticarUsuario', 'Login\LoginController@AutenticarUsuario')->name('AutenticarUsuario'); // rota que autentica o usuário


Route::get('/admin/vendas', 'Dashboard\ControllerVendas@index')->name('vendas');