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

use Illuminate\Support\Facades\Mail;

Route::get('/', 'Site\IndexController@index')->name('site.index');;

Route::get('contato', 'Site\IndexController@contato')->name('site.contato');

Route::get('offline', 'Site\IndexController@offline')->name('site.offline');

Route::post('contato', 'Site\IndexController@enviaEmail')->name('site.contato.enviaemail');

//URL::forceScheme('https');