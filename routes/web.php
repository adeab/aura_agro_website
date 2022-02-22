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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'PageController@welcome');
Auth::routes();


Route::get('cattles', 'PageController@cattles')->name('allcattles');
Route::get('services', 'PageController@services')->name('allservices');
Route::get('showcattle/{slug}', 'PageController@show')->name('cattle-detail');

// Route::get('cattles/create', 'ProductController@create')->name('create');
// Route::post('cattle', 'ProductController@store');
Route::group(['middleware' => ['auth']], function () {
    Route::resource('cattle', 'ProductController');
    Route::get('dashboard', 'HomeController@index')->name('home');

    Route::get('cms/appearance', 'CmsController@appearance')->name('appearance');
    Route::resource('cms/banner', 'BannerController');
    Route::resource('cms/team', 'TeamController');
    Route::resource('cms/testimonial', 'TestimonialController');

    Route::post('appearance', 'CmsController@updateAppearance');
    Route::post('banner', 'CmsController@updateBanner');
});



Route::get('image-upload', 'PhotoController@index');
Route::post('preview-multiple-image-upload', 'PhotoController@store');

Route::get('crop-image-upload', 'PhotoController@index_two');
Route::post('crop-image-upload ', 'PhotoController@uploadCropImage');
