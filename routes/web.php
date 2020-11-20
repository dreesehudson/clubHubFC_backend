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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

//create each object type
$router->post('/register','UsersController@register');
$router->post('/User', 'UsersController@create');
$router->post('/PlayerRegistration', 'PlayerController@create');


//get list of each object type
$router->get('/Users', 'UsersController@index');
$router->get('/Players', 'PlayerController@index');
$router->get('/Teams', 'TeamController@index');


//get a single entry of each object type
$router->get('/Users/{id}', 'UsersController@show');
$router->get('/Players/{id}', 'PlayerController@show');
$router->get('/Teams/{id}', 'TeamController@show');


//store the edit of a single entry of each object type
$router->put('/Users/{id}', 'UsersController@update');
$router->put('/Players/{id}', 'PlayerController@update');
$router->put('/Teams/{id}', 'TeamController@update');


//delete single entry of each object type
$router->delete('/Users/{id}', '   UsersController@destroy');
$router->delete('/Players/{id}', '   PlayerController@destroy');
$router->delete('/Teams/{id}', '   TeamController@destroy');


