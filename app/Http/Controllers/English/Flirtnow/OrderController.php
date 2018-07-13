<?php

namespace App\Http\Controllers\English\Flirtnow;

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
            ->where('version','flirtnow')
            ->orderBy('date','desc')
            ->paginate(10);
        return view('Order.show',['user_infos'=>$user_infos,'version'=>'flirtnow']);
    }
    /**
     * 展示信息总览
     */
    public function listTwoDays()
    {
        $appbuy=config('conf.app_buytype.flirtnow');
        $this->originListTwoDays('flirtnow','','flirtnow',$appbuy);
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
       $data=$this->originOrderLIst('flirtnow','','flirtnow',$search);
        return view('Order.orderlist',['orders'=>$data['orders'],'usernames'=>$data['usernames'],'version'=>$data['version']]);
    }
}
