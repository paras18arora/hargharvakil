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

Route::get('/', function () {
    return view('welcome');
});

Route::post('/subscribe','subscribeController@newsletter');
Route::get('/trademarkregistration','trademarkregistrationController@show');
Route::get('/trademarkrenewal','trademarkrenewalController@show');
Route::get('/trademarkobjection','trademarkobjectionController@show');
Route::get('/trademarkassignment','trademarkassignmentController@show');
Route::get('/copyrightregistration','copyrightregistrationController@show');
Route::get('/patentsearch','patentsearchController@show');
Route::get('/provisionalpatent','provisionalpatentController@show');
Route::get('/agreements','agreementsController@show');
Route::get('/contracts','contractsController@show');
Route::get('/deeds','deedsController@show');
Route::get('/legalnotice','legalnoticeController@show');
Route::get('/nda','ndaController@show');
Route::get('/wills','willsController@show');
Route::get('/policiesanddisclaimers','policiesanddisclaimersController@show');
Route::get('/companies','companiesController@show');
Route::get('/soloentrepreneurs','soloentrepreneursController@show');
Route::get('/partnerships','partnershipsController@show');
Route::get('/amendments','amendmentsController@show');
Route::get('/annualcompliances','annualcompliancesController@show');
Route::get('/conversions','conversionsController@show');
Route::get('/financialreporting','financialreportingController@show');
Route::get('/windingup','windingupController@show');
Route::get('/incometaxreturn','incometaxreturnController@show');
Route::get('/servicetax','servicetaxController@show');
Route::get('/professionaltax','professionaltaxController@show');
Route::get('/vatregistration','vatregistrationController@show');
Route::get('/din','dinController@show');
Route::get('/tin','tinController@show');
Route::get('/tds','tdsController@show');
Route::get('/passportregistration','passportregistrationController@show');
Route::get('/passportrenewal','passportrenewalController@show');

Route::post('/send','MailController@send');
