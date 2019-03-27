<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/3/22
 * Time: 11:07
 */

namespace App\Http\Controllers\System;




use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class MachineController extends Controller
{
    public function index()
    {
        $machine_list = DB::table("machine")->orderBy("machine_id","desc")->paginate(10);
        return view('system/machine/index',["machine_list"=>$machine_list]);
    }

    public function add_machine()
    {
        return view('system/machine/add_machine');
    }
}
