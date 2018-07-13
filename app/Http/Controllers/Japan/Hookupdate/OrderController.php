<?php

namespace App\Http\Controllers\Japan\Hookupdate;

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
            ->where('version','hookupdate_japan')
            ->orderBy('date','desc')
            ->paginate(6);
        return view('Order.show',['user_infos'=>$user_infos,'version'=>'hookupdate_japan']);
    }

    /**
     *
     */
    public function listTwoDays()
    {
        $appbuy=config('conf.app_buytype.hookupdate');
        $this->originListTwoDays('onenightflirt_japan','hookupdate','hookupdate_japan',$appbuy);
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
        $data=$this->originOrderLIst('onenightflirt_japan','hookupdate','',$search);
        return view('Order.orderlist',['orders'=>$data['orders'],'usernames'=>$data['usernames'],'version'=>$data['version']]);
    }
}
