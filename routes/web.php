<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Registered Routes go here. Check Lumen documentation for routes if in
| doubt on how to do any routes
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

$app->get('/campaignProposals/{id}', function($id) use ($app) {
    return app('db')->select("SELECT * FROM sentCampaigns WHERE campaignID = $id");
});
