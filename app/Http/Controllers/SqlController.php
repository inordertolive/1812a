<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SqlController extends Controller
{
    /**
     * 测试读写分离
     */
    public function insert_web()
    {
        return view('test/insert');
    }
    public function insert()
    {
        echo request()->post('t_date');
    }

    public function delete()
    {

    }

    public function update()
    {

    }

    public function read()
    {
            
    }
}
