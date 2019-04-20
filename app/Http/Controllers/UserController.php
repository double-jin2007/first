<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller{
    public function  index(){

if($_GET){

    if( strpos($_SERVER['HTTP_HOST'],"shanghai") !== false )   // 注意一定要用 !== 不能用 !=, 否则不能区分false和0
    {//
        echo  111;exit;
    }elseif( strpos($_SERVER['HTTP_HOST'],"bbs") !== false )
    {
        echo 222;exit;
    }
    else
    {//显示主页
        echo 333;exit;
    }
}

       return view('index');
    }
    public function  info($user,Request $request){
        echo $user;exit;
        echo 111;exit;
    }
}