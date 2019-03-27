<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/3/22
 * Time: 16:30
 */

namespace App\Http\Controllers\System;


use App\Http\Controllers\Controller;
use http\Env;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Storage;

class SystemController extends Controller
{
    public function index()
    {
        return view("system.system.index");
    }


    public function userUpload(Request $request)
    {
        $fileCharater = $request->file('file');

        if ($fileCharater->isValid()) { //括号里面的是必须加的哦
            //如果括号里面的不加上的话，下面的方法也无法调用的

            $path = $request->file('file')->store('user');
            return response()->json([
                "state"=>200,
                "msg"=>"上传成功",
                "data"=>'/uploads/'.$path
            ]);
        }
//        return response("success",200);
        return response()->json([
            "state"=>400,
            "msg"=>"上传失败",
            "data"=>$request
        ]);
    }

    public function userInfo(Request $request)
    {
        $input = $request->all();
        Config::set('img_url',$input["img_url"]);
        Config::set('username',$input["username"]);
        return response()->json([
            "state"=>200,
            "msg"=>"修改成功",
            "data"=>''
        ]);
    }
}
