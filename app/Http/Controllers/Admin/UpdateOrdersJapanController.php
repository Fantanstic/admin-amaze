<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdController;

//订单控制器
class UpdateOrdersJapanController extends AdController
{
    public function index()
    {
        $controllers = $this->getControllers();
        foreach($controllers as $v){
            $v->listTwoDays();
        }
    }
    public function getControllers()
    {
        return [
            new \App\Http\Controllers\Japan\Localhookupdating\OrderController(),
            new \App\Http\Controllers\Japan\Matchflirt\OrderController(),
            new \App\Http\Controllers\Japan\Onenightflirt\OrderController(),
            new \App\Http\Controllers\Japan\Quickmeet\OrderController(),
            new \App\Http\Controllers\Japan\Flirtmeet\OrderController(),
            new \App\Http\Controllers\Japan\Naughtydating\OrderController(),
            new \App\Http\Controllers\Japan\Justnaughty\OrderController(),
            new \App\Http\Controllers\Japan\Hookupdate\OrderController(),
            new \App\Http\Controllers\Japan\Onenightnaughty\OrderController(),
            new \App\Http\Controllers\Japan\Flirtdating\OrderController(),
            new \App\Http\Controllers\Japan\Tinderhookup\OrderController(),
        ];
    }
}
