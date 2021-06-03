<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
public function index() {
	return view ('news.index', [
		'newsList'=>$this->newsList
	]); //Путь от каталога view и без расширения, ассоциативный массив передаем вьюхе
}
public function show(int $id) {
	return view ('news.show', [
		'id'=>$id
	]);
}

}
