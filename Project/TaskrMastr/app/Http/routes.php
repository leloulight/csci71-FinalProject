<?php


Route::model('tasks', 'Task');
Route::model('home', 'Category');


Route::bind('tasks', function($value, $route) {
    return App\Task::whereSlug($value)->first();
});
Route::bind('home', function($value, $route) {
    return App\Category::whereSlug($value)->first();
});

Route::group(['middleware' => 'auth'], function()
{
    Route::resource('home', 'CategoriesController');
    Route::resource('home.tasks', 'TasksController');
});



Route::get('/', function () {
    if(Auth::check()) {
        return Redirect::intended('/home');
    }

    return view('pages.main');
});



// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');


