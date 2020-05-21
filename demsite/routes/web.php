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

//Route::get('/', function () {
//    return view('index');          // легкий контролер для страницы
//})->name('Main');

Route::get('/',IndexController::class)->name('Main');  // для сложных методов если много страниц

Route::get('/about','PageController@about')->name('About');

Route::get('/contacts','PageController@contacts')->name('Contacts');

Route::get('/author/{key}',Newsbd_url_controll::class)->name('new_url_author');

Route::get('/new/{id}', One_new_controller::class)->name('One_new');

Route::get('/category/{key}', Newsbd_in_category_cont::class)->name('new_in_category');



//Route::get('/contacts', function () {
//    return view('Contacts');            // легкий контролер для страницы
//})->name('Contacts');
