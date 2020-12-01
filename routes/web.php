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
$router->get('/getTeams', 'TeamController@index');

use Illuminate\Http\Request;

$router->group(['middleware' => 'auth'], function() use ($router) {

    //Working
    $router->get('/getUsers', 'UsersController@index');
    $router->post('/PlayerRegistration', 'PlayerController@create');
    $router->get('/getPlayers', 'PlayerController@index');
    $router->get('/getSchedules', 'ScheduleController@index');
    //Current Objective
    $router->get('/api/user', function(Request $request) {
        $user = $request->user();
        return $user->toArray();
    });
    //Next
    $router->post('/createTeam', 'TeamController@create');

    $router->put('/editUsers/{id}', 'UsersController@update');
    $router->put('/editPlayers/{id}', 'PlayerController@update');
    $router->put('/editTeams/{id}', 'TeamController@update');

    $router->delete('/deleteUsers/{id}', 'UsersController@destroy');
    $router->delete('/deletePlayers/{id}', 'PlayerController@destroy');
    $router->delete('/deleteTeams/{id}', 'TeamController@destroy');
});







