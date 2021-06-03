<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $newsList = [
    	'Новость 1',
    	'Новость 2',
    	'Новость 3',
    	'Новость 4',
    	'Новость 5',
    	'Новость 6',
    	'Новость 7'
    ];

}
