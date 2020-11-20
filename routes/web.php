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
$router->post('/logIn','UsersController@logIn');
$router->post('/User', 'UsersController@create');
$router->post('/PlayerRegistration', 'PlayerController@create');


//get list of each object type
$router->get('/getUsers', 'UsersController@index');
$router->get('/getPlayers', 'PlayerController@index');
$router->get('/getTeams', 'TeamController@index');


//get a single entry of each object type
$router->get('/getUsers/{id}', 'UsersController@show');
$router->get('/getPlayers/{id}', 'PlayerController@show');
$router->get('/getTeams/{id}', 'TeamController@show');


//store the edit of a single entry of each object type
$router->put('/editUsers/{id}', 'UsersController@update');
$router->put('/editPlayers/{id}', 'PlayerController@update');
$router->put('/editTeams/{id}', 'TeamController@update');


//delete single entry of each object type
$router->delete('/deleteUsers/{id}', 'UsersController@destroy');
$router->delete('/deletePlayers/{id}', 'PlayerController@destroy');
$router->delete('/deleteTeams/{id}', 'TeamController@destroy');


