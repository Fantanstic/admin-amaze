@extends('../header')


@section('body')
    <!-- content start -->
    <div class="admin-content">
        <div class="admin-content-body">
            <div class="am-g">
                <div class="am-u-sm-12">
                    <form class="am-form">
                        <table class="am-table am-table-striped am-table-hover table-main">
                            <thead>
                            <tr>
                                <th class="table-id" width="40px">日期</th>
                                <th class="table-title">新增用户数</th>
                                <th class="table-type">7日付费下单</th>
                                <th class="table-author am-hide-sm-only">30日付费下单</th>
                                <th class="table-date am-hide-sm-only">90日付费下单</th>
                                <th class="table-date am-hide-sm-only">vip1下单数</th>
                                <th class="table-date am-hide-sm-only">vip2下单数</th>
                                <th class="table-date am-hide-sm-only">vip3下单数</th>
                                <th class="table-date am-hide-sm-only">删除</th>
                                <th class="table-set">总收入</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $sumu=$sumo=$summo=$sumtmo=$sumvo=$sumvo1=$sumvo2=$allmoney=$sumvo_del=0;?>
                            @foreach($user_infos as $user=>$user_info)
                            <tr>
                                <?php
                                    $user_info=toArray($user_info);
                                    $sumu+=$user_info['newusers'];
                                    $sumo+=$user_info['7days'];
                                    $summo+=$user_info['30days'];
                                    $sumtmo+=$user_info['90days'];
                                    $sumvo+=$user_info['vip1'];
                                    $sumvo1+=$user_info['vip2'];
                                    $sumvo2+=$user_info['vip3'];
                                    $sumvo_del+=$user_info['del'];
                                    $allmoney+=$user_info['总收入'];
                                ?>
                                <td class="am-hide-sm-only"  width="150px">{{$user_info['date']}}</td>
                                <td class="am-hide-sm-only">{{$user_info['newusers']}}</td>
                                <td class="am-hide-sm-only">{{$user_info['7days']}}</td>
                                <td class="am-hide-sm-only">{{$user_info['30days']}}</td>
                                <td class="am-hide-sm-only">{{$user_info['90days']}}</td>
                                <td class="am-hide-sm-only">{{$user_info['vip1']}}</td>
                                <td class="am-hide-sm-only">{{$user_info['vip2']}}</td>
                                <td class="am-hide-sm-only">{{$user_info['vip3']}}</td>
                                <td class="am-hide-sm-only">{{$user_info['del']}}</td>
                                <td class="am-hide-sm-only">{{$user_info['总收入']}}</td>
                            </tr>
                            @endforeach
                            <tr>
                                <td  width="150px">小计:</td>
                                <td>{{$sumu}}</td>
                                <td>{{$sumo}}</td>
                                <td>{{$summo}}</td>
                                <td>{{$sumtmo}}</td>
                                <td>{{$sumvo}}</td>
                                <td>{{$sumvo1}}</td>
                                <td>{{$sumvo2}}</td>
                                <td>{{$sumvo_del}}</td>
                                <td>{{$allmoney}}</td>
                            </tr>
                            </tbody>
                        </table>
                        <div id="pull_right">
                            <div class="pull-right">
                                {!! $user_infos->links() !!}
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
