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



Auth::routes();
// Route halaman utama
Route::get('/contact', 'ViewController@index');
Route::get('/portfolio', 'PortfolioController@portofolio');
Route::get('/services', 'ServiceController@service');
Route::get('/', 'ViewController@show');
// Route Services 
Route::get('/service', 'ServiceController@index');
Route::get('edit-service/{id}', 'ServiceController@edit');
Route::get('/add-service', 'ServiceController@create');
Route::post('tambah', 'ServiceController@store');
Route::patch('update-service/{id}', 'ServiceController@update');
Route::get('delete-service/{id}', 'ServiceController@destroy');
// Route Slider
Route::get('/slider', 'SliderController@index');
Route::get('edit-slider/{id}', 'SliderController@edit');
Route::get('/add-slider', 'SliderController@create');
Route::post('tambah-slider', 'SliderController@store');
Route::patch('update-slider/{id}', 'SliderController@update');
Route::get('delete-slider/{id}', 'SliderController@destroy');
// Route About
Route::get('/about', 'AboutController@index');
Route::get('/add-about', 'AboutController@create');
Route::post('tambah-about', 'AboutController@store');
Route::get('edit-about/{id}', 'AboutController@edit');
Route::patch('update-about/{id}', 'AboutController@update');
Route::get('delete-about/{id}', 'AboutController@destroy');
// Route Portofolio
Route::get('/portofolio', 'PortfolioController@index');
Route::get('edit-portofolio/{id}', 'PortfolioController@edit');
Route::get('/add-portofolio', 'PortfolioController@create');
Route::post('tambah-portofolio', 'PortfolioController@store');
Route::patch('update-portofolio/{id}', 'PortfolioController@update');
Route::get('delete-portofolio/{id}', 'PortfolioController@destroy');
// Route Blogs
Route::get('/blogs', 'BlogsController@index');
Route::get('/add-blogs', 'BlogsController@create');
Route::post('tambah-blogs','BlogsController@store');
Route::get('edit-blogs/{id}', 'BlogsController@edit');
Route::patch('update-blogs/{id}', 'BlogsController@update');
Route::get('/blog','BlogsController@show');
Route::get('/detail-blog/{id}','BlogsController@detail');
Route::get('delete-blogs/{id}', 'BlogsController@destroy');
// Route Contact
Route::post('/save-contact','ContactController@store');
Route::get('edit-contact/{id}', 'ContactController@edit');
Route::patch('update-contact/{id}', 'ContactController@update');
Route::get('delete-contact/{id}', 'ContactController@destroy');
Route::get('/home', 'ContactController@index')->name('home');
// Route Pricing
Route::get('/pricing', 'PricingController@index');
Route::get('/pricings', 'PricingController@pricings');
Route::get('/add-pricing','PricingController@create');
Route::post('tambah-pricing','PricingController@store');
Route::get('/delete-pricing/{id}', 'PricingController@destroy');
Route::get('edit-pricing/{id}', 'PricingController@edit');
Route::patch('update-pricing/{id}', 'PricingController@update');
