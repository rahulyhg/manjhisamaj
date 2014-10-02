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

//01aef2
//http://www.packtpub.com/article/laravel4-creating-a-simple-crud-application-in-hours



Route::get('/', 'HomeController@index');

Route::get('/search', 'HomeController@getSearch');

//Route::get('/', 'HomeController@postSignup');
Route::post('/postSignup', 'HomeController@postSignup');

/*
 ********************************************
 ******************** admin Area ************
 ********************************************
*/
Route::group(array('prefix' => 'admin'), function()
{
    Route::get('/', 'SuperUsersController@index');
    Route::get('/login', 'SuperUsersController@index');
    Route::post('/postSignin', 'SuperUsersController@postSignin');
    Route::get('/logout', 'SuperUsersController@getLogout');
    Route::get('/dashboard', 'AdminHomeController@index');
    
    Route::resource('castes', 'CasteController');
    Route::resource('countries', 'CountryController');
    Route::resource('states', 'StateController');
    Route::resource('cities', 'CityController');
    Route::resource('educationcategories', 'EducationCategoryController');
    Route::resource('educations', 'EducationController');
    
    Route::resource('linkcategories', 'LinkCategoryController');
    Route::resource('links', 'LinkController');
    
    Route::resource('suggestions', 'SuggestionController');
    Route::resource('achievers', 'AchieverController');
    Route::resource('childs', 'ChildController');
    Route::resource('vevents', 'VEventController');
    Route::resource('users', 'UserController');
});

Blade::extend(function($value) {
    return preg_replace('/\@define(.+)/', '<?php ${1}; ?>', $value);
});