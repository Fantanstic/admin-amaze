<?php

/*  后台板块  */
Route::group(['middleware'=>'web'],function(){
    //Route::any('/Ad/order/olist','Admin\OrderController@olist');//收费统计

    Route::any('/quickmeet/order/show','Quickmeet\OrderController@show');//quickmeet 收费统计
    Route::any('/quickmeet/order/listtwodays','Quickmeet\OrderController@listTwoDays');//quickmeet 收费统计
    Route::any('/quickmeet/order/orderlist','Quickmeet\OrderController@orderList');//Naughtyme 充值日志

    Route::any('/datingchat/order/show','Datingchat\OrderController@show');//datingchat 收费统计
    Route::any('/datingchat/order/listtwodays','Datingchat\OrderController@listTwoDays');//datingchat 收费统计
    Route::any('/datingchat/order/orderlist','Datingchat\OrderController@orderList');//Naughtyme 充值日志

    Route::any('/localhookupdating/order/show','Localhookupdating\OrderController@show');//localhookupdating 收费统计
    Route::any('/localhookupdating/order/listtwodays','Localhookupdating\OrderController@listTwoDays');//localhookupdating 收费统计
    Route::any('/localhookupdating/order/orderlist','Localhookupdating\OrderController@orderList');//Naughtyme 充值日志

    Route::any('/onenightflirt/order/show','Onenightflirt\OrderController@show');//onenightflirt 收费统计
    Route::any('/onenightflirt/order/listtwodays','Onenightflirt\OrderController@listTwoDays');//onenightflirt 收费统计
    Route::any('/onenightflirt/order/orderlist','Onenightflirt\OrderController@orderList');//Naughtyme 充值日志

    Route::any('/flirtyboy/order/show','Flirtyboy\OrderController@show');//flirtyboy 收费统计
    Route::any('/flirtyboy/order/listtwodays','Flirtyboy\OrderController@listTwoDays');//flirtyboy 收费统计
    Route::any('/flirtyboy/order/orderlist','Flirtyboy\OrderController@orderList');//Naughtyme 充值日志

    Route::any('/onenightstand/order/show','Onenightstand\OrderController@show');//onenight 收费统计
    Route::any('/onenightstand/order/listtwodays','Onenightstand\OrderController@listTwoDays');//onenight 收费统计
    Route::any('/onenightstand/order/orderlist','Onenightstand\OrderController@orderList');//Naughtyme 充值日志


    Route::any('/matchflirt/order/show','Matchflirt\OrderController@show');//Matchflirt 收费统计
    Route::any('/matchflirt/order/listtwodays','Matchflirt\OrderController@listTwoDays');//Matchflirt 收费统计
    Route::any('/matchflirt/order/orderlist','Matchflirt\OrderController@orderList');//Matchflirt 充值日志

    Route::any('/onenightvest/order/show','Onenightvest\OrderController@show');//onenightvest 收费统计
    Route::any('/onenightvest/order/listtwodays','Onenightvest\OrderController@listTwoDays');//onenightvest 收费统计
    Route::any('/naughtyme/order/orderlist','Onenightvest\OrderController@orderList');//Onenightvest 充值日志

    Route::any('/flirtnow/order/show','Flirtnow\OrderController@show');//flirtnow 收费统计
    Route::any('/flirtnow/order/listtwodays','Flirtnow\OrderController@listTwoDays');//flirtnow 收费统计
    Route::any('/flirtnow/order/orderlist','Flirtnow\OrderController@orderList');//Flirtnow 充值日志

    Route::any('/trycn/order/show','Trycn\OrderController@show');//tanmo 收费统计
    Route::any('/trycn/order/listtwodays','Trycn\OrderController@listTwoDays');//tanmo 收费统计
    Route::any('/trycn/order/orderlist','Trycn\OrderController@orderList');//Naughtyme 充值日志

    Route::any('/onenightdating/order/show','Onenightdating\OrderController@show');//Onenightdating 收费统计
    Route::any('/onenightdating/order/listtwodays','Onenightdating\OrderController@listTwoDays');//Onenightdating 收费统计
    Route::any('/onenightdating/order/orderlist','Onenightdating\OrderController@orderList');//Naughtyme 充值日志

    Route::any('/naughtyme/order/show','Naughtyme\OrderController@show');//Naughtyme 收费统计
    Route::any('/naughtyme/order/listtwodays','Naughtyme\OrderController@listTwoDays');//Naughtyme 收费统计
    Route::any('/naughtyme/order/orderlist','Naughtyme\OrderController@orderList');//Naughtyme 充值日志

    Route::any('/datingmenow/order/show','Datingmenow\OrderController@show');//Datingmenow 收费统计
    Route::any('/datingmenow/order/listtwodays','Datingmenow\OrderController@listTwoDays');//Datingmenow 收费统计
    Route::any('/datingmenow/order/orderlist','Datingmenow\OrderController@orderList');//Datingmenow 充值日志

    Route::any('/flirtmeet/order/show','Flirtmeet\OrderController@show');//Flirtmeet 收费统计
    Route::any('/flirtmeet/order/listtwodays','Flirtmeet\OrderController@listTwoDays');//Flirtmeet 收费统计
    Route::any('/flirtmeet/order/orderlist','Flirtmeet\OrderController@orderList');//naughtydating 充值日志

    Route::any('/naughtydating/order/show','Naughtydating\OrderController@show');//naughtydating 收费统计
    Route::any('/naughtydating/order/listtwodays','Naughtydating\OrderController@listTwoDays');//naughtydating 收费统计
    Route::any('/naughtydating/order/orderlist','Naughtydating\OrderController@orderList');//naughtydating 充值日志

    Route::any('/naughtyhookup/order/show','Naughtyhookup\OrderController@show');//naughtyhookup 收费统计
    Route::any('/naughtyhookup/order/listtwodays','Naughtyhookup\OrderController@listTwoDays');//naughtyhookup 更新最近的数据
    Route::any('/naughtyhookup/order/orderlist','Naughtyhookup\OrderController@orderList');//naughtyhookup 收费统计

    Route::any('/datingonenight/order/show','Datingonenight\OrderController@show');//datingonenight 收费统计
    Route::any('/datingonenight/order/listtwodays','Datingonenight\OrderController@listTwoDays');//datingonenight 更新最近的数据
    Route::any('/datingonenight/order/orderlist','Datingonenight\OrderController@orderList');//datingonenight 充值日志

    Route::any('/nudedating/order/show','Nudedating\OrderController@show');//datingonenight 收费统计
    Route::any('/nudedating/order/listtwodays','Nudedating\OrderController@listTwoDays');//datingonenight 更新最近的数据
    Route::any('/nudedating/order/orderlist','Nudedating\OrderController@orderList');//nudedating 充值日志

    Route::any('/naughtyonenight/order/show','Naughtyonenight\OrderController@show');//naughtyonenight 收费统计
    Route::any('/naughtyonenight/order/listtwodays','Naughtyonenight\OrderController@listTwoDays');//naughtyonenight 更新最近的数据
    Route::any('/naughtyonenight/order/orderlist','Naughtyonenight\OrderController@orderList');//naughtyonenight 充值日志

    Route::any('/onenightstand_20180115/order/show','Onenightstand_20180115\OrderController@show');//naughtyonenight 收费统计
    Route::any('/onenightstand_20180115/order/listtwodays','Onenightstand_20180115\OrderController@listTwoDays');//naughtyonenight 更新最近的数据
    Route::any('/onenightstand_20180115/order/orderlist','Onenightstand_20180115\OrderController@orderList');//onenightstand_20180115 充值日志

    Route::any('/justnaughty/order/show','Justnaughty\OrderController@show');//Flirtmeet 收费统计
    Route::any('/justnaughty/order/listtwodays','Justnaughty\OrderController@listTwoDays');//Flirtmeet 收费统计
    Route::any('/justnaughty/order/orderlist','Justnaughty\OrderController@orderList');//naughtydating 充值日志

    Route::any('/hookupdate/order/show','Hookupdate\OrderController@show');//Flirtmeet 收费统计
    Route::any('/hookupdate/order/listtwodays','Hookupdate\OrderController@listTwoDays');//Flirtmeet 收费统计
    Route::any('/hookupdate/order/orderlist','Hookupdate\OrderController@orderList');//naughtydating 充值日志

    Route::any('/tenderhookup/order/show','Tenderhookup\OrderController@show');//Tenderhookup 收费统计
    Route::any('/tenderhookup/order/listtwodays','Tenderhookup\OrderController@listTwoDays');//Tenderhookup 收费统计
    Route::any('/tenderhookup/order/orderlist','Tenderhookup\OrderController@orderList');//Tenderhookup 充值日志

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