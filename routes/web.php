<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::get('/disability', 'DisabilityController@index');

Route::get('/circulation', 'CirculationController@index');

Route::get('/breathing', 'BreathingController@index');

Route::get('/airway', 'AirwayController@index');

Route::get('/lpa', 'LpaController@index');

Route::get('/registratie', 'PatientController@index');

Route::get('/home', 'HomeController@index');


Route::resource('user', 'UserController');
Route::resource('role', 'RoleController');
Route::resource('incident', 'IncidentController');
Route::resource('location', 'LocationController');
Route::resource('event', 'EventController');

