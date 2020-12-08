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
$router->get('/getUsers', 'UsersController@index');
$router->get('/getUser/{id}', 'UsersController@show');
$router->put('/editUser/{id}', 'UsersController@update');
$router->delete('/deleteUser/{id}', 'UsersController@destroy');

$router->get('/getPlayers', 'PlayerController@index');
$router->get('/getPlayer/{id}', 'PlayerController@show');
$router->put('/editPlayer/{id}', 'PlayerController@update');
$router->delete('/deletePlayer/{id}', 'PlayerController@destroy');

$router->get('/getTeams', 'TeamController@index');
$router->get('/getTeam/{id}', 'TeamController@show');
$router->put('/editTeam/{id}', 'TeamController@update');
$router->delete('/deleteTeam/{id}', 'TeamController@destroy');

$router->get('/getSchedules', 'ScheduleController@index');
$router->get('/getSchedule/{id}', 'ScheduleController@show');
$router->put('/editSchedule/{id}', 'ScheduleController@update');
$router->delete('/deleteSchedule/{id}', 'ScheduleController@destroy');

use Illuminate\Http\Request;

$router->group(['middleware' => 'auth'], function() use ($router) {
    
    $router->post('/logout', 'UserController@logout');
    //Working
    $router->post('/PlayerRegistration', 'PlayerController@create');
    $router->get('/api/user', function(Request $request) {
        $user = $request->user();
        return $user->toArray();
    });
    $router->post('/createTeam', 'TeamController@create');
    $router->post('/createSchedule', 'ScheduleController@create');
        
});







