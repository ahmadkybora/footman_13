<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

$router = new AltoRouter;
/*
|
| // auth routes
|
*/
$router->map('POST', '/api/login', 'App\Http\Controllers\Auth\AuthController@login', 'login');
$router->map('POST', '/api/register', 'App\Http\Controllers\Auth\AuthController@register', 'register');
$router->map('POST', '/api/logout', 'App\Http\Controllers\Auth\AuthController@logout', 'logout');

$router->map('GET', '/api/panel/users', 'App\Http\Controllers\Panel\UserController@index', 'users-index');
$router->map('POST', '/api/panel/users', 'App\Http\Controllers\Panel\UserController@create', 'users-create');