<?php

use App\Mail\ContactMessageCreated;

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

Route::get('/', [
    'as' => 'root_path',
    'uses' => 'PagesController@home'
]);

Route::get('/test-email', function(){
    return new ContactMessageCreated("Frank Cabrel", "frankcabrel@gmail.com", "Message a envoyer");
});

Route::get('/about', 'PagesController@about')->name('about_path');

Route::get('/contact', [
    'as' => 'contact_path',
    'uses' => 'ContactController@create'
]);

Route::post('/contact', [
    'as' => 'contact_path',
    'uses' => 'ContactController@store'
]);

Route::get('/services', [
    'as' => 'services_path',
    'uses' => 'PagesController@services'
]);

Route::get('/salers', [
    'as' => 'salers_path',
    'uses' => 'SalersController@create'
]);
