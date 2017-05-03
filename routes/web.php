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
    // return $app->version();
    return  "Help, This API is a TRAP!";
});

$app->get('/users', function() use ($app) {
    return app('db')->select("SELECT * FROM users");
});

$app->get('/users/{id}', function($id) use ($app) {
    return app('db')->select("SELECT * FROM users WHERE userID = $id");
});

$app->get('/shops', function() use ($app) {
    return app('db')->select("SELECT * FROM shops");
});

$app->get('/shops/{id}', function($id) use ($app) {
    return app('db')->select("SELECT * FROM shops WHERE shopID = $id");
});

$app->get('/campaignProposals', function() use ($app) {
    return app('db')->select("SELECT * FROM sentCampaigns");
});
