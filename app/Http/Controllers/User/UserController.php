<?php
namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use Gregwar\Captcha\CaptchaBuilder;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller{
    public function  getCode($id,Request $request){
        ob_get_clean();//有时候输出的不成图像，乱码，是因为在输出图像之前有其他字符输出，所以使用这个函数清空
        //生成验证码图片的Builder对象，配置相应属性
        $builder = new CaptchaBuilder;
        //可以设置图片宽高及字体
        $builder->build($width = 110, $height = 45, $font = null);
        //获取验证码的内容
        $phrase = $builder->getPhrase();//例如:5456
        //把内容存入session
        $request->session()->put('milkcaptcha',$phrase);
//        $_SESSION['milkcaptcha']=$phrase;
        //生成图片
        header("Cache-Control: no-cache, must-revalidate");
        header('Content-Type: image/jpeg');
        $builder->output();

    }
    //核实注册的用户名是否已存在
    public function checkuser(Request $request){

        $username = $request->input('username');
       $bool = DB::select("select * from users where u_name=?",[$username]);

       if(!$bool){
           $result['status']=1;
       }else{
           $result['status']=0;
           $result['msg']='用户名已经存在';
       }
        echo  json_encode($result);exit;
    }

    public function  regist(Request $request){

        if($request->isMethod('POST')){
            $verify_session=strtolower($request->session()->get('milkcaptcha'));
            $verify_input=strtolower($request->input('verify'));
            if($verify_session!=$verify_input){
                $result['status']=0;
                $result['info']='验证码错误，请重新输入';
                echo json_encode($result);exit;
            }

            //表单验证  错误信息写session   （路由放中间件）\
            $validator=\Validator::make($request->input(),[
                'admin_name'=>'required|min:2|max:20',
                'admin_pwd'=>'required|integer'
            ],[
                'required'=>':attribute为必填项',
                'min'=>':attribute长度不符合要求',
                'max'=>':attribute长度不符合要求',
                'integer'=>':attribute必须为整数',
            ],[
                'admin_name'=>'姓名',
                'admin_pwd'=>'密码'
            ]);
            if($validator->fails()){
                $result['status']=0;
                $result['info']=$validator->errors()->first();
                return response()->json($result);
            }


            $admin_name=$request->input('admin_name');

            $admin_pwd=md5($request->input('admin_pwd'));

            $res=DB::table('admin')->whereRaw("admin_name=? and admin_pwd=?",[$admin_name,$admin_pwd])->get();


            if($res){
                session_start();
                $_SESSION['admin_id']=$res[0]->admin_id;
                $_SESSION['admin_name']=$res[0]->admin_name;
                $result['status']=1;
                $result['info']='登录成功';
//                print_r($_SESSION);
            }else{
                $result['status']=0;
                $result['info']='用户名或密码错误';
            }
            echo json_encode($result);exit;
        }


        return view('login/regist');
    }
}
