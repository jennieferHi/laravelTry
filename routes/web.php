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
use Illuminate\Support\Facades\App;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test/{id?}', function ($id="1") {
    echo'welcome'. $id;
});
// route::():name() ==>Route("name")
// 查看系統已經有的路由
// php artisan rote:list 
Route::any('/test5/{id?}', function ($id="1") {
    echo'welcome'. $id.$_GET["mm"];
})->name("data");
 
// route:group 相同路由 與nodejs app.use相同
Route::group(["prefix"=> "admin"], function () {
    // http://127.0.0.1:8000/admin/test
    Route::any('/test', function ($id="1") {
        echo'welcome1'. $id;
    })->name("data");
    // http://127.0.0.1:8000/admin/test2
    Route::any('/test2', function ($id="1") {
        echo'welcome2';
    })->name("data");
         
}); 
 
Route::get('/test000/test2','App\Http\Controllers\TestController@test2'); 
Route::get('/test000/test2','App\Http\Controllers\TestController@test2'); 
Route::get('/test100/test1','App\Http\Controllers\Admin\IndexController@test1'); 
Route::get('/test0/test3','App\Http\Controllers\Admin\IndexController@test3'); 
// crud
Route::group(['prefix'=> 'table'], function () { 
Route::get('/home/tt/','App\Http\Controllers\Home\IndexController@index');  
Route::get('/home/tt/add','App\Http\Controllers\Home\IndexController@add'); 
Route::get('/home/tt/del','App\Http\Controllers\Home\IndexController@del'); 
Route::get('/home/tt/update','App\Http\Controllers\Home\IndexController@update'); 
Route::get('/home/tt/select','App\Http\Controllers\Home\IndexController@select'); 
});

// test

Route::get('/test0/test3/t1','App\Http\Controllers\Admin\IndexController@test3'); 
Route::get('/test0/test4/t1','App\Http\Controllers\Admin\IndexController@test4'); 
Route::get('/test0/test6/t1','App\Http\Controllers\Admin\IndexController@test6'); 

// csrf
Route::get('/test0/test7/t1','App\Http\Controllers\Admin\IndexController@test7')->name("test7"); 
Route::get('/test0/test9/t1','App\Http\Controllers\Admin\IndexController@test9')->name("test9");
Route::post('/test0/test8/t1','App\Http\Controllers\Admin\IndexController@test8')->name("test8");

// ORM

Route::post('/ORM/test1/t1','App\Http\Controllers\Admin\IndexORMController@test1')->name("test1"); 
Route::get('/ORM/test2/t1','App\Http\Controllers\Admin\IndexORMController@test2')->name("test2"); 
Route::get('/ORM/test3/t1','App\Http\Controllers\Admin\IndexORMController@test3')->name("test3"); 
Route::get('/ORM/test4/t1','App\Http\Controllers\Admin\IndexORMController@test4')->name("test4"); 

// 驗證
Route::any('/Auth/test5/t1','App\Http\Controllers\Admin\IndexORMController@test5')->name("test5"); 

// 檔案上傳
Route::any('/File/test1/t1','App\Http\Controllers\File\IndexController@test1')->name("test6"); 
Route::get('/File/test2/t1','App\Http\Controllers\File\IndexController@test2')->name("test7"); 

// 渲染
Route::get('/View/test1/t1','App\Http\Controllers\View\IndexController@test1')->name("test8"); 
Route::get('/View/test2/t1','App\Http\Controllers\View\IndexController@test2')->name("test9"); 

// Session
Route::get('/Session/test1/t1','App\Http\Controllers\Session\IndexController@test1')->name("test10"); 
Route::get('/Session/test2/t1','App\Http\Controllers\Session\IndexController@test2')->name("test11"); 

// cache
Route::get('/Cache/test1/t1','App\Http\Controllers\Cache\IndexController@test1')->name("test12"); 
// select
Route::get('/Select/test5/t1','App\Http\Controllers\Select\IndexController@test5')->name("test14"); 

// 一對一
Route::get('/Select/test1/t1','App\Http\Controllers\Select\IndexController@test1')->name("test21"); 
// 一對多
Route::get('/Select/test2/t1','App\Http\Controllers\Select\IndexController@test2')->name("test22"); 
// 多對一
Route::get('/Select/test3/t1','App\Http\Controllers\Select\IndexController@test3')->name("test23"); 
