<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //传递数据到多个视图可以将common/layouts改为['common/layouts1','common/layouts2']
        view()->composer('common/layouts',function($view){
            if(session_status()==1) {
                session_start();
            }
            //判断是否登录
            //没登录购物车和users都没有
            if(!isset($_SESSION['users_id']) && !isset($_SESSION['users_name'])){
                $users_id = '';
                $users_name = '';
            }else{
                //登陆成功,显示用户名称,和购物车数量
                $users_id = $_SESSION['users_id'];
                $users_name = $_SESSION['users_name'];

            }
            $view->with('users_id',$users_id);
        });

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
