<?php
namespace app\index\controller;
use think\Db;
use think\Controller;
class Index extends Controller
{
    public function index()
    {
        $data = [
		'title' => input('post.title'),
		'create_time' => date('Y-m-d H:i:s'),
		'content' => input('post.text')		
	];

	$result = Db::name('article')->insert($data);
	var_dump($result);
	
    }
}