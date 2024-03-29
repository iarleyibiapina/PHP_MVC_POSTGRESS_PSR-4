<?php

use App\Http\Route;
use App\Core\Core;
// exemplo de rotas

Route::get('/', 'HomeController@index');
Route::post('/create', 'HomeController@create');
Route::get('/users/{id}/show', 'HomeController@show');
Route::put('/create', 'HomeController@update');
Route::delete('/create', 'HomeController@delete');

// 'Executa' as rotas
Core::dispath(Route::getRoutes());
