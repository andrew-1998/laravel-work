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

use App\Http\Controllers\NewsController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Admin\FeedbackController as AdminFeedbackController;
use App\Http\Controllers\Admin\DataorderController as AdminDataorderController;

//admin
Route::group(['prefix'=>'admin'], function() {
	Route::resource('/categories', AdminCategoryController::class);
	Route::resource('/news', AdminNewsController::class);
	Route::resource('/customers/feedback', AdminFeedbackController::class);
	Route::resource('/customers/dataorder', AdminDataorderController::class);
});

Route::get('/', function() {
	return view('welcome');
});

//news
Route::get('/news', [NewsController::class, 'index'])
	->name('news');  //Имя может быть любое используем news вместо news.index чтобы избежать конфликта с админкой
Route::get('/news/{id}', [NewsController::class, 'show'])
	->where('id', '\d+')
	->name('news.show');