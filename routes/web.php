<?php

use Illuminate\Http\Response;
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
    return view('welcome');
});

Route::get('hello/world/{name}', function($name) {
    $response = new Response('Hello World ' . $name, 200);
    $response->header('Content-Type', 'text/plain');
    return $response;
});


Route::match(['get', 'post'],'task/test', 'TaskController@test');



Route::get('list', function() {
    $tasks= [
        ['name' => 'Response 클래스 분석', 'due_date' => '2015-06-01 11:22:33'],
        ['name' => '블레이드 예제 작성', 'due_date' => '2015-06-03 15:21:13'],
    ]; 
    return view('list')->with('tasks', $tasks);
});