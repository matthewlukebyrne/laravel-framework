<?php

use Illuminate\Support\Facades\Route;

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

// dynamically inject values and data into a view (if you want!)
// Now coming from the Stack Controller page passed through
// Pass through the stack controller and then call the appropiate action of "index" or "show"

// Landing Page
Route::get('/', function () {
    return view('welcome');
});

// Stacks Page + Added Middleware for the route from Laravel!
// Also added name routes - ->name('stacks.index')
Route::get('/stacks', 'StackController@index')->name('stacks.index')->middleware('auth');
// Create a new framework (adds!)
Route::get('/stacks/new/create', 'StackController@create')->name('stacks.create')->middleware('auth');
// Adding a post route
Route::post('/stacks', 'StackController@store')->name('stacks.store');
// Id of Stacks page
Route::get('/stacks/{id}', 'StackController@show')->name('stacks.show')->middleware('auth');
// Delete Handler
Route::delete('/stacks/{id}', 'StackController@destroy')->name('stacks.destroy')->middleware('auth');






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
