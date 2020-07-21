<?php

use Illuminate\Support\Facades\Route;

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
Route::get('ducdinh',function (){
    return "ducdinh";
})->name('ducdinhRoute');
Route::group(['prefix'=>'ducdinh'],function (){
    Route::get('abc',function (){
        return "abc";
    });
    Route::get('efg', function (){
        return "efg";
    });
});
Route::get('home','MyController@Req');
Route::get('form', function (){
    return view('postForm');
});
Route::post('postForm', 'MyController@postForm')->name('postFormName');


