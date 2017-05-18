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


// Show Documentation for database
$app->get('/', function () use ($app) {
  return view('index');
});

// Handle routes for user handling
$app->post('/login', 'LoginController@index');
$app->post('/register', 'UserController@register');
$app->get('/user/{id}', ['middleware' => 'auth', 'uses' =>  'UserController@get_user']);

/*
 / ------------------------------------------
 / CRUD Routes using auth middleware
 / With the exception of those using a public controller
 / ------------------------------------------
 */

// Routes for Shops
$app->get('/shops', 'PublicShopsController@index');
$app->get('/shops/{id}', 'PublicShopsController@read');
$app->get('/shops/delete/{id}', 'ShopsController@delete');
$app->post('/shops/create', 'ShopsController@create');
$app->post('/shops/update/{shopID}', 'ShopsController@update');

// Routes for Campaign proposals
$app->get('/campaigns/proposal', 'SentCampaignController@index');
$app->get('/campaigns/proposal/{id}', 'SentCampaignController@read');
$app->get('/campaigns/proposal/activate/{id}', 'SentCampaignController@activate');
$app->get('/campaigns/proposal/delete/{id}', 'SentCampaignController@delete');
$app->post('/campaigns/proposal/create', 'SentCampaignController@create');
$app->post('/campaigns/proposal/update/{id}', 'SentCampaignController@update');


// Routes for Active campaigns
$app->get('/campaigns/active', 'PublicCampaignController@index');
$app->get('/campaigns/active/{id}', 'PublicCampaignController@read');
$app->get('/campaigns/active/delete/{id}', 'ActiveCampaignController@delete');
$app->post('/campaigns/active/create', 'ActiveCampaignController@create');
$app->post('/campaigns/active/update/{id}', 'ActiveCampaignController@update');

// Routes for expired campaigns
$app->get('/campaigns/expired', 'ExpiredCampaignController@index');
$app->get('/campaigns/expired/{id}', 'ExpiredCampaignController@read');
$app->get('/campaigns/expired/delete/{id}', 'ExpiredCampaignController@delete');
$app->post('/campaigns/expired/create', 'ExpiredCampaignController@create');
$app->post('/campaigns/expired/update/{id}', 'ExpiredCampaignController@update');
