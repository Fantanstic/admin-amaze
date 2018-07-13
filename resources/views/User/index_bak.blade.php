
@extends('../header')


@section('body')
    <div class="admin-content">
        <div class="admin-content-body">
            <div class="am-g">
                <h2>UTC时间：{{date('Y-m-d H:i:s')}}</h2>
                <div class="am-u-sm-12">
                    <form class="am-form">
                        <table class="am-table am-table-striped am-table-hover table-main">
                            <thead>
                            <tr>
                                <th class="table-id" width="40px">App名称</th>
                                <th class="table-title">域名</th>
                                <th class="table-type">类型</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($app_kinds as $app_kind=>$app)
                                <tr>
                                    <td class="am-hide-sm-only"  width="150px">{{$app['name']}}</td>
                                    <td class="am-hide-sm-only">{{$app['url']}}</td>
                                    <td class="am-hide-sm-only">{{$app['type']}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </form>

                </div>

            </div>
        </div>

    </div>
@endsection

