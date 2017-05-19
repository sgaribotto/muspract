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
    return view('welcome');
});

Route::get('about', function() {
    return view('about');
});

Route::get('exercises', function() {
    $exercises = Muspract\Exercises::all();
    return view('exercises.index')->with('exercises', $exercises);
});

Route::get('exercises/{category}/{name}', function($category, $name) {
    $class = 'Muspract\\' . ucfirst($category);
    //return $class;
    $result = $class::with('exercises')
        ->whereName($name)
        ->first();
    print_r($result);
    return 1; /*
    return view("exercises." . $category . ".index")
        ->with('result', $result)
        ->with('exercises', $result->exercises)
	->with('category', $category);*/
}); 

