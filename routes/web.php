<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketCont;
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

Route::get('new-design',function (){return view('newdesign');});
Route::get('all-logs','App\Http\Controllers\LogCont@getAllLogs');
Route::get('logfile/{id}','App\Http\Controllers\LogCont@getTicketLog');
Route::get('addreply','App\Http\Controllers\ReplyCont@add');
Route::get('getreplies','App\Http\Controllers\ReplyCont@getReplies')->name('getreplies');
Route::get('delete/{id}/{resp_emp}/{emp_name}','App\Http\Controllers\TicketCont@delete')->middleware('auth');
Route::get('sheet','App\Http\Controllers\TicketCont@index')->middleware('auth');
Route::get('insert','App\Http\Controllers\TicketCont@insert')->middleware('auth');
Route::get('edit','App\Http\Controllers\TicketCont@edit')->middleware('auth');

Route::get('test',function (){
   return view('testapp');
});
Route::get('lara',function (){
    return view('Admin-view-app');
});
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('video/{id}','App\Http\Controllers\VideoCont@vid')->middleware('auth');
Route::get('ajax',function (){
    return view('ajax');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
Route::get('vid','App\Http\Controllers\VideoCont@vid');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::prefix('Admin')->group(function (){
    Route::prefix('section')->group(function (){
        Route::post('Add','App\Http\Controllers\Admin\Section\Section_cont@add');
        Route::get('Add','App\Http\Controllers\Admin\Section\Section_cont@add');
        Route::post('Update/{id}','App\Http\Controllers\Admin\Section\Section_cont@update');
        Route::get('Update/{id}','App\Http\Controllers\Admin\Section\Section_cont@update');


    });
});
Route::get('point','App\Http\Controllers\AjaxCont@fill');
Route::get('getdata','App\Http\Controllers\AjaxCont@getdata')->name('getme');

Route::get('claculategrade','App\Http\Controllers\CalcGradeCont@index');
