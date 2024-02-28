<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', 'App\\Http\\Controllers\\MainPageController@render')->name('/main.render');
Route::get('/create', 'App\\Http\\Controllers\\UserInfoController@main')->name('create.main');
Route::post('/check_resume', 'App\\Http\\Controllers\\TemplateViewController@render')->name('check_resume.render');
Route::post('/check_resume/download', 'App\\Http\\Controllers\\TemplateViewController@downloadPDF')->name('check_resume.download');
