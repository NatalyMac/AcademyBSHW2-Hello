<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\Lib\Smartphone\SmartphoneStore;
use App\Lib\Smartphone\Smartphone;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/phone', function() {
    //dd(app()->make('Smartphone'));
    //dd(App::make('Smartphone'));
    //dd(app('Smartphone'));
    $myphone = app('Smartphone');
    return Response::view('myphone', ['myphone' => $myphone->get()]);

});

//Route::get('/phonetest', function() {
    //dd(app()->make('Smartphone'));
    //dd(App::make('Smartphone'));
    //dd(app('Smartphone'));

//});

Route::get('/shorten', function() {
	$bitly = Bitly::shorten('http://binary-studio.com/');
	//dd($bitly);
    return Response::view('shorten', [ 'shorts' => [ $bitly['data']['long_url'], $bitly['data']['url']] ]);
});


Route::get('/phones', function(SmartphoneStore $phones) {
    dd($phones->getAll());
});