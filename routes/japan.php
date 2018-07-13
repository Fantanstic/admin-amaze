<?php

/*  后台板块  */
Route::group(['middleware'=>'web'],function(){
    //Route::any('/Ad/order/olist','Admin\OrderController@olist');//收费统计
    Route::any('/updateorders','Admin\UpdateOrdersController@index');//更新每个版本的order记录

    Route::any('/quickmeet/order/show','Quickmeet\OrderController@show');//quickmeet 收费统计
    Route::any('/quickmeet/order/listtwodays','Quickmeet\OrderController@listTwoDays');//quickmeet 收费统计
    Route::any('/quickmeet/order/orderlist','Quickmeet\OrderController@orderList');//Quickmeet 充值日志

    Route::any('/datingchat/order/show','Datingchat\OrderController@show');//datingchat 收费统计
    Route::any('/datingchat/order/listtwodays','Datingchat\OrderController@listTwoDays');//datingchat 收费统计
    Route::any('/datingchat/order/orderlist','Datingchat\OrderController@orderList');//Datingchat 充值日志

    Route::any('/localhookupdating/order/show','Localhookupdating\OrderController@show');//localhookupdating 收费统计
    Route::any('/localhookupdating/order/listtwodays','Localhookupdating\OrderController@listTwoDays');//localhookupdating 收费统计
    Route::any('/localhookupdating/order/orderlist','Localhookupdating\OrderController@orderList');//Localhookupdating 充值日志

    Route::any('/onenightflirt/order/show','Onenightflirt\OrderController@show');//onenightflirt 收费统计
    Route::any('/onenightflirt/order/listtwodays','Onenightflirt\OrderController@listTwoDays');//onenightflirt 收费统计
    Route::any('/onenightflirt/order/orderlist','Onenightflirt\OrderController@orderList');//Onenightflirt 充值日志

    Route::any('/flirtyboy/order/show','Flirtyboy\OrderController@show');//flirtyboy 收费统计
    Route::any('/flirtyboy/order/listtwodays','Flirtyboy\OrderController@listTwoDays');//flirtyboy 收费统计
    Route::any('/flirtyboy/order/orderlist','Flirtyboy\OrderController@orderList');//Flirtyboy 充值日志

    Route::any('/onenightstand/order/show','Onenightstand\OrderController@show');//onenight 收费统计
    Route::any('/onenightstand/order/listtwodays','Onenightstand\OrderController@listTwoDays');//onenight 收费统计
    Route::any('/onenightstand/order/orderlist','Onenightstand\OrderController@orderList');//Onenightstand 充值日志

    Route::any('/matchflirt/order/show','Matchflirt\OrderController@show');//Matchflirt 收费统计
    Route::any('/matchflirt/order/listtwodays','Matchflirt\OrderController@listTwoDays');//Matchflirt 收费统计
    Route::any('/matchflirt/order/orderlist','Matchflirt\OrderController@orderList');//Matchflirt 充值日志

    Route::any('/onenightvest/order/show','Onenightvest\OrderController@show');//onenightvest 收费统计
    Route::any('/onenightvest/order/listtwodays','Onenightvest\OrderController@listTwoDays');//onenightvest 收费统计
    Route::any('/onenightvest/order/orderlist','Onenightvest\OrderController@orderList');//onenightvest 充值日志

    Route::any('/flirtnow/order/show','Flirtnow\OrderController@show');//flirtnow 收费统计
    Route::any('/flirtnow/order/listtwodays','Flirtnow\OrderController@listTwoDays');//flirtnow 收费统计
    Route::any('/flirtnow/order/orderlist','Flirtnow\OrderController@orderList');//Flirtnow 充值日志

    Route::any('/trycn/order/show','Trycn\OrderController@show');//tanmo 收费统计
    Route::any('/trycn/order/listtwodays','Trycn\OrderController@listTwoDays');//tanmo 收费统计
    Route::any('/trycn/order/orderlist','Trycn\OrderController@orderList');//Trycn 充值日志

    Route::any('/onenightdating/order/show','Onenightdating\OrderController@show');//Onenightdating 收费统计
    Route::any('/onenightdating/order/listtwodays','onenightdating\OrderController@listTwoDays');//Onenightdating 收费统计
    Route::any('/onenightdating/order/orderlist','onenightdating\OrderController@orderList');//onenightdating 充值日志

    Route::any('/naughtyme/order/show','Naughtyme\OrderController@show');//Naughtyme 收费统计
    Route::any('/naughtyme/order/listtwodays','Naughtyme\OrderController@listTwoDays');//Naughtyme 收费统计
    Route::any('/naughtyme/order/orderlist','Naughtyme\OrderController@orderList');//Naughtyme 充值日志

    Route::any('/datingmenow/order/show','Datingmenow\OrderController@show');//Datingmenow 收费统计
    Route::any('/datingmenow/order/listtwodays','Datingmenow\OrderController@listTwoDays');//Datingmenow 收费统计
    Route::any('/datingmenow/order/orderlist','Datingmenow\OrderController@orderList');//datingmenow 充值日志

    Route::any('/flirtmeet/order/show','Flirtmeet\OrderController@show');//Flirtmeet 收费统计
    Route::any('/flirtmeet/order/listtwodays','Flirtmeet\OrderController@listTwoDays');//Flirtmeet 收费统计
    Route::any('/flirtmeet/order/orderlist','Flirtmeet\OrderController@orderList');//Flirtmeet 充值日志

    Route::any('/naughtydating/order/show','Naughtydating\OrderController@show');//naughtydating 收费统计
    Route::any('/naughtydating/order/listtwodays','Naughtydating\OrderController@listTwoDays');//naughtydating 收费统计
    Route::any('/naughtydating/order/orderlist','Naughtydating\OrderController@orderList');//Naughtydating 充值日志

    Route::any('/justnaughty/order/show','Justnaughty\OrderController@show');//Justnaughty 和flirtmeet一样收费统计
    Route::any('/justnaughty/order/listtwodays','Justnaughty\OrderController@listTwoDays');//Justnaughty 收费统计
    Route::any('/justnaughty/order/orderlist','Justnaughty\OrderController@orderList');//Justnaughty 充值日志

    Route::any('/hookupdate/order/show','Hookupdate\OrderController@show');//Hookupdate 收费统计
    Route::any('/hookupdate/order/listtwodays','Hookupdate\OrderController@listTwoDays');//Hookupdate 收费统计
    Route::any('/hookupdate/order/orderlist','Hookupdate\OrderController@orderList');//Hookupdate 充值日志

    Route::any('/onenightnaughty/order/show','Onenightnaughty\OrderController@show');//Onenightnaughty 收费统计
    Route::any('/onenightnaughty/order/listtwodays','Onenightnaughty\OrderController@listTwoDays');//Onenightnaughty 收费统计
    Route::any('/onenightnaughty/order/orderlist','Onenightnaughty\OrderController@orderList');//Onenightnaughty 充值日志

    Route::any('/flirtdating/order/show','Flirtdating\OrderController@show');//Flirtdating 收费统计
    Route::any('/flirtdating/order/listtwodays','Flirtdating\OrderController@listTwoDays');//Flirtdating 收费统计
    Route::any('/flirtdating/order/orderlist','Flirtdating\OrderController@orderList');//Flirtdating 充值日志

    Route::any('/tinderhookup/order/show','Tinderhookup\OrderController@show');//Tinderhookup 收费统计
    Route::any('/tinderhookup/order/listtwodays','Tinderhookup\OrderController@listTwoDays');//Tinderhookup 收费统计
    Route::any('/tinderhookup/order/orderlist','Tinderhookup\OrderController@orderList');//Tinderhookup 充值日志
});