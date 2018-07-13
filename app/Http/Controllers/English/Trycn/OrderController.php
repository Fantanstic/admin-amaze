<?php

namespace App\Http\Controllers\English\Trycn;

use App\Http\Controllers\AdController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use PDO;
//订单控制器
class OrderController extends AdController {

    /**
     * 展示购买的的记录
     */
    public function show()
    {
        //$this->listTwoDays();
        $user_infos=DB::table('apps_orders')
            ->where('version','trycn')
            ->orderBy('date','desc')
            ->paginate(6);
        return view('Order.show',['user_infos'=>$user_infos,'version'=>'trycn']);
    }
    /**
     * 展示信息总览
     */
    public function listTwoDays()
    {
        $appbuy=[
            '7daysnormalvip',
            '1monthnormalvip',
            '3monthsnormalvip',
            '1monthadvancedvip1',
            '1monthadvancedvip2',
            '1monthadvancedvip3',
        ];
        $this->originListTwoDays('trycn','','trycn',$appbuy);
    }
    /**
     * 展示充值视图
     */
    public function orderList()
    {
        $search=[];
        if(isset($_GET['username']) || isset($_GET['date'])){
            $search=['username'=>$_GET['username'],'date'=>$_GET['date']];
        }
        $data=$this->originOrderLIst('trycn','','trycn',$search);
        return view('Order.orderlist',['orders'=>$data['orders'],'usernames'=>$data['usernames'],'version'=>$data['version']]);

    }
}
