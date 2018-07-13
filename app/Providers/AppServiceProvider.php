<?php

namespace App\Providers;


use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Request $request)
    {
        //赋值左导航数据
        $sider =[
            'list'=>[
                ['title'=>'One Night Stand','source'=>4],


                ['title'=>'订单管理','href'=>'/Ad/order/olist'],
                ['title'=>'续费详情','href'=>'/Ad/order/corder'],

                ['title'=>'付费情况','href'=>'/Ad/order/paydetail'],
                ['title'=>'订单管理','href'=>'/Ad/order/onenight'],
                ['title'=>'订单管理','href'=>'/Ad/order/otherorder'],
                ['title'=>'订单管理','href'=>'/Ad/order/firstapp'],
            ],
            'nav'=>[
                [1,2],

            ]
        ];
        view()->share('sider',$sider);
        view()->share('nowsource',$request->input('source',1));
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
