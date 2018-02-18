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

Route::get("/", "IndexController@indexHandler");

Route::get("/about", "IndexController@aboutHandler");

Route::get("/projects", "IndexController@projectsHandler");

Route::get("/contact", "IndexController@contactHandler");

Route::get("/MyStuff/{project}", ["uses" => "OldProjectsController@OldProjectsHandler"]);