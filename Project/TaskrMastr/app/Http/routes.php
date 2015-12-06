<?php


Route::model('tasks', 'Task');
Route::model('categories', 'Category');


Route::bind('tasks', function($value, $route) {
    return App\Task::whereSlug($value)->first();
});
Route::bind('categories', function($value, $route) {
    return App\Category::whereSlug($value)->first();
});

Route::group(['middleware' => 'auth'], function()
{
    Route::resource('categories', 'CategoriesController');
    Route::resource('categories.tasks', 'TasksController');
});


Route::get('/dashboard', 'DashboardController@index');

Route::get('/calendar', 'CalendarController@index');

Route::get('/analytics', 'AnalyticsController@index');



Route::get('/', function () {
    if(Auth::check()) {
        return Redirect::intended('/dashboard');
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

// Recover password routes...
Route::get('auth/recover', 'Auth\RecoverController@index');
Route::post('auth/recover', 'Auth\RecoverController@postRecover');













Route::get('sendemail', function () {

    $data = array(
        'name' => "Learning Laravel",
    );

    Mail::send('emails.welcome', $data, function ($message) {

        $message->from('taskrmastr@gmail.com', 'Learning Laravel');

        $message->to('yash.spatel23@gmail.com')->subject('Learning Laravel test email');

    });

    return "Your email has been sent successfully";

});












