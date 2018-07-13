
    <!-- sidebar end -->
@extends('../header')


@section('body')
    <!-- content start -->
    <div class="admin-content">
        <div class="admin-content-body">
            <div class="am-cf am-padding am-padding-bottom-0">
                <form class="am-form-inline" role="form" action="" method="GET">
                    <div class="am-form-group">
                        <input type="text" name="username" class="am-form-field" placeholder="用户名" value="{{isset($_GET['username']) ? $_GET['username']:''}}">
                    </div>

                    <div class="am-form-group">
                        <input size="16" type="date" name="date" placeholder="日期" id="datetimepicker" class="am-form-field" value="{{isset($_GET['date']) ? $_GET['date']:''}}">
                    </div>
                    <button type="submit" class="am-btn am-btn-default">搜索</button>
                    <button class="am-btn am-btn-primary btn-loading-example"><a href="{{url()->current()}}" style="color:white">返回</a></button>
                </form>
            </div>
            <div class="am-g">
                <div class="am-u-sm-12">
                    <form class="am-form">
                        <table class="am-table am-table-striped am-table-hover table-main">
                            <thead>
                            <tr>
                                <th class="table-id" width="40px">ID</th>
                                <th class="table-title">用户ID</th>
                                <th class="table-type">用户名</th>
                                <th class="table-author am-hide-sm-only">类别</th>
                                <th class="table-date am-hide-sm-only">下单时间(UTC)</th>
                                <th class="table-date am-hide-sm-only">订单号</th>
                                {{--<th class="table-date am-hide-sm-only">版本</th>--}}
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $order)
                                <?php $order=toArray($order);?>
                            <tr>
                                <td class="am-hide-sm-only"  width="150px">{{$order['id']}}</td>
                                <td class="am-hide-sm-only"  width="150px">{{$order['userid']}}</td>
                                <td class="am-hide-sm-only"  width="150px">{{isset($usernames[$order['userid']])?$usernames[$order['userid']]:''}}</td>
                                <td class="am-hide-sm-only"  width="150px">{{$order['type']}}</td>
                                <td class="am-hide-sm-only"  width="150px">{{date('Y-m-d H:i:s',$order['addtime'])}}</td>
                                <td class="am-hide-sm-only"  width="150px">{{$order['order_sn']}}</td>
                                {{--<td class="am-hide-sm-only"  width="150px">{{$order['chanel']}}</td>--}}

                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div id="pull_right">
                            <div class="pull-right">
<!--                                --><?php //var_dump($orders->links());exit;?>
                                {!! $orders->appends($_GET)->links() !!}
                            </div>
                        </div>
                        <hr />
                    </form>

                </div>

            </div>
        </div>

    </div>
    <!-- content end -->
@endsection
