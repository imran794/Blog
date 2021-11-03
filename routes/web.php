<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Author\ADashboardController;


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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['as' => 'admin.','prefix' => 'Admin', 'namespace'=> 'Admin', 'middleware'=>['auth','admin']], function() {

    route::get('dashboard',[DashboardController::class, 'index'])->name('dashboard');
    
});

Route::group(['as'=>'author.','prefix' => 'Author', 'namespace'=> 'Author', 'middleware'=>['auth','author']], function() {

    route::get('dashboard',[ADashboardController::class, 'index'])->name('dashboard');
    
});
