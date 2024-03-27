<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'App\\Http\\Controllers\\MainPageController@render')->name('/main.render');
Route::get('/create/user_form', 'App\\Http\\Controllers\\UserInfoController@main')->name('create.main');
Route::post('/check_resume', 'App\\Http\\Controllers\\TemplateViewController@render')->name('check_resume.render');
Route::post('/check_resume/download', 'App\\Http\\Controllers\\TemplateViewController@downloadPDF')->name('check_resume.download');

Route::post('/create/select_template', 'App\\Http\\Controllers\\SelectTemplateController@render')->name('select_template.render');
Route::get('/add_template', 'App\\Http\\Controllers\\AddTemplateController@add')->name('add_template');
    