<!doctype html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dating</title>
    {{--<meta name="description" content="这是一个 table 页面">--}}
    {{--<meta name="keywords" content="table">--}}
    {{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}
    {{--<meta name="renderer" content="webkit">--}}
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="icon" type="image/png" href="{{asset('Amaze_assets/i/favicon.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('Amaze_assets/i/app-icon72x72@2x.png')}}">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <link rel="stylesheet" href="{{asset('Amaze_assets/css/amazeui.min.css ')}}"/>
    <link rel="stylesheet" href="{{asset('Amaze_assets/css/admin.css ')}}"/>
    <link rel="stylesheet" href="{{asset('Amaze_assets/switch/amazeui.switch.css ')}}"/>
    <style>
        #pull_right{
            text-align:center;
        }

        .pull-right {
            /*float: left!important;*/
        }
        .pagination {
            display: inline-block;
            padding-left: 0;
            margin: 20px 0;
            border-radius: 4px;
        }
        .pagination > li {
            display: inline;
        }
        .pagination > li > a,
        .pagination > li > span {
            position: relative;
            float: left;
            padding: 6px 12px;
            margin-left: -1px;
            line-height: 1.42857143;
            color: #428bca;
            text-decoration: none;
            background-color: #fff;
            border: 1px solid #ddd;
        }
        .pagination > li:first-child > a,
        .pagination > li:first-child > span {
            margin-left: 0;
            border-top-left-radius: 4px;
            border-bottom-left-radius: 4px;
        }
        .pagination > li:last-child > a,
        .pagination > li:last-child > span {
            border-top-right-radius: 4px;
            border-bottom-right-radius: 4px;
        }
        .pagination > li > a:hover,
        .pagination > li > span:hover,
        .pagination > li > a:focus,
        .pagination > li > span:focus {
            color: #2a6496;
            background-color: #eee;
            border-color: #ddd;
        }
        .pagination > .active > a,
        .pagination > .active > span,
        .pagination > .active > a:hover,
        .pagination > .active > span:hover,
        .pagination > .active > a:focus,
        .pagination > .active > span:focus {
            z-index: 2;
            color: #fff;
            cursor: default;
            background-color: #428bca;
            border-color: #428bca;
        }
        .pagination > .disabled > span,
        .pagination > .disabled > span:hover,
        .pagination > .disabled > span:focus,
        .pagination > .disabled > a,
        .pagination > .disabled > a:hover,
        .pagination > .disabled > a:focus {
            color: #777;
            cursor: not-allowed;
            background-color: #fff;
            border-color: #ddd;
        }
        .clear{
            clear: both;
        }
        th{
            text-align: center;
        }
        td{
            text-align: center;
        }
        .remark_editor{
            padding: 5px;display: none;border-radius: 5px;border: 1px solid #bfcbd9;outline: none;
        }
        .remark_editor:focus{

            border:1px solid #3bb4f2;
        }
        .am-table>tbody>tr>td{
            vertical-align: middle;
        }
        #admin-offcanvas a:hover{
            color: dodgerblue;
        }
        #admin-offcanvas{
            font-size: 90%;
        }
        .admin-parent{
            background-color: lightblue;
        }
        .admin-content{
            font-size: 90%;
        }
        .admin-sidebar-sub{
            background-color: white;
        }
    </style>
</head>
<body>

<header class="am-topbar am-topbar-inverse admin-header">
    <div class="am-topbar-brand">
        <strong>Dating</strong> <small>后台管理</small>
    </div>

    <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

    <div class="am-collapse am-topbar-collapse" id="topbar-collapse">

        <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list">
            <li class="am-dropdown" data-am-dropdown>
                <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
                    <span class="am-icon-users"></span> 管理员 <span class="am-icon-caret-down"></span>
                </a>
                <ul class="am-dropdown-content">
                    {{--<li><a href="#"><span class="am-icon-user"></span> 资料</a></li>--}}
                    {{--<li><a href="#"><span class="am-icon-cog"></span> 设置</a></li>--}}
                    <li><a href="{{asset('/Ad/user/login')}}"><span class="am-icon-power-off"></span> 退出</a></li>
                </ul>
            </li>
            {{--<li class="am-hide-sm-only"><a href="javascript:;" id="admin-fullscreen"><span class="am-icon-arrows-alt"></span> <span class="admin-fullText">开启全屏</span></a></li>--}}
        </ul>
    </div>
</header>

<div class="am-cf admin-main">
    <!-- sidebar start -->
    @include('sider')
    <!-- sidebar end -->

    <!-- content start -->

    <ol class="am-breadcrumb am-breadcrumb-slash" style="font-size: 90%;background-color:#ffffff;">
        &nbsp;&nbsp;
        <li><a href="#" id="app_group"></a></li>
        <li class="am-active" ><a href="{{url()->current()}}">{{isset($version)?$version:''}}</a></li>
        <li class="am-active" id="app_use"></li>
    </ol>
    <div id="main_body" style="font-size: 90%">

        @section('body')
        @show
    </div>
</div>

<!-- content end -->
</div>

<a href="#" class="am-icon-btn am-icon-th-list am-show-sm-only admin-menu" data-am-offcanvas="{target: '#admin-offcanvas'}"></a>

<footer>
    <hr>
    <p class="am-padding-left">© 2014 AllMobilize, Inc. Licensed under MIT license.</p>
</footer>


<script src="{{URL::asset('./js/jquery.min.js')}}"></script>

<script src="{{asset('Amaze_assets/js/amazeui.min.js')}}"></script>
<script src="{{asset('Amaze_assets/js/app.js')}}"></script>
<script src="{{asset('Amaze_assets/switch/amazeui.switch.js')}}"></script>
<script>
    $('[data-switch-set]').on('click', function() {
        var type = $(this).data('switch-set');
        return $('#switch-' + type).bootstrapSwitch(type, $(this).data('switch-value'));
    });
    $('.btn-loading-example').click(function () {
        var $btn = $(this)
        $btn.button('loading');
        setTimeout(function(){
            $btn.button('reset');
        }, 5000);
    });
    function GetUrlLastStr() {
        //获取url链接
        var url = document.location.toString();

        //去除http://
        var arrUrl = url.split("//");
        var relUrl = arrUrl[1].substring(arrUrl[1].indexOf("/"));//stop省略，截取从start开始到结尾的所有字符

        //去除参数
        if (relUrl.indexOf("?") != -1) {
            relUrl = relUrl.split("?")[0];
        }
        //获取版本号
        relUrl=(relUrl.substring(relUrl.lastIndexOf("/")+1));
        return relUrl;
    }
    // url_words=window.location.host;
    function GetUrlRelativePath() {
        var url = document.location.toString();
        var arrUrl = url.split("//");

        var start = arrUrl[1].indexOf("/");
        var relUrl = arrUrl[1].substring(start);//stop省略，截取从start开始到结尾的所有字符

        if (relUrl.indexOf("?") != -1) {
            relUrl = relUrl.split("?")[0];
        }
        var relUrl_2=relUrl.substr(1);
        var start_2 = relUrl_2.indexOf("/");
        var relUrl = relUrl_2.substring(0,start_2);//stop省略，截取从start开始到结尾的所有字符

        var japan='';
        if(relUrl=='Japan'){
            japan='japan';
            var start_3 = relUrl_2.indexOf("/");
            var relUrl = relUrl_2.substring(start_3);//stop省略，截取从start开始到结尾的所有字符

            var relUrl=relUrl.substr(1);
            var start_4 = relUrl.indexOf("/");
            var relUrl = relUrl.substring(0,start_4);//stop省略，截取从start开始到结尾的所有字符
        }
        return japan ? japan+'_'+relUrl :relUrl;

    }
    var app_type=GetUrlRelativePath();
    var obj = document.getElementsByName(app_type);
    if(typeof obj === 'object' && obj.length!=0){//true){
        obj[0].className += ' am-in';
        ((obj[0].parentNode).parentNode).className+=' am-in';
    }

    var click_apptype=$('.am-in');
    click_apptype.each(function () {
        if($(this).attr('real_name')){
            $('#app_group').text($(this).attr('real_name'));
        }
    })
    var laststr= GetUrlLastStr();
    if(laststr=='orderlist'){
        $('#app_use').text('充值日志');
    }
    if(laststr=='show'){
        $('#app_use').text('信息总览');
    }

</script>
</body>
</html>
