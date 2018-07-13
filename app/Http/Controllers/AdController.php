<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use illuminate\support\facades\Route;
use Illuminate\Routing\Controller as BaseController;
use PDO;
use PDOException;
use Guzzle\Parser\Url;

class AdController extends BaseController
{
    //use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public $pdo;
    public $pdo_quickmeet;

    public function __construct()
    {
        set_time_limit(240);
        date_default_timezone_set('UTC');
        $this->now = $_SERVER['REQUEST_TIME'];
        $userSession = isset($_SESSION['ADMIN'])?$_SESSION['ADMIN'] : '';
        //权限控制
        $action = '';
        $current = \Route::current();
        if($current){
            $action = explode('@',$current->getActionName())[1];
            if(!$userSession && $action!='login' && $action!='updateOrders'){
                $loginUrl = url('/Ad/user/login');
                header("Location: $loginUrl");
            }
        }else{
            echo 1;
        }
    }

    /**
     * 返回充值列表
     * @param $dbname
     * @param $version
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function originOrderLIst($dbname,$where_version='',$version='',$search=[])
    {
        $where_words=' 1=1 ';
        //用户名
        if(isset($search['username']) && !empty($search['username'])){
            $username=preg_replace('# #','',$search['username']);
            $id=DB::connection($dbname)->table('zeai_main')->where('username',$username)->first(['id']);
            $where_words.=$id ? " and userid='{$id->id}' " :" and userid='{$search['username']}' ";
        }
        //日期
        if(isset($search['date']) && !empty($search['date'])){
            $date=preg_replace('# #','',$search['date']);
            $where_words.=" and FROM_UNIXTIME(addtime,'%Y-%m-%d') >= '{$date}' and FROM_UNIXTIME(addtime,'%Y-%m-%d') <= '{$date}'";

        }
        $orders=DB::connection($dbname)->table('zeai_order')
            ->where('chanel',$where_version)
            ->whereRaw(" $where_words ")
            ->orderBy('id','desc')
            ->paginate(15);
        $version=$where_version ? $where_version : $version;

        $ids=array_column(toArray($orders)['data'],'userid');

        $str= $ids ? implode(',',$ids) : 1;
        $usernames=toArray(DB::connection($dbname)->table('zeai_main')
            ->whereRaw(" id in ($str)")
            ->get(['username','id']));
        $usernames=array_column($usernames,'username','id');

        return [
                'orders'=>$orders,
                'usernames'=>$usernames,
                'version'=>$version,
            ];
//        return view('Order.orderlist',['orders'=>$orders,'usernames'=>$usernames,'version'=>$version]);
    }

    /**
     * 根据版本统计
     * @param $dbname
     * @param string $table_version
     * @param $version
     * @param $appbuy
     */
    public function originListTwoDays($dbname,$table_version='',$version,$appbuy)
    {
        $dst = date('Y-m-d 00:00:00', $this->now);

        $day = strtotime($dst);
        $maxarr = [];
        for ($i = 0; $i < 2; $i++) {
            $dtime = date('Y-m-d', ($day - $i * 86400));
            $maxarr[] = ['reg' => $dtime];
        }
        $where_source=$table_version ? "source='{$table_version}'" :' 1=1 ';
        $where_chanel=$table_version ? "chanel='{$table_version}'" :' 1=1 ';

        foreach ($maxarr as $k=>$v){
            $arr=[];
            //当日注册
            $res=DB::connection($dbname)
                ->select("select count(id) newusers from zeai_main where $where_source and FROM_UNIXTIME(regtime,'%Y-%m-%d') >= '{$v['reg']}' and FROM_UNIXTIME(regtime,'%Y-%m-%d') <= '{$v['reg']}'");

            $alldays=toArray(DB::connection($dbname)
                ->select("select id,`type` from zeai_order where $where_chanel and FROM_UNIXTIME(addtime,'%Y-%m-%d') >= '{$v['reg']}' and FROM_UNIXTIME(addtime,'%Y-%m-%d') <= '{$v['reg']}' "));

            $sevendays=$thirtydays=$nintydays=$vip1=$vip2=$vip3=$delete=0;
            foreach ($alldays as $m=>$n){
                if(isset($appbuy[6]) && $alldays[$m]['type']==$appbuy[6]){
                    $delete+=1;
                }
                switch ($alldays[$m]['type']){
                    case $appbuy[0]:
                        $sevendays+=1;
                        continue;
                    case $appbuy[1]:
                        $thirtydays+=1;
                        continue;
                    case $appbuy[2]:
                        $nintydays+=1;
                        continue;
                    case $appbuy[3]:
                        $vip1+=1;
                        continue;
                    case $appbuy[4]:
                        $vip2+=1;
                        continue;
                    case $appbuy[5]:
                        $vip3+=1;
                        continue;
                    default :
                        continue;
                }

            }

            $arr['newusers']=$res[0]->newusers;
            $arr['7days']=$sevendays;
            $arr['30days']=$thirtydays;
            $arr['90days']=$nintydays;
            $arr['vip1']=$vip1;
            $arr['vip2']=$vip2;
            $arr['vip3']=$vip3;

            $version_price = strpos($version,'_japan') ? substr($version,0,-6) : $version;

            $prices=config('conf.app_buyprice.'.$version_price);


            $arr['总收入']=($arr['7days'] * $prices['7days']) + ($arr['30days'] * $prices['30days']) + ($arr['90days'] * $prices['90days']) + ($arr['vip1'] * $prices['vip1']) + ($arr['vip2'] * $prices['vip2']) + ($arr['vip3'] * $prices['vip3']) + (isset($arr['del']) ? ($arr['del'] * 9.99):0);
            $arr['date']=$v['reg'];
            $arr['version']=$version;


            if($arr['总收入'] || $arr['newusers']) {
                //添加到表中
                if (!DB::table('apps_orders')->where(['date' => $v['reg'], 'version' => $version])->count(['id'])) {
                    DB::table('apps_orders')->insert($arr);
                } else {
                    DB::table('apps_orders')->where(['date' => $v['reg'], 'version' => $version])->update($arr);
                }
            }
        }
    }
}
