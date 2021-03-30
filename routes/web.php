<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

Auth::routes();

//ajax
Route::post('/ajax', [App\Http\Controllers\AjaxController::class, 'postIndex']);


//posts
Route::post('/portfolio/add', [App\Http\Controllers\PortfolioController::class, 'postIndex'])->middleware('auth')/*name('portfolio')*/;

//get
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware'=>['auth']], function(){
	Route::get('/work/delete/{id}', [App\Http\Controllers\PortfolioController::class, 'getDelete']);
	Route::get('/portfolio', [App\Http\Controllers\PortfolioController::class, 'getAll']);
});



Route::get('info{id}', [App\Http\Controllers\PortfolioController::class, 'infoOne']);

Route::get('allportfolios', [App\Http\Controllers\PortfolioController::class, 'allPortfolios']);

Route::get('/', [App\Http\Controllers\MaintextController::class, 'getIndex']);

Route::get('course', [App\Http\Controllers\CoursesController::class, 'getCourses']);

Route::get('details{id}', [App\Http\Controllers\CoursesController::class, 'getDetail']);

Route::get('course{id}', [App\Http\Controllers\PortfolioController::class, 'getWorks']);

Route::get('{url}', [App\Http\Controllers\MaintextController::class, 'getIndex']);

