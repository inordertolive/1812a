<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model\user;
use Illuminate\Support\Facades\Redis;

class TestController extends Controller
{
    public function add()
    {
        $arr = [
        'u_name'=>'admin',
        'u_pwd'=>'1156695395@qq.com'
        ];
        $id = user::insert($arr);
        echo 2;
        dd($id);
    }
    public function redis()
    {
        $value = Redis::get('abc');
        dd($value);
    }

}
