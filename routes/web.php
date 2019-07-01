<?php

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

$app->get('/', function () use ($app) {
//    return $app->version();
    return view("index");
});

$app->get('/key', function () {
    return str_random(32);
});

// We are using a Middleware that doesn't require configuration
// https://github.com/vluzrmos/lumen-cors
$app->group(['middleware' => []], function () use ($app) {
    $app->post('/users/login', ['uses' => 'UsersController@getToken']);
});

$app->group(['middleware' => [/*'auth'*/]], function () use ($app) {
// Users
    $app->get('/users', ['uses' => 'UsersController@getAll']);
    $app->get('/users/{id}', ['uses' => 'UsersController@getUser']);

    $app->post('/users', ['uses' => 'UsersController@createUser']);

    $app->put('/users/{id}', ['uses' => 'UsersController@updateUser']);
    $app->delete('/users/{id}', ['uses' => 'UsersController@deleteUser']);

    $app->post('/bookings', ['uses' => 'BookingsController@getAll']);
    $app->get('/time', ['uses' => 'BookingsController@getTime']);
});

