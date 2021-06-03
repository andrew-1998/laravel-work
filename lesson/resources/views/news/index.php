<?php  

foreach ($newsList as $key=>$news) {
	++$key; //Это просто индекс массива, начинающегося с нуля, поэтому его надо инкрементировать
    echo "$news &nbsp; <a href='".route('news.show', ['id'=>$key])."'> К новости</a> <br>";
}