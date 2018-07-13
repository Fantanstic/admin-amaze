<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class UpdateData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '更新两天的数据';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //
        $arr = [
            'App\Http\Controllers\English\Justnaughty\OrderController',
            'App\Http\Controllers\Japan\Justnaughty\OrderController',
            'App\Http\Controllers\English\Tinderhookup\OrderController',

            'App\Http\Controllers\English\Flirtdating\OrderController',
            'App\Http\Controllers\English\Flirtmeet\OrderController',
            'App\Http\Controllers\English\Flirtnow\OrderController',
            'App\Http\Controllers\English\Flirtyboy\OrderController',
            'App\Http\Controllers\English\Hookupdate\OrderController',
            'App\Http\Controllers\English\Matchflirt\OrderController',
            'App\Http\Controllers\English\Naughtydating\OrderController',
            'App\Http\Controllers\English\Naughtyhookup\OrderController',
            'App\Http\Controllers\English\Naughtyme\OrderController',
            'App\Http\Controllers\English\Naughtyonenight\OrderController',
            'App\Http\Controllers\English\Nudedating\OrderController',
            'App\Http\Controllers\English\Onenightdating\OrderController',
            'App\Http\Controllers\English\Onenightflirt\OrderController',
            'App\Http\Controllers\English\Onenightnaughty\OrderController',
            'App\Http\Controllers\English\Onenightstand\OrderController',
            'App\Http\Controllers\English\Onenightstand_20180115\OrderController',
            'App\Http\Controllers\English\Onenightvest\OrderController',
            'App\Http\Controllers\English\Quickmeet\OrderController',
            'App\Http\Controllers\English\Tenderhookup\OrderController',


            'App\Http\Controllers\Japan\Flirtdating\OrderController',
            'App\Http\Controllers\Japan\Flirtmeet\OrderController',
            'App\Http\Controllers\Japan\Hookupdate\OrderController',
            'App\Http\Controllers\Japan\Justnaughty\OrderController',
            'App\Http\Controllers\Japan\Matchflirt\OrderController',
            'App\Http\Controllers\Japan\Naughtydating\OrderController',
            'App\Http\Controllers\Japan\Onenightflirt\OrderController',
            'App\Http\Controllers\Japan\Onenightnaughty\OrderController',
            'App\Http\Controllers\Japan\Tinderhookup\OrderController',

            'App\Http\Controllers\English\Datingchat\OrderController',
            'App\Http\Controllers\English\Datingmenow\OrderController',
            'App\Http\Controllers\English\Localhookupdating\OrderController',
            'App\Http\Controllers\Japan\Localhookupdating\OrderController',
            //'App\Http\Controllers\English\Trycn\OrderController',
        ];
        foreach ($arr as $v){
            $model = new $v();
            $model->listTwoDays();
            echo 'update '.$v.' success'.PHP_EOL;
            \Log::info('update '.$v.' success');
        }
    }
}
