
@extends('../header')


@section('body')
    <div class="admin-content">
        <div class="admin-content-body" style="padding-left: 2%">
            <div class="am-cf am-padding am-padding-bottom-0">
                <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg"></strong></div>
            </div>
            <hr>
            <div class="am-g">
            <h2>UTC时间：{{date('Y-m-d H:i:s')}}</h2>
            <h3>服务器IP:{{$_SERVER['SERVER_ADDR']}}</h3>
            <h3>本地IP:{{isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : (isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : '')}}</h3>
            </div>
        </div>
    </div>
@endsection

