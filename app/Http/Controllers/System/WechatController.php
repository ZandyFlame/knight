<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/3/22
 * Time: 15:02
 */

namespace App\Http\Controllers\System;


use App\Http\Controllers\Controller;

class WechatController extends Controller
{
    public function index()
    {
        return view('system/wechat/index');
    }
}
