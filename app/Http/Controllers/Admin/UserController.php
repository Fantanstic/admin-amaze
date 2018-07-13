<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;
use PDO;
//订单控制器
class UserController extends AdController {

    public function login(Request $request){
        if($request->isMethod('post')){
            $username = trim($request->input('username'));
            $password = trim($request->input('password'));

//            $res = DB::table('user')->where(['username'=>$username,'password'=>md5(config('conf.PASS_SALT').$password)])->first(['username']);
//            if($res){
            if($username==='admin' && $password==='smcpc'){
//                $_SESSION['ADMIN'] = $res->username;
                $_SESSION['ADMIN'] = $username;
                if(isset($_SESSION['ADMIN']) && $_SESSION['ADMIN']!=''){
                    return redirect('/Ad');
                }
            }else{
                $messege='Incorrect username or password!';
                return redirect('/Ad/user/login')->with('status',$messege);
            }
        }else{
            if(isset($_SESSION['ADMIN'])){
                session_unset();
            }
            return view('User.login');
        }
    }

    public function index()
    {
        return view('User.index');
    }
}
