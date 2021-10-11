<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->post('/home', function () use ($router) {
    return "hello laravel";
});

$router->post('/welcome','UserController@index');
$router->post('/result','DeviceController@store');
$router->post('/list','DeviceController@show');
$router->post('/list/{id}','DeviceController@edit');
$router->post('/list-update/{id}','DeviceController@update');
$router->post('/list-delete/{id}','DeviceController@destroy');