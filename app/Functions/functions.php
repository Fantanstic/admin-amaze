<?php
//打印变量
function pr($var){
    echo '<pre>'.print_r($var,true).'</pre>';
    exit;
}

//

//把数据库查出来的数据都变成 array
function toArray($obj){
    return json_decode(json_encode($obj),true);
}

/*
 * 把数组中的 null 转为 null
 *
 * */

function unsetNull($arr){
    if($arr !== null){
        if(is_array($arr)){
            if(!empty($arr)){
                foreach($arr as $key => $value){
                    if($value === null){
                        $arr[$key] = '';
                    }else{
                        $arr[$key] = unsetNull($value);		//递归再去执行
                    }
                }
            }else{ $arr = ''; }
        }else{
            if($arr === null){ $arr = ''; }			//注意三个等号
            if(is_integer($arr)){ $arr = strval($arr); }
        }
    }else{ $arr = ''; }
    return $arr;
}

/*
 * $url 请求路径
 * $data_string json字符串
 */
function postUrl($url,$data_string) {
    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, $url);
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl_handle, CURLOPT_HEADER, 0);
    curl_setopt($curl_handle, CURLOPT_POST, true);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, $data_string);
    curl_setopt($curl_handle, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($curl_handle, CURLOPT_SSL_VERIFYPEER, 0);
    $response_json = curl_exec($curl_handle);
    $response = json_decode($response_json, true);
    curl_close($curl_handle);
    return $response;
}

/**
 * 返回 APP 所需数据后 继续执行之后的代码
 */
function keepDoing(){
    $size = ob_get_length();
// send headers to tell the browser to close the connection
    header("Content-Length: $size");
    header('Connection: close');
    ob_end_flush();//冲刷出（送出）输出缓冲区内容并关闭缓冲
    ob_flush();//冲刷出（送出）输出缓冲区中的内容
    flush();//刷新输出缓冲
    /******** background process starts here ********/
    ignore_user_abort(true);//在关闭连接后，继续运行php脚本
    /******** background process ********/
    set_time_limit(0);
}

function uploadFile($file_info,$validExt=array(),$maxLength=2024000,$filename=NULL,$notValidExt=array('exe','php','asp','bat','asa','vbs')){
    $GLOBALS['upload_file_error']='';

    switch($file_info['error'])
    {
        case '0':
            break;
        case '1':
            $GLOBALS['upload_file_error'] = '文件大小超过了php.ini定义的upload_max_filesize值';
            break;
        case '2':
            $GLOBALS['upload_file_error'] = '文件大小超过了HTML定义的MAX_FILE_SIZE值';
            break;
        case '3':
            $GLOBALS['upload_file_error'] = '文件上传不完全';
            break;
        case '4':
            $GLOBALS['upload_file_error'] = '无文件上传';
            break;
        case '6':
            $GLOBALS['upload_file_error'] = '缺少临时文件夹';
            break;
        case '7':
            $GLOBALS['upload_file_error'] = '写文件失败';
            break;
        case '8':
            $GLOBALS['upload_file_error'] = '上传被其它扩展中断';
            break;
        case '':
            $GLOBALS['upload_file_error'] = '上传表单错误';
            break;
        case '999':
        default:
            $GLOBALS['upload_file_error'] = '未知错误';
    }
    if(!empty($GLOBALS['upload_file_error']))return false;

    if(!is_uploaded_file($file_info['tmp_name'])){
        $GLOBALS['upload_file_error'] = '不是上传文件';
        return false;
    }

    if($file_info['size']>$maxLength){
        $GLOBALS['upload_file_error'] = '文件最大不能超过'.$maxLength;
        return false;
    }

    $ext=explode('.',$file_info['name']);
    $ext=strtolower(array_pop($ext));
    if(in_array($ext,(array)$notValidExt)){
        $GLOBALS['upload_file_error']="不允许上传后缀名为[$ext]的文件";
        return false;
    }
    if($validExt && !in_array($ext,(array)$validExt)){
        $GLOBALS['upload_file_error']="不允许上传后缀名为[$ext]的文件";
        return false;
    }

    $basepath = public_path('upload').DIRECTORY_SEPARATOR.'1';// 以后实际项目中需要配置该路径
    $basepathUrl  = DIRECTORY_SEPARATOR.'upload'.DIRECTORY_SEPARATOR.'1';

    //echo PUBLIC_DIR .$basepath;exit;

    if(!file_exists($basepath))mkdir($basepath);
    $basepath=$basepath.DIRECTORY_SEPARATOR.date('Ym');
    $basepathUrl = $basepathUrl .'/' .date('Ym');
    if(!file_exists($basepath))mkdir($basepath);

    if(empty($filename))$filename=uniqid(mt_rand()).'.'.$ext; //uniqid:生成唯一id
    else $filename=$filename.'.'.$ext;

    move_uploaded_file($file_info['tmp_name'], $basepath.DIRECTORY_SEPARATOR.$filename);
    $GLOBALS['last_upload']= $basepathUrl.'/'.$filename;

    return $GLOBALS['last_upload'];
}
function get_client_ip($type = 0) {
    $type       =  $type ? 1 : 0;
    static $ip  =   NULL;
    if ($ip !== NULL) return $ip[$type];
    if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $arr    =   explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
        $pos    =   array_search('unknown',$arr);
        if(false !== $pos) unset($arr[$pos]);
        $ip     =   trim($arr[0]);
    }elseif (isset($_SERVER['HTTP_CLIENT_IP'])) {
        $ip     =   $_SERVER['HTTP_CLIENT_IP'];
    }elseif (isset($_SERVER['REMOTE_ADDR'])) {
        $ip     =   $_SERVER['REMOTE_ADDR'];
    }
    // IP地址合法验证
    $long = ip2long($ip);
    $ip   = $long ? array($ip, $long) : array('0.0.0.0', 0);
    return $ip[$type];
}

