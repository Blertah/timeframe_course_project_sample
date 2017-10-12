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

Route::get('/', function () {
    return "hello world";
});

Route::resource("tasks","TaskController");
/*
Route::get("/tasks","TaskController@index");
Route::get("/tasks/create","TaskController@create");
Route::get("/tasks/{task}","TaskController@show");
Route::post("/tasks/","TaskController@store");
Route::get("/tasks/{task}/edit","TaskController@edit");
Route::put("/tasks/{task}","TaskController@update");
Route::delete("/tasks/{task}","TaskController@destroy");
*/

/*
GET /tasks
GET /tasks/{id}
GET /tasks/create *
POST /tasks
GET /tasks/edit *
PUT /tasks/{id}
DELETE /tasks/{id}
*/