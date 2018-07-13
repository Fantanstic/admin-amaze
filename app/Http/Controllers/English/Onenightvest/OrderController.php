<?php

namespace App\Http\Controllers\English\Onenightvest;

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
        //更新今天和昨天的
        //$this->listTwoDays();
        //查找当前版本的数据
        $user_infos=DB::table('apps_orders')
            ->where('version','onenightvest')
            ->orderBy('date','desc')
            ->paginate(10);
        return view('Order.show',['user_infos'=>$user_infos,'version'=>'onenightvest']);
    }
    /**
     * 展示信息总览
     */
    public function listTwoDays()
    {
        $appbuy=config('conf.app_buytype.onenightvest');
        $this->originListTwoDays('onenightvest','','onenightvest',$appbuy);
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
        $data=$this->originOrderLIst('onenightvest','','onenightvest',$search);
        return view('Order.orderlist',['orders'=>$data['orders'],'usernames'=>$data['usernames'],'version'=>$data['version']]);
    }
}
