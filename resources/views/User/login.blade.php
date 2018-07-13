<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8">
    <title>dating页面</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/supersized.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>

<body>

<div class="page-container">

    <h1>登录</h1>
    <form action="" method="post">
        <input type="text" name="username" class="username" placeholder="用户名">
        <input type="password" name="password" class="password" placeholder="密码">
        <button type="submit">提交</button>
        <div class="error"><span>+</span></div>
    </form>
    {{--<div class="connect">--}}
        {{--<p>Or connect with:</p>--}}
        {{--<p>--}}
            {{--<a class="facebook" href=""></a>--}}
            {{--<a class="twitter" href=""></a>--}}
        {{--</p>--}}
    {{--</div>--}}
</div>
</div>
<?php
$str1=url('').'/assets/img/backgrounds/1.jpg';
$str2=url('').'/assets/img/backgrounds/2.jpg';
$str3=url('').'/assets/img/backgrounds/3.jpg';
?>
<!-- Javascript -->
<script src="{{asset('assets/js/jquery-1.8.2.min.js')}}"></script>
<script src="{{asset('assets/js/supersized.3.2.7.min.js')}}"></script>
<script src="{{asset('layer/layer.js')}}"></script>
<script src="{{asset('assets/js/scripts.js')}}"></script>
<script>
    jQuery(function($){

        $.supersized({

            // Functionality
            slide_interval     : 4000,    // Length between transitions
            transition         : 1,    // 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
            transition_speed   : 1000,    // Speed of transition
            performance        : 1,    // 0-Normal, 1-Hybrid speed/quality, 2-Optimizes image quality, 3-Optimizes transition speed // (Only works for Firefox/IE, not Webkit)

            // Size & Position
            min_width          : 0,    // Min width allowed (in pixels)
            min_height         : 0,    // Min height allowed (in pixels)
            vertical_center    : 1,    // Vertically center background
            horizontal_center  : 1,    // Horizontally center background
            fit_always         : 0,    // Image will never exceed browser width or height (Ignores min. dimensions)
            fit_portrait       : 1,    // Portrait images will not exceed browser height
            fit_landscape      : 0,    // Landscape images will not exceed browser width

            // Components
            slide_links        : 'blank',    // Individual links for each slide (Options: false, 'num', 'name', 'blank')
            slides             : [    // Slideshow Images
                {image : '{{$str1}}'},
                {image : '{{$str2}}'},
                {image : '{{$str3}}'}
            ]

        });
    });
    $(function(){
        var backMessage = '{{session('status')}}';
        if (backMessage !== "") {
            layer.msg(backMessage);
        }
    });
</script>
</body>

</html>


