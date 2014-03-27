<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
    Newrelic::nameTransaction('hello');
    $view = View::make('hello');
    Newrelic::endOfTransaction();
    return $view;
});

Route::get('homepage', function()
{
    Newrelic::nameTransaction('homepage');
    $view = View::make('homepage');
    Newrelic::endOfTransaction();
    return $view;
});
