<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
public function index(Request $request) {
	$model = new  News();
	//dd($request);
	return view ('news.index', [
		'newsList'=>$model->newsList()
	]); //Путь от каталога view и без расширения, ассоциативный массив передаем вьюхе
}
public function show(int $id) {
	$model = new  News();
	$news=$model->news($id);

	return view ('news.show', [
		'news'=>$news
	]);
}

}
