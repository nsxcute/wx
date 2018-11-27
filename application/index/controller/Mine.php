<?php

namespace app\index\controller;
use think\Db;
use think\Controller;
class Mine extends Controller
{
    public function mine()
    {
        var_dump($_GET);
                    $data = [
                        'title' => input('get.title')
	];

	$result = Db::name('article')->insert($data);
	var_dump($result);
    }
}