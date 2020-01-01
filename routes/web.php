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



//function(){return view('welcome');}
Route::get('/', 'HomeController@welcome'); //this route is for the home page
Route::post('/searchHome','HomeController@search'); //when an id is searched it go to the this controller and take the search method it is for the user registered


Auth::routes(); //this one is for authentication

Route::get('/home', 'HomeController@index')->name('home'); //the home of the registered user
 //if the method called is get and the url end by /home call this function contained in homecontroller
Route::post('/create','crudController@create'); // this route links the create function of the controller crud to the path /create I link it with a form to take it
Route::post('/update','crudController@update'); //link update function and the form containing action /update
Route::post('/delete','crudController@delete'); // same thing this route link the delete function of the crud with a form in the view
Route::post('/searchView','crudController@search'); //same functionality like the /searchHome but for the user unregistered
Route::post('/download','crudController@export'); //link anything which has /download with the funtion export in crudController
Route:: post('/import','crudController@upload');
Auth::routes();


