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

// SIMPLE ROUTE HANDLERS
// dynamically inject values and data into a view

// Root route page function
Route::get('/', function () {
    return view('welcome');
});


// Set up a brand new route to return a view (new page)
// You can return text or json also through a array below (gets converted to JSON)
Route::get('/stacks', function () {
    // Get data from the database
    $text = [
        'framework' => 'React',
        'language' => 'JavaScript',
        'level' => 5
    ];
    // Pass that data into the view to then be used in dynamic data
    return view('stacks', $text);
    // return ['name' => 'veg pizzas', 'base' => 'classic'];
});



