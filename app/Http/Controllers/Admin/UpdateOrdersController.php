<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdController;

//订单控制器
class UpdateOrdersController extends AdController
{

    /**
     * 更新最近的信息
     */
    public function updateOrders()
    {
        $controllers=[
            new \App\Http\Controllers\English\Datingchat\OrderController(),
            new \App\Http\Controllers\English\Flirtnow\OrderController(),
            new \App\Http\Controllers\English\Flirtyboy\OrderController(),
            new \App\Http\Controllers\English\Localhookupdating\OrderController(),
            new \App\Http\Controllers\English\Matchflirt\OrderController(),
            new \App\Http\Controllers\English\Onenightdating\OrderController(),
            new \App\Http\Controllers\English\Onenightflirt\OrderController(),
            new \App\Http\Controllers\English\Onenightstand\OrderController(),
            new \App\Http\Controllers\English\Onenightvest\OrderController(),
            new \App\Http\Controllers\English\Quickmeet\OrderController(),
//            new \App\Http\Controllers\English\Trycn\OrderController(),
            new \App\Http\Controllers\English\Naughtyme\OrderController(),
            new \App\Http\Controllers\English\Datingmenow\OrderController(),
            new \App\Http\Controllers\English\Naughtydating\OrderController(),
            new \App\Http\Controllers\English\Naughtyhookup\OrderController(),
            new \App\Http\Controllers\English\Datingonenight\OrderController(),
            new \App\Http\Controllers\English\Nudedating\OrderController(),
            new \App\Http\Controllers\English\Naughtyonenight\OrderController(),
            new \App\Http\Controllers\English\Onenightstand_20180115\OrderController(),
            new \App\Http\Controllers\English\Justnaughty\OrderController(),
            new \App\Http\Controllers\English\Hookupdate\OrderController(),
            new \App\Http\Controllers\English\Tenderhookup\OrderController(),
            new \App\Http\Controllers\English\Onenightnaughty\OrderController(),
            new \App\Http\Controllers\English\Flirtdating\OrderController(),
            new \App\Http\Controllers\English\Tinderhookup\OrderController(),
        ];

        foreach($controllers as $k=>$v){
            $v->listTwoDays();
        }
        $japan=new UpdateOrdersJapanController();
        $japan->index();
        echo 'Success!';
    }

}
